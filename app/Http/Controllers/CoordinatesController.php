<?php

namespace App\Http\Controllers;

use App\Models\Coordinate;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

/**
 * @group coordinates
 *
 * Api for managing coordinates
 */
class CoordinatesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $coordinates = Coordinate::all();
        return $coordinates;
    }

    /**
     * Store multiple resources.
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'coordinates.*.latitude' => 'required',
            'coordinates.*.longitude' => 'required',
            'coordinates.*.date' => 'required|date'
        ]);

        $validator->validate();

        $coordinates = [];

        foreach ($request->coordinates as $coordinate) {
            $coordinate = new Coordinate([
                'latitude' => $coordinate['latitude'],
                'longitude' => $coordinate['longitude'],
                'date' => $coordinate['date']
            ]);
            $coordinates[] = $coordinate;
            $coordinate->save();
        }

        return $coordinates;
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        return Coordinate::find($id);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Coordinate $coordinates)
    {
        $request->validate([
            'latitude' => 'required',
            'longitude' => 'required',
            'date' => 'required|date'
        ]);

        $coordinates->update([
            'latitude' => $request->get('latitude'),
            'longitude' => $request->get('longitude'),
            'date' => $request->get('date')
        ]);

        return response()->json($coordinates);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $coordinate = Coordinate::find($id);
        if (null == $coordinate) {
            return response()->json('Coordinate not found', 404);
        }
        $coordinate->delete();
        return response()->json('Coordinate deleted', 200);
    }
}
