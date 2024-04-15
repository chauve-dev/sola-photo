<?php

namespace App\Http\Controllers;

use App\Models\Picture;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\Drivers\Gd\Driver;
use Intervention\Image\ImageManager;

/**
 * @group pictures
 *
 * Api for managing pictures
 */
class PictureController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return Picture::all();
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'picture' => 'required|file|image|mimes:jpeg,png,jpg',
        ]);

        $manager = new ImageManager(new Driver());

        $picture_req = $request->file('picture');
        $advancedPicture = $manager->read($picture_req->path());
        $latitude_exif = $advancedPicture->exif('GPS.GPSLatitude');
        $longitude_exif = $advancedPicture->exif('GPS.GPSLongitude');
        $altitude_exif = eval('return ' . $advancedPicture->exif('GPS.GPSAltitude') . ";");
        $datetime_exif = date('Y-m-d\TH:i:sO', strtotime($advancedPicture->exif('EXIF.DateTimeOriginal')));


        if(null == $latitude_exif || null == $longitude_exif) {
            return response()->json('The image was incomplete / missing exif info', 500);
        }

        $lat = eval('return ' . $latitude_exif[0] . ';')
            + (eval('return ' . $latitude_exif[1] . ';') / 60)
            + (eval('return ' . $latitude_exif[2] . ';') / 3600);

        $lng = eval('return ' . $longitude_exif[0] . ';')
            + (eval('return ' . $longitude_exif[1] . ';') / 60)
            + (eval('return ' . $longitude_exif[2] . ';') / 3600);

        $url = $picture_req->store('', 'public');
        $picture = new Picture([
            'path' => $url,
            'latitude' => $lat,
            'longitude' => $lng,
            'altitude' => $altitude_exif,
            'date' => $datetime_exif
        ]);
        $picture->save();
        return response()->json('Success', 200);
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        return Picture::find($id);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $picture = Picture::find($id);
        if(null == $picture) {
            return response()->json('Picture not found', 404);
        }
        $picture->delete();
        return response()->json('Picture deleted', 200);
    }
}
