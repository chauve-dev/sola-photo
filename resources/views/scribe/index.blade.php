<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta content="IE=edge,chrome=1" http-equiv="X-UA-Compatible">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <title>Sola-photo Documentation</title>

    <link href="https://fonts.googleapis.com/css?family=Open+Sans&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="{{ asset("/vendor/scribe/css/theme-default.style.css") }}" media="screen">
    <link rel="stylesheet" href="{{ asset("/vendor/scribe/css/theme-default.print.css") }}" media="print">

    <script src="https://cdn.jsdelivr.net/npm/lodash@4.17.10/lodash.min.js"></script>

    <link rel="stylesheet"
          href="https://unpkg.com/@highlightjs/cdn-assets@11.6.0/styles/obsidian.min.css">
    <script src="https://unpkg.com/@highlightjs/cdn-assets@11.6.0/highlight.min.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jets/0.14.1/jets.min.js"></script>

    <style id="language-style">
        /* starts out as display none and is replaced with js later  */
                    body .content .bash-example code { display: none; }
                    body .content .javascript-example code { display: none; }
            </style>

    <script>
        var tryItOutBaseUrl = "http://localhost";
        var useCsrf = Boolean();
        var csrfUrl = "/sanctum/csrf-cookie";
    </script>
    <script src="{{ asset("/vendor/scribe/js/tryitout-4.35.0.js") }}"></script>

    <script src="{{ asset("/vendor/scribe/js/theme-default-4.35.0.js") }}"></script>

</head>

<body data-languages="[&quot;bash&quot;,&quot;javascript&quot;]">

<a href="#" id="nav-button">
    <span>
        MENU
        <img src="{{ asset("/vendor/scribe/images/navbar.png") }}" alt="navbar-image"/>
    </span>
</a>
<div class="tocify-wrapper">
    
            <div class="lang-selector">
                                            <button type="button" class="lang-button" data-language-name="bash">bash</button>
                                            <button type="button" class="lang-button" data-language-name="javascript">javascript</button>
                    </div>
    
    <div class="search">
        <input type="text" class="search" id="input-search" placeholder="Search">
    </div>

    <div id="toc">
                    <ul id="tocify-header-introduction" class="tocify-header">
                <li class="tocify-item level-1" data-unique="introduction">
                    <a href="#introduction">Introduction</a>
                </li>
                            </ul>
                    <ul id="tocify-header-authenticating-requests" class="tocify-header">
                <li class="tocify-item level-1" data-unique="authenticating-requests">
                    <a href="#authenticating-requests">Authenticating requests</a>
                </li>
                            </ul>
                    <ul id="tocify-header-coordinates" class="tocify-header">
                <li class="tocify-item level-1" data-unique="coordinates">
                    <a href="#coordinates">coordinates</a>
                </li>
                                    <ul id="tocify-subheader-coordinates" class="tocify-subheader">
                                                    <li class="tocify-item level-2" data-unique="coordinates-GETapi-coordinates">
                                <a href="#coordinates-GETapi-coordinates">Display a listing of the resource.</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="coordinates-POSTapi-coordinates">
                                <a href="#coordinates-POSTapi-coordinates">Store multiple resources.</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="coordinates-GETapi-coordinates--id-">
                                <a href="#coordinates-GETapi-coordinates--id-">Display the specified resource.</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="coordinates-PUTapi-coordinates--id-">
                                <a href="#coordinates-PUTapi-coordinates--id-">Update the specified resource in storage.</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="coordinates-DELETEapi-coordinates--id-">
                                <a href="#coordinates-DELETEapi-coordinates--id-">Remove the specified resource from storage.</a>
                            </li>
                                                                        </ul>
                            </ul>
                    <ul id="tocify-header-pictures" class="tocify-header">
                <li class="tocify-item level-1" data-unique="pictures">
                    <a href="#pictures">pictures</a>
                </li>
                                    <ul id="tocify-subheader-pictures" class="tocify-subheader">
                                                    <li class="tocify-item level-2" data-unique="pictures-GETapi-pictures">
                                <a href="#pictures-GETapi-pictures">Display a listing of the resource.</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="pictures-POSTapi-pictures">
                                <a href="#pictures-POSTapi-pictures">Store a newly created resource in storage.</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="pictures-GETapi-pictures--id-">
                                <a href="#pictures-GETapi-pictures--id-">Display the specified resource.</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="pictures-DELETEapi-pictures--id-">
                                <a href="#pictures-DELETEapi-pictures--id-">Remove the specified resource from storage.</a>
                            </li>
                                                                        </ul>
                            </ul>
            </div>

    <ul class="toc-footer" id="toc-footer">
                    <li style="padding-bottom: 5px;"><a href="{{ route("scribe.postman") }}">View Postman collection</a></li>
                            <li style="padding-bottom: 5px;"><a href="{{ route("scribe.openapi") }}">View OpenAPI spec</a></li>
                <li><a href="http://github.com/knuckleswtf/scribe">Documentation powered by Scribe ✍</a></li>
    </ul>

    <ul class="toc-footer" id="last-updated">
        <li>Last updated: April 15, 2024</li>
    </ul>
</div>

<div class="page-wrapper">
    <div class="dark-box"></div>
    <div class="content">
        <h1 id="introduction">Introduction</h1>
<aside>
    <strong>Base URL</strong>: <code>http://localhost</code>
</aside>
<p>La belle api</p>

        <h1 id="authenticating-requests">Authenticating requests</h1>
<p>This API is not authenticated.</p>

        <h1 id="coordinates">coordinates</h1>

    <p>Api for managing coordinates</p>

                                <h2 id="coordinates-GETapi-coordinates">Display a listing of the resource.</h2>

<p>
</p>



<span id="example-requests-GETapi-coordinates">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://localhost/api/coordinates" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/coordinates"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-coordinates">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <details class="annotation">
            <summary style="cursor: pointer;">
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
access-control-allow-origin: *
set-cookie: XSRF-TOKEN=eyJpdiI6IllaT3dpNXJDYTR1Y3JGa2t2Q3AzRWc9PSIsInZhbHVlIjoia2pTOUZNdWE0MFJiTUhiZUN6U3VQZ2JQa20wck1JM1hJeDBuUmllNG1aSUlCMXlHai96RWlFQVBkaTRibFRzV2dibElnSDFWUm5Vd1hJd3pEY2lKd2lXZlp2VWM1bXVKakxRaDc0N2tFWE5qZkxMUmlXTTh2MlNMMk9GVDg2MlIiLCJtYWMiOiIyMzNhN2NlOGIyZGEyYTYxMzhkNjgxNzdkOTlhNGQ3ZDlmNDZhOTcxOTNiMzEzNzE0ZTJhMTJhMWYxZWZhMDgwIiwidGFnIjoiIn0%3D; expires=Mon, 15 Apr 2024 22:34:47 GMT; Max-Age=7200; path=/; samesite=lax; sola_photo_session=eyJpdiI6ImRTbEVVamhaVEVxVEFsTXQ2NUFpanc9PSIsInZhbHVlIjoiOUxKQ3ppcG1KWFp1eG9CSEkxelVxWk1TdVZhNG0vZEJyZmZBT3AwZkt2ZHVDbDIyRU5UVVA0WUxOUXUyWlRIQ0JrTDQ5Vkk5RmZnbTIzbHhYZk1hTTZrTlVoZktLcHhDaFZXTklMZGY4Z2t4V2JkWWhXR25Cbjc5UWF3MW5ISVYiLCJtYWMiOiJkZjE2ZjZjZWNkOTJiNmY3NWMxOWI5YWEzYTMxNDdkMGU5NmJiMjNjMjk2OGI4ZjU3MjExZTg4ZTUxNmNmNTE1IiwidGFnIjoiIn0%3D; expires=Mon, 15 Apr 2024 22:34:47 GMT; Max-Age=7200; path=/; httponly; samesite=lax
 </code></pre></details>         <pre>

<code class="language-json" style="max-height: 300px;">[]</code>
 </pre>
    </span>
<span id="execution-results-GETapi-coordinates" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-coordinates"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-coordinates"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETapi-coordinates" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-coordinates">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-GETapi-coordinates" data-method="GET"
      data-path="api/coordinates"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-coordinates', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-coordinates"
                    onclick="tryItOut('GETapi-coordinates');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-coordinates"
                    onclick="cancelTryOut('GETapi-coordinates');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-coordinates"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/coordinates</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="GETapi-coordinates"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="GETapi-coordinates"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        </form>

                    <h2 id="coordinates-POSTapi-coordinates">Store multiple resources.</h2>

<p>
</p>



<span id="example-requests-POSTapi-coordinates">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request POST \
    "http://localhost/api/coordinates" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json" \
    --data "{
    \"coordinates\": [
        {
            \"latitude\": \"porro\",
            \"longitude\": \"incidunt\",
            \"date\": \"2024-04-15T20:34:47\"
        }
    ]
}"
</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/coordinates"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "coordinates": [
        {
            "latitude": "porro",
            "longitude": "incidunt",
            "date": "2024-04-15T20:34:47"
        }
    ]
};

fetch(url, {
    method: "POST",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-POSTapi-coordinates">
</span>
<span id="execution-results-POSTapi-coordinates" hidden>
    <blockquote>Received response<span
                id="execution-response-status-POSTapi-coordinates"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-coordinates"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-POSTapi-coordinates" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-coordinates">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-POSTapi-coordinates" data-method="POST"
      data-path="api/coordinates"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('POSTapi-coordinates', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-POSTapi-coordinates"
                    onclick="tryItOut('POSTapi-coordinates');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-POSTapi-coordinates"
                    onclick="cancelTryOut('POSTapi-coordinates');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-POSTapi-coordinates"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-black">POST</small>
            <b><code>api/coordinates</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="POSTapi-coordinates"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="POSTapi-coordinates"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <div style=" padding-left: 28px;  clear: unset;">
        <details>
            <summary style="padding-bottom: 10px;">
                <b style="line-height: 2;"><code>coordinates</code></b>&nbsp;&nbsp;
<small>object[]</small>&nbsp;
<i>optional</i> &nbsp;
<br>

            </summary>
                                                <div style="margin-left: 14px; clear: unset;">
                        <b style="line-height: 2;"><code>latitude</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="coordinates.0.latitude"                data-endpoint="POSTapi-coordinates"
               value="porro"
               data-component="body">
    <br>
<p>Example: <code>porro</code></p>
                    </div>
                                                                <div style="margin-left: 14px; clear: unset;">
                        <b style="line-height: 2;"><code>longitude</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="coordinates.0.longitude"                data-endpoint="POSTapi-coordinates"
               value="incidunt"
               data-component="body">
    <br>
<p>Example: <code>incidunt</code></p>
                    </div>
                                                                <div style="margin-left: 14px; clear: unset;">
                        <b style="line-height: 2;"><code>date</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="coordinates.0.date"                data-endpoint="POSTapi-coordinates"
               value="2024-04-15T20:34:47"
               data-component="body">
    <br>
<p>Must be a valid date. Example: <code>2024-04-15T20:34:47</code></p>
                    </div>
                                    </details>
        </div>
        </form>

                    <h2 id="coordinates-GETapi-coordinates--id-">Display the specified resource.</h2>

<p>
</p>



<span id="example-requests-GETapi-coordinates--id-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://localhost/api/coordinates/13" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/coordinates/13"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-coordinates--id-">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <details class="annotation">
            <summary style="cursor: pointer;">
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">content-type: text/html; charset=UTF-8
cache-control: no-cache, private
access-control-allow-origin: *
set-cookie: XSRF-TOKEN=eyJpdiI6ImEzcCszMk1CcHRwOXJPWXlJMVBGRkE9PSIsInZhbHVlIjoicXJkbHA4RXl3WHR4TWRwSDU4ckUxdEdFeHpTZy9OUm1ka1AyMXZvekphM1RPOGZ2Y2lzdFY1OGtUb0JvQ1B6MzhoYkowZlplQzJzNDkvUHRVMHg3V0JmRWgzMjVwUllvRjJxN25scEpqalJMU3kvaGJqM2dFZXMxd2J1b3hIUGkiLCJtYWMiOiIwM2ZjZDk0ZjA2NDRkYzVkMjdmN2Q3NGM1Yjg5NDQ0ZjU1ZDU5MjcwZjQ2MjIxNTM2ODQ2MzNiMjNkNmQwNTJkIiwidGFnIjoiIn0%3D; expires=Mon, 15 Apr 2024 22:34:47 GMT; Max-Age=7200; path=/; samesite=lax; sola_photo_session=eyJpdiI6IjAvR2lGMUdnQWthbm9XbWhWdU0wcGc9PSIsInZhbHVlIjoiV1l0SFhOMCtZbUdTRHpGc1pIdFFNTEFMOHZiUy94eXVTTHhQSFd6NnJNaUlhYTZieFpPbUtmT0Q2UFBVdStQZFB0ZlUxNkNERHBRckNpS1FsOHZUeWdMUVB3Tm01QXMwYlRPdkVKMkg3eG1QOWRHNGFKMW5wbkZyU3BPNFZzUkQiLCJtYWMiOiI1ZjFiNThjNWEzNDhjMTYwMDcxNDhkMjUzMTViNGRhM2NlNDBiMWVkYjEwZGY2Yzg1NmJkNDA2ZmFjMjE1Mjc1IiwidGFnIjoiIn0%3D; expires=Mon, 15 Apr 2024 22:34:47 GMT; Max-Age=7200; path=/; httponly; samesite=lax
 </code></pre></details>         <pre>

<code class="language-json" style="max-height: 300px;"></code>
 </pre>
    </span>
<span id="execution-results-GETapi-coordinates--id-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-coordinates--id-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-coordinates--id-"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETapi-coordinates--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-coordinates--id-">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-GETapi-coordinates--id-" data-method="GET"
      data-path="api/coordinates/{id}"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-coordinates--id-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-coordinates--id-"
                    onclick="tryItOut('GETapi-coordinates--id-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-coordinates--id-"
                    onclick="cancelTryOut('GETapi-coordinates--id-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-coordinates--id-"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/coordinates/{id}</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="GETapi-coordinates--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="GETapi-coordinates--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>id</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="id"                data-endpoint="GETapi-coordinates--id-"
               value="13"
               data-component="url">
    <br>
<p>The ID of the coordinate. Example: <code>13</code></p>
            </div>
                    </form>

                    <h2 id="coordinates-PUTapi-coordinates--id-">Update the specified resource in storage.</h2>

<p>
</p>



<span id="example-requests-PUTapi-coordinates--id-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request PUT \
    "http://localhost/api/coordinates/8" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json" \
    --data "{
    \"latitude\": \"nihil\",
    \"longitude\": \"modi\",
    \"date\": \"2024-04-15T20:34:47\"
}"
</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/coordinates/8"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "latitude": "nihil",
    "longitude": "modi",
    "date": "2024-04-15T20:34:47"
};

fetch(url, {
    method: "PUT",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-PUTapi-coordinates--id-">
</span>
<span id="execution-results-PUTapi-coordinates--id-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-PUTapi-coordinates--id-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-PUTapi-coordinates--id-"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-PUTapi-coordinates--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-PUTapi-coordinates--id-">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-PUTapi-coordinates--id-" data-method="PUT"
      data-path="api/coordinates/{id}"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('PUTapi-coordinates--id-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-PUTapi-coordinates--id-"
                    onclick="tryItOut('PUTapi-coordinates--id-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-PUTapi-coordinates--id-"
                    onclick="cancelTryOut('PUTapi-coordinates--id-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-PUTapi-coordinates--id-"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-darkblue">PUT</small>
            <b><code>api/coordinates/{id}</code></b>
        </p>
            <p>
            <small class="badge badge-purple">PATCH</small>
            <b><code>api/coordinates/{id}</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="PUTapi-coordinates--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="PUTapi-coordinates--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>id</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="id"                data-endpoint="PUTapi-coordinates--id-"
               value="8"
               data-component="url">
    <br>
<p>The ID of the coordinate. Example: <code>8</code></p>
            </div>
                            <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>latitude</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="latitude"                data-endpoint="PUTapi-coordinates--id-"
               value="nihil"
               data-component="body">
    <br>
<p>Example: <code>nihil</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>longitude</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="longitude"                data-endpoint="PUTapi-coordinates--id-"
               value="modi"
               data-component="body">
    <br>
<p>Example: <code>modi</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>date</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="date"                data-endpoint="PUTapi-coordinates--id-"
               value="2024-04-15T20:34:47"
               data-component="body">
    <br>
<p>Must be a valid date. Example: <code>2024-04-15T20:34:47</code></p>
        </div>
        </form>

                    <h2 id="coordinates-DELETEapi-coordinates--id-">Remove the specified resource from storage.</h2>

<p>
</p>



<span id="example-requests-DELETEapi-coordinates--id-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request DELETE \
    "http://localhost/api/coordinates/16" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/coordinates/16"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "DELETE",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-DELETEapi-coordinates--id-">
</span>
<span id="execution-results-DELETEapi-coordinates--id-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-DELETEapi-coordinates--id-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-DELETEapi-coordinates--id-"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-DELETEapi-coordinates--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-DELETEapi-coordinates--id-">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-DELETEapi-coordinates--id-" data-method="DELETE"
      data-path="api/coordinates/{id}"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('DELETEapi-coordinates--id-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-DELETEapi-coordinates--id-"
                    onclick="tryItOut('DELETEapi-coordinates--id-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-DELETEapi-coordinates--id-"
                    onclick="cancelTryOut('DELETEapi-coordinates--id-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-DELETEapi-coordinates--id-"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-red">DELETE</small>
            <b><code>api/coordinates/{id}</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="DELETEapi-coordinates--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="DELETEapi-coordinates--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>id</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="id"                data-endpoint="DELETEapi-coordinates--id-"
               value="16"
               data-component="url">
    <br>
<p>The ID of the coordinate. Example: <code>16</code></p>
            </div>
                    </form>

                <h1 id="pictures">pictures</h1>

    <p>Api for managing pictures</p>

                                <h2 id="pictures-GETapi-pictures">Display a listing of the resource.</h2>

<p>
</p>



<span id="example-requests-GETapi-pictures">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://localhost/api/pictures" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/pictures"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-pictures">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <details class="annotation">
            <summary style="cursor: pointer;">
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
access-control-allow-origin: *
set-cookie: XSRF-TOKEN=eyJpdiI6IllIdkNpdWZ3ZDB5RU0yY0V6dmZMcmc9PSIsInZhbHVlIjoiZ2JlcHlXM3VoSk5Ydk9COW1nckNyWHBScTRkRTZkY2Evamp2S0p0WTZSUnFpMlhwVzZNNERnRjE5QW4wQ20zNys3OGE1anhFWGgvT21UL2VQc25sQWptNXFXSHZhdkppQTlaOGIxME42dnBJUFNMaVRTNTFJeDhzelNsV3UvaTkiLCJtYWMiOiJhY2IxMTI4YWZiM2U5ZTc5YTgxNzQzYTE4NDgwY2Y2OWZjMDEzMWE5NDY0NzM1YTA0NjY4OWEyM2Q3MDE3ZWJlIiwidGFnIjoiIn0%3D; expires=Mon, 15 Apr 2024 22:34:47 GMT; Max-Age=7200; path=/; samesite=lax; sola_photo_session=eyJpdiI6IkRLeHVMODhCNVMzdStMc0g2V2pVa1E9PSIsInZhbHVlIjoiT0hKUExBV0dpek9hUVFFd1JwSWJwZG5CSTlyZ3MyYjZZRm80WFp2bzRCSGIzdWhHUnB2TmFGSWZRZXVKZXUrZVRURHV1L1YvMlRrM1lmZFVHYUFNbU1aaGRiN3BQTEJlRWJ2RzkxaklPZTh6NzJsbGpWVlVuelgxQ25wUzk2VTQiLCJtYWMiOiI3ZjIzZTA5Zjg2MzU1ZDQ3ZDI2YTRkZTUyMGJlNGNjOWI4Zjc0YTVmNDYyMGMyOWU3NGIxODRjYjA3ZWZlNzk0IiwidGFnIjoiIn0%3D; expires=Mon, 15 Apr 2024 22:34:47 GMT; Max-Age=7200; path=/; httponly; samesite=lax
 </code></pre></details>         <pre>

<code class="language-json" style="max-height: 300px;">[
    {
        &quot;id&quot;: 1,
        &quot;path&quot;: &quot;brrN6bdTULGCRSVPNY5ZPCgOEioNeKLPW1CCkrYD.jpg&quot;,
        &quot;latitude&quot;: &quot;45.269578611111&quot;,
        &quot;longitude&quot;: &quot;5.7554141666667&quot;,
        &quot;altitude&quot;: &quot;1005&quot;,
        &quot;date&quot;: &quot;2024-03-02 18:47:32&quot;,
        &quot;created_at&quot;: &quot;2024-04-15T20:33:30.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2024-04-15T20:33:30.000000Z&quot;
    },
    {
        &quot;id&quot;: 2,
        &quot;path&quot;: &quot;2U3aouQOEIngyBcuIsAUFe2VNGGDs57reSRRXmC5.jpg&quot;,
        &quot;latitude&quot;: &quot;44.835649&quot;,
        &quot;longitude&quot;: &quot;4.7483656944444&quot;,
        &quot;altitude&quot;: &quot;424&quot;,
        &quot;date&quot;: &quot;2016-03-26 17:19:59&quot;,
        &quot;created_at&quot;: &quot;2024-04-15T20:33:53.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2024-04-15T20:33:53.000000Z&quot;
    },
    {
        &quot;id&quot;: 3,
        &quot;path&quot;: &quot;dSgcqrKedf0UUoDdLta8YexU3TRN484cGFhakgP4.jpg&quot;,
        &quot;latitude&quot;: &quot;45.212625&quot;,
        &quot;longitude&quot;: &quot;5.6464222222222&quot;,
        &quot;altitude&quot;: &quot;416.79&quot;,
        &quot;date&quot;: &quot;2024-04-15 22:10:57&quot;,
        &quot;created_at&quot;: &quot;2024-04-15T20:34:03.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2024-04-15T20:34:03.000000Z&quot;
    }
]</code>
 </pre>
    </span>
<span id="execution-results-GETapi-pictures" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-pictures"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-pictures"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETapi-pictures" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-pictures">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-GETapi-pictures" data-method="GET"
      data-path="api/pictures"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-pictures', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-pictures"
                    onclick="tryItOut('GETapi-pictures');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-pictures"
                    onclick="cancelTryOut('GETapi-pictures');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-pictures"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/pictures</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="GETapi-pictures"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="GETapi-pictures"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        </form>

                    <h2 id="pictures-POSTapi-pictures">Store a newly created resource in storage.</h2>

<p>
</p>



<span id="example-requests-POSTapi-pictures">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request POST \
    "http://localhost/api/pictures" \
    --header "Content-Type: multipart/form-data" \
    --header "Accept: application/json" \
    --form "picture=@/tmp/phpsAKHov" </code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/pictures"
);

const headers = {
    "Content-Type": "multipart/form-data",
    "Accept": "application/json",
};

const body = new FormData();
body.append('picture', document.querySelector('input[name="picture"]').files[0]);

fetch(url, {
    method: "POST",
    headers,
    body,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-POSTapi-pictures">
</span>
<span id="execution-results-POSTapi-pictures" hidden>
    <blockquote>Received response<span
                id="execution-response-status-POSTapi-pictures"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-pictures"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-POSTapi-pictures" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-pictures">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-POSTapi-pictures" data-method="POST"
      data-path="api/pictures"
      data-authed="0"
      data-hasfiles="1"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('POSTapi-pictures', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-POSTapi-pictures"
                    onclick="tryItOut('POSTapi-pictures');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-POSTapi-pictures"
                    onclick="cancelTryOut('POSTapi-pictures');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-POSTapi-pictures"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-black">POST</small>
            <b><code>api/pictures</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="POSTapi-pictures"
               value="multipart/form-data"
               data-component="header">
    <br>
<p>Example: <code>multipart/form-data</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="POSTapi-pictures"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>picture</code></b>&nbsp;&nbsp;
<small>file</small>&nbsp;
 &nbsp;
                <input type="file" style="display: none"
                              name="picture"                data-endpoint="POSTapi-pictures"
               value=""
               data-component="body">
    <br>
<p>Must be a file. Must be an image. Example: <code>/tmp/phpsAKHov</code></p>
        </div>
        </form>

                    <h2 id="pictures-GETapi-pictures--id-">Display the specified resource.</h2>

<p>
</p>



<span id="example-requests-GETapi-pictures--id-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://localhost/api/pictures/1" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/pictures/1"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-pictures--id-">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <details class="annotation">
            <summary style="cursor: pointer;">
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
access-control-allow-origin: *
set-cookie: XSRF-TOKEN=eyJpdiI6ImxTckNhM25JQUJLN2lBbHBQTmhnSlE9PSIsInZhbHVlIjoiS2haZldjZXJyUFNrNHA2K09FS0RNcnJEbE90eWZmV3Q1K0lkL1N2dTk0NWtZTGdiT1BGbXVVTW54UDhMbVFXL0VnYnNiYldNSlJGeGdSS0x0bnNkY2xoZlJwME8wUk5yWVZKZ2VOMWR1TjRsRkdOYUZYSHhqWEJobm4rMUJrb0YiLCJtYWMiOiI4ZTBlOWJiZDE1NzdjODA0NGY5YjMxMGZlMmQ2Y2NlMTFlMDRkOTgwNzZiOTU4MWVkM2U1MTkyMGU1YTU2ZmVjIiwidGFnIjoiIn0%3D; expires=Mon, 15 Apr 2024 22:34:47 GMT; Max-Age=7200; path=/; samesite=lax; sola_photo_session=eyJpdiI6IkVKalgzTXlDWHdJYzJWTURMS2lEY2c9PSIsInZhbHVlIjoiNit6YlZYRmEyRlBqYlQ3SnF3V3NGN0tjYW51eXEzNms0b0YvQ1AwS2F2aE1vdFdMLy8vSlFqaTJCcXAxUk1Ya0VEZ291RllENS9tYzBuZ0ZVZjFzeTVUdlU5eURZZ2tmbEdYMHMwY00zeVhIaUp2MStXK2dFdHBxVXBvTlIxdWYiLCJtYWMiOiIwN2ZkZmVkNTg5YmI1NDc4MGNiZjc4MmQxY2E2OTE2YjhjODk5MzZlY2VjMDc5ZTI0Y2RjMTc0NWU1ZWE3NWJlIiwidGFnIjoiIn0%3D; expires=Mon, 15 Apr 2024 22:34:47 GMT; Max-Age=7200; path=/; httponly; samesite=lax
 </code></pre></details>         <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;id&quot;: 1,
    &quot;path&quot;: &quot;brrN6bdTULGCRSVPNY5ZPCgOEioNeKLPW1CCkrYD.jpg&quot;,
    &quot;latitude&quot;: &quot;45.269578611111&quot;,
    &quot;longitude&quot;: &quot;5.7554141666667&quot;,
    &quot;altitude&quot;: &quot;1005&quot;,
    &quot;date&quot;: &quot;2024-03-02 18:47:32&quot;,
    &quot;created_at&quot;: &quot;2024-04-15T20:33:30.000000Z&quot;,
    &quot;updated_at&quot;: &quot;2024-04-15T20:33:30.000000Z&quot;
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-pictures--id-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-pictures--id-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-pictures--id-"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETapi-pictures--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-pictures--id-">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-GETapi-pictures--id-" data-method="GET"
      data-path="api/pictures/{id}"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-pictures--id-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-pictures--id-"
                    onclick="tryItOut('GETapi-pictures--id-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-pictures--id-"
                    onclick="cancelTryOut('GETapi-pictures--id-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-pictures--id-"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/pictures/{id}</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="GETapi-pictures--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="GETapi-pictures--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>id</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="id"                data-endpoint="GETapi-pictures--id-"
               value="1"
               data-component="url">
    <br>
<p>The ID of the picture. Example: <code>1</code></p>
            </div>
                    </form>

                    <h2 id="pictures-DELETEapi-pictures--id-">Remove the specified resource from storage.</h2>

<p>
</p>



<span id="example-requests-DELETEapi-pictures--id-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request DELETE \
    "http://localhost/api/pictures/1" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/pictures/1"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "DELETE",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-DELETEapi-pictures--id-">
</span>
<span id="execution-results-DELETEapi-pictures--id-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-DELETEapi-pictures--id-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-DELETEapi-pictures--id-"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-DELETEapi-pictures--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-DELETEapi-pictures--id-">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-DELETEapi-pictures--id-" data-method="DELETE"
      data-path="api/pictures/{id}"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('DELETEapi-pictures--id-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-DELETEapi-pictures--id-"
                    onclick="tryItOut('DELETEapi-pictures--id-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-DELETEapi-pictures--id-"
                    onclick="cancelTryOut('DELETEapi-pictures--id-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-DELETEapi-pictures--id-"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-red">DELETE</small>
            <b><code>api/pictures/{id}</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="DELETEapi-pictures--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="DELETEapi-pictures--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>id</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="id"                data-endpoint="DELETEapi-pictures--id-"
               value="1"
               data-component="url">
    <br>
<p>The ID of the picture. Example: <code>1</code></p>
            </div>
                    </form>

            

        
    </div>
    <div class="dark-box">
                    <div class="lang-selector">
                                                        <button type="button" class="lang-button" data-language-name="bash">bash</button>
                                                        <button type="button" class="lang-button" data-language-name="javascript">javascript</button>
                            </div>
            </div>
</div>
</body>
</html>
