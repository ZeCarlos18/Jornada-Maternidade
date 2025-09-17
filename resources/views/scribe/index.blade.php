<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta content="IE=edge,chrome=1" http-equiv="X-UA-Compatible">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <title>Laravel API Documentation</title>

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
    <script src="{{ asset("/vendor/scribe/js/tryitout-5.3.0.js") }}"></script>

    <script src="{{ asset("/vendor/scribe/js/theme-default-5.3.0.js") }}"></script>

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
                    <ul id="tocify-header-endpoints" class="tocify-header">
                <li class="tocify-item level-1" data-unique="endpoints">
                    <a href="#endpoints">Endpoints</a>
                </li>
                                    <ul id="tocify-subheader-endpoints" class="tocify-subheader">
                                                    <li class="tocify-item level-2" data-unique="endpoints-GETauth-facebook">
                                <a href="#endpoints-GETauth-facebook">GET auth/facebook</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-GETauth-facebook-callback">
                                <a href="#endpoints-GETauth-facebook-callback">GET auth/facebook/callback</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-GETauth-google">
                                <a href="#endpoints-GETauth-google">GET auth/google</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-GETauth-google-callback">
                                <a href="#endpoints-GETauth-google-callback">GET auth/google/callback</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-GET-">
                                <a href="#endpoints-GET-">GET /</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-GETposts-create--category--">
                                <a href="#endpoints-GETposts-create--category--">GET posts/create/{category?}</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-GETcommunity--category--">
                                <a href="#endpoints-GETcommunity--category--">GET community/{category?}</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-DELETEposts--id-">
                                <a href="#endpoints-DELETEposts--id-">Excluir um post.</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-GETreset-password--token-">
                                <a href="#endpoints-GETreset-password--token-">Display the password reset view.</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-GETverify-email--id---hash-">
                                <a href="#endpoints-GETverify-email--id---hash-">Mark the authenticated user's email address as verified.</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-POSTemail-verification-notification">
                                <a href="#endpoints-POSTemail-verification-notification">Send a new email verification notification.</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-GETstorage--path-">
                                <a href="#endpoints-GETstorage--path-">GET storage/{path}</a>
                            </li>
                                                                        </ul>
                            </ul>
                    <ul id="tocify-header-gerenciamento-de-perfil" class="tocify-header">
                <li class="tocify-item level-1" data-unique="gerenciamento-de-perfil">
                    <a href="#gerenciamento-de-perfil">Gerenciamento de Perfil</a>
                </li>
                                    <ul id="tocify-subheader-gerenciamento-de-perfil" class="tocify-subheader">
                                                    <li class="tocify-item level-2" data-unique="gerenciamento-de-perfil-POSTprofile-photo">
                                <a href="#gerenciamento-de-perfil-POSTprofile-photo">Atualizar foto de perfil.</a>
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
        <li>Last updated: September 17, 2025</li>
    </ul>
</div>

<div class="page-wrapper">
    <div class="dark-box"></div>
    <div class="content">
        <h1 id="introduction">Introduction</h1>
<aside>
    <strong>Base URL</strong>: <code>http://localhost</code>
</aside>
<pre><code>This documentation aims to provide all the information you need to work with our API.

&lt;aside&gt;As you scroll, you'll see code examples for working with the API in different programming languages in the dark area to the right (or as part of the content on mobile).
You can switch the language used with the tabs at the top right (or from the nav menu at the top left on mobile).&lt;/aside&gt;</code></pre>

        <h1 id="authenticating-requests">Authenticating requests</h1>
<p>To authenticate requests, include a <strong><code>Authorization</code></strong> header with the value <strong><code>"Enter your bearer token"</code></strong>.</p>
<p>All authenticated endpoints are marked with a <code>requires authentication</code> badge in the documentation below.</p>
<p>Você pode obter seu token de autenticação fazendo login na aplicação.</p>

        <h1 id="endpoints">Endpoints</h1>

    

                                <h2 id="endpoints-GETauth-facebook">GET auth/facebook</h2>

<p>
<small class="badge badge-darkred">requires authentication</small>
</p>



<span id="example-requests-GETauth-facebook">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://localhost/auth/facebook" \
    --header "Authorization: Enter your bearer token" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/auth/facebook"
);

const headers = {
    "Authorization": "Enter your bearer token",
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETauth-facebook">
            <blockquote>
            <p>Example response (302):</p>
        </blockquote>
                <details class="annotation">
            <summary style="cursor: pointer;">
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
location: https://www.facebook.com/v23.0/dialog/oauth?scope=email&amp;response_type=code&amp;state=zzz8W0Ivq1VS3nUCmBraD8Evz6kdnXWfy3bSdY7B
content-type: text/html; charset=utf-8
set-cookie: XSRF-TOKEN=eyJpdiI6IlprZmRSOC9sR1hXbTdZTEE5THZGVGc9PSIsInZhbHVlIjoic1BYaHc0bEc1L0s4TWxUcHlFUWp1Y0ZJVGlRckUyK2Y5M0lhaVp2U3o2bzVCZWpVNzdyMWlCZW9HQ29FaTRoMnR4dnUzZFNkckhXNFY5Z1Y1UGtzd28vbXRRZTdoWGJvZE95emx0N0p4R2dzSWRCSURQYlRCcXFuTVFJbzJQUkgiLCJtYWMiOiJkNmY4MDk4OWE1NDA1ZTkyZjdlNTkyNmYyZDMzYTcxMjJlMjY2YThkYTYyMWY3MjYxOWVlNzY2ZjA2YmZlMjhhIiwidGFnIjoiIn0%3D; expires=Wed, 17 Sep 2025 03:11:10 GMT; Max-Age=7200; path=/; samesite=lax; laravel-session=eyJpdiI6Ilc5VmZJZEUrRjAwUWd2NFVKNWx5SkE9PSIsInZhbHVlIjoiSXZadzY5MzhuWlE5amNVdlJ4QVhPcXRqSzloeEg5WE5KZzJQbmJVVjl0emtKOVZ0bVRUdGdPcFBiNGlVMGM0S1MveXBKaEtXWW1zRnJlSU9aYmpqb1Rna0tmWE5yaGVZcUpTR29jMm9uVEo3RGpQay9uUXkybkh4blY0L0huUVUiLCJtYWMiOiJmZGRkZjE2MmY3MDM1YjBmZmI3M2QwNGIxNGE0M2U5OWNmN2M5ODJlYjk2YzQ2MTFhNGQ4NzUyZGEyM2NkYTBjIiwidGFnIjoiIn0%3D; expires=Wed, 17 Sep 2025 03:11:10 GMT; Max-Age=7200; path=/; httponly; samesite=lax
 </code></pre></details>         <pre>

<code class="language-json" style="max-height: 300px;">&lt;!DOCTYPE html&gt;
&lt;html&gt;
    &lt;head&gt;
        &lt;meta charset=&quot;UTF-8&quot; /&gt;
        &lt;meta http-equiv=&quot;refresh&quot; content=&quot;0;url=&#039;https://www.facebook.com/v23.0/dialog/oauth?scope=email&amp;amp;response_type=code&amp;amp;state=zzz8W0Ivq1VS3nUCmBraD8Evz6kdnXWfy3bSdY7B&#039;&quot; /&gt;

        &lt;title&gt;Redirecting to https://www.facebook.com/v23.0/dialog/oauth?scope=email&amp;amp;response_type=code&amp;amp;state=zzz8W0Ivq1VS3nUCmBraD8Evz6kdnXWfy3bSdY7B&lt;/title&gt;
    &lt;/head&gt;
    &lt;body&gt;
        Redirecting to &lt;a href=&quot;https://www.facebook.com/v23.0/dialog/oauth?scope=email&amp;amp;response_type=code&amp;amp;state=zzz8W0Ivq1VS3nUCmBraD8Evz6kdnXWfy3bSdY7B&quot;&gt;https://www.facebook.com/v23.0/dialog/oauth?scope=email&amp;amp;response_type=code&amp;amp;state=zzz8W0Ivq1VS3nUCmBraD8Evz6kdnXWfy3bSdY7B&lt;/a&gt;.
    &lt;/body&gt;
&lt;/html&gt;</code>
 </pre>
    </span>
<span id="execution-results-GETauth-facebook" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETauth-facebook"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETauth-facebook"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETauth-facebook" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETauth-facebook">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-GETauth-facebook" data-method="GET"
      data-path="auth/facebook"
      data-authed="1"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETauth-facebook', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETauth-facebook"
                    onclick="tryItOut('GETauth-facebook');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETauth-facebook"
                    onclick="cancelTryOut('GETauth-facebook');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETauth-facebook"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>auth/facebook</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Authorization</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Authorization" class="auth-value"               data-endpoint="GETauth-facebook"
               value="Enter your bearer token"
               data-component="header">
    <br>
<p>Example: <code>Enter your bearer token</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="GETauth-facebook"
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
                              name="Accept"                data-endpoint="GETauth-facebook"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        </form>

                    <h2 id="endpoints-GETauth-facebook-callback">GET auth/facebook/callback</h2>

<p>
<small class="badge badge-darkred">requires authentication</small>
</p>



<span id="example-requests-GETauth-facebook-callback">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://localhost/auth/facebook/callback" \
    --header "Authorization: Enter your bearer token" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/auth/facebook/callback"
);

const headers = {
    "Authorization": "Enter your bearer token",
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETauth-facebook-callback">
            <blockquote>
            <p>Example response (500):</p>
        </blockquote>
                <details class="annotation">
            <summary style="cursor: pointer;">
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
set-cookie: XSRF-TOKEN=eyJpdiI6Imo4eGZHMmhDaDVYMTE1QmxXNnFOWHc9PSIsInZhbHVlIjoiSnVoMUw2TkZWellJaXU2NnYzNnpmS3NKYURrOHVERmV2bjlUem11b29raVFLM1lYbmZYWmpwTWFkYUpZdUEyejRPenl0Q1Y0L0tDVTlRL0NENzY4Sk5Zc3B0Q3hSRXlTMElVTEZySGFOdHNtaDM3dTgzK08ydmlzakIvN3E1TzAiLCJtYWMiOiI3NjU5NjZhZTNkY2RkMTkxMDc5OWQyMDgyZjJlYzZiN2U1YjdjNzAwZGE3MDZjMTFiZjRhOWFkMThlNjFiNmFjIiwidGFnIjoiIn0%3D; expires=Wed, 17 Sep 2025 03:11:11 GMT; Max-Age=7200; path=/; samesite=lax; laravel-session=eyJpdiI6ImRkOHBscW5lNkRaK2haS1pYSWtOQ3c9PSIsInZhbHVlIjoiamR1ajhRQnhtWXU5SFhlbjdVNEdLTnlabk9RdkFFK1NUbm43RG9oc3NMclB1Z3lBNGVubWpmNTJvanViVDdvTjN5OXhxVmE0UkR0c1JubEVTQ3VDZlI2bnRyL1RTOXE4UVI3bHpJMWFaNTRHY1pzTHNJWXZZTkNVSHY0a1BzQm0iLCJtYWMiOiI3M2NlMWExM2Q5MGQzYWQxMjdkZmNhMzQ4OGUzMjJjYTdmODNkNjVjZDA5YTNmNjI4M2ExYWIyNWI2OWIzOTNiIiwidGFnIjoiIn0%3D; expires=Wed, 17 Sep 2025 03:11:11 GMT; Max-Age=7200; path=/; httponly; samesite=lax
 </code></pre></details>         <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;message&quot;: &quot;Server Error&quot;
}</code>
 </pre>
    </span>
<span id="execution-results-GETauth-facebook-callback" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETauth-facebook-callback"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETauth-facebook-callback"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETauth-facebook-callback" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETauth-facebook-callback">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-GETauth-facebook-callback" data-method="GET"
      data-path="auth/facebook/callback"
      data-authed="1"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETauth-facebook-callback', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETauth-facebook-callback"
                    onclick="tryItOut('GETauth-facebook-callback');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETauth-facebook-callback"
                    onclick="cancelTryOut('GETauth-facebook-callback');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETauth-facebook-callback"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>auth/facebook/callback</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Authorization</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Authorization" class="auth-value"               data-endpoint="GETauth-facebook-callback"
               value="Enter your bearer token"
               data-component="header">
    <br>
<p>Example: <code>Enter your bearer token</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="GETauth-facebook-callback"
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
                              name="Accept"                data-endpoint="GETauth-facebook-callback"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        </form>

                    <h2 id="endpoints-GETauth-google">GET auth/google</h2>

<p>
<small class="badge badge-darkred">requires authentication</small>
</p>



<span id="example-requests-GETauth-google">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://localhost/auth/google" \
    --header "Authorization: Enter your bearer token" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/auth/google"
);

const headers = {
    "Authorization": "Enter your bearer token",
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETauth-google">
            <blockquote>
            <p>Example response (302):</p>
        </blockquote>
                <details class="annotation">
            <summary style="cursor: pointer;">
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
location: https://accounts.google.com/o/oauth2/auth?scope=openid+profile+email&amp;response_type=code&amp;state=rSCb64V8RsfMDRIT46KFAmaxnnkaO5uElQRPAwv3
content-type: text/html; charset=utf-8
set-cookie: XSRF-TOKEN=eyJpdiI6IjI3RVpBYmFkRFErQisxTnlrK2tES0E9PSIsInZhbHVlIjoiUmR2WTdDbHIvUis0djRvNHhCeUFna2VkdFo4aytsNlNtNVdYdWNOekdrcER2Q1pVUjdEaTB5MGcyVUZ1Wk5IUm1xQXAzeCtncUhSYUNDQkI1Y214QmUxTlNGWjluWFJwWnIwcERmWjR4elV1ZXhIdmVjbFFDaCtCSlc1WE4vbW8iLCJtYWMiOiIzNWJjYzNlZGIzMTI2Nzg0MmM3Y2NjOWI0OTc2NzBmNTAwOTMxOTllYWM4ODA4ZWYyYTc2ZTBhYTcyZDRlZTVjIiwidGFnIjoiIn0%3D; expires=Wed, 17 Sep 2025 03:11:11 GMT; Max-Age=7200; path=/; samesite=lax; laravel-session=eyJpdiI6IkhhSUZzZlZDNmRoejBFamZLVTRFZHc9PSIsInZhbHVlIjoiRnl1U2toY1dReXdNQmFubmhFRVJnZXhnaUhmbHN6aFMyektleDR4L1U1di9teVh6empmTXZ2TE9TTGM2NlJmcWRNRGVJVEYrMWV6cGo0SEVWbDU3YUcvUldQdFduakpVTXVzRGExU3h1dWFRUmRrT0ROMWNtajZZbzBXcXlvTE0iLCJtYWMiOiIzZGI5NzgyMjBhZWJiODFjMGRjODc4YjcwOGU2NTYyNDIxMzE0ODRmNzg4NDBiYjE1MmM0MjdmZWUyNmM4ODFjIiwidGFnIjoiIn0%3D; expires=Wed, 17 Sep 2025 03:11:11 GMT; Max-Age=7200; path=/; httponly; samesite=lax
 </code></pre></details>         <pre>

<code class="language-json" style="max-height: 300px;">&lt;!DOCTYPE html&gt;
&lt;html&gt;
    &lt;head&gt;
        &lt;meta charset=&quot;UTF-8&quot; /&gt;
        &lt;meta http-equiv=&quot;refresh&quot; content=&quot;0;url=&#039;https://accounts.google.com/o/oauth2/auth?scope=openid+profile+email&amp;amp;response_type=code&amp;amp;state=rSCb64V8RsfMDRIT46KFAmaxnnkaO5uElQRPAwv3&#039;&quot; /&gt;

        &lt;title&gt;Redirecting to https://accounts.google.com/o/oauth2/auth?scope=openid+profile+email&amp;amp;response_type=code&amp;amp;state=rSCb64V8RsfMDRIT46KFAmaxnnkaO5uElQRPAwv3&lt;/title&gt;
    &lt;/head&gt;
    &lt;body&gt;
        Redirecting to &lt;a href=&quot;https://accounts.google.com/o/oauth2/auth?scope=openid+profile+email&amp;amp;response_type=code&amp;amp;state=rSCb64V8RsfMDRIT46KFAmaxnnkaO5uElQRPAwv3&quot;&gt;https://accounts.google.com/o/oauth2/auth?scope=openid+profile+email&amp;amp;response_type=code&amp;amp;state=rSCb64V8RsfMDRIT46KFAmaxnnkaO5uElQRPAwv3&lt;/a&gt;.
    &lt;/body&gt;
&lt;/html&gt;</code>
 </pre>
    </span>
<span id="execution-results-GETauth-google" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETauth-google"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETauth-google"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETauth-google" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETauth-google">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-GETauth-google" data-method="GET"
      data-path="auth/google"
      data-authed="1"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETauth-google', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETauth-google"
                    onclick="tryItOut('GETauth-google');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETauth-google"
                    onclick="cancelTryOut('GETauth-google');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETauth-google"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>auth/google</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Authorization</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Authorization" class="auth-value"               data-endpoint="GETauth-google"
               value="Enter your bearer token"
               data-component="header">
    <br>
<p>Example: <code>Enter your bearer token</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="GETauth-google"
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
                              name="Accept"                data-endpoint="GETauth-google"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        </form>

                    <h2 id="endpoints-GETauth-google-callback">GET auth/google/callback</h2>

<p>
<small class="badge badge-darkred">requires authentication</small>
</p>



<span id="example-requests-GETauth-google-callback">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://localhost/auth/google/callback" \
    --header "Authorization: Enter your bearer token" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/auth/google/callback"
);

const headers = {
    "Authorization": "Enter your bearer token",
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETauth-google-callback">
            <blockquote>
            <p>Example response (500):</p>
        </blockquote>
                <details class="annotation">
            <summary style="cursor: pointer;">
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
set-cookie: XSRF-TOKEN=eyJpdiI6IkRLQ1MwZTlCQ1lRYTBLMzNMZHd1Zmc9PSIsInZhbHVlIjoiMi9IZGRTRTBRRzFid0dZemJUL2JpT0FRanRNQzVUWXYyQlBpK05IU2pOdWRvdTRkMEZuZGhmclFxbkJJeTlWZ0lkcFcrd1doNVFHSW90ZW5NUXFCSjFNL2h4bkVNQkQrbVdVZ0JvZW9LSE1YQUFMSnBxNHZYTHBJd21jcGR2bzEiLCJtYWMiOiI2MjVjNDM0MTU2OWNiY2U5YWIwMDM1NWViMzY3NTM5NDlhZGViZGIzOWQyOWJkMWY0OGNmZGY2ODFiZjc4M2Y1IiwidGFnIjoiIn0%3D; expires=Wed, 17 Sep 2025 03:11:11 GMT; Max-Age=7200; path=/; samesite=lax; laravel-session=eyJpdiI6Inp3V3k4VER2SjNDK1JNOUppSE5ydlE9PSIsInZhbHVlIjoiU05Oa2p2N3UyaFQ3S0VKdTRsVjVySFBuYUppazBjZzJjQitTZVZheWdEUjRMYmZ5QW5ncWNwOUVHd0JWOGg4YWFvYUZnbW9EbC9mSkFxYVBWSnFuai9vZUJCQ21tZnZuUzBpUSs4bzJPdWpZQ1hGZWw5Zi8yZ3l3S1E3V2ZONnQiLCJtYWMiOiJiZDIxYTIwNTBmMDAxOTY5Yjk4MTAyNTFlNjQ5YzY1YzIxMTVhNGNhZjczYTI4OGNiNDEyMTk4NzQ1YzBhYjEwIiwidGFnIjoiIn0%3D; expires=Wed, 17 Sep 2025 03:11:11 GMT; Max-Age=7200; path=/; httponly; samesite=lax
 </code></pre></details>         <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;message&quot;: &quot;Server Error&quot;
}</code>
 </pre>
    </span>
<span id="execution-results-GETauth-google-callback" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETauth-google-callback"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETauth-google-callback"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETauth-google-callback" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETauth-google-callback">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-GETauth-google-callback" data-method="GET"
      data-path="auth/google/callback"
      data-authed="1"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETauth-google-callback', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETauth-google-callback"
                    onclick="tryItOut('GETauth-google-callback');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETauth-google-callback"
                    onclick="cancelTryOut('GETauth-google-callback');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETauth-google-callback"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>auth/google/callback</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Authorization</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Authorization" class="auth-value"               data-endpoint="GETauth-google-callback"
               value="Enter your bearer token"
               data-component="header">
    <br>
<p>Example: <code>Enter your bearer token</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="GETauth-google-callback"
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
                              name="Accept"                data-endpoint="GETauth-google-callback"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        </form>

                    <h2 id="endpoints-GET-">GET /</h2>

<p>
<small class="badge badge-darkred">requires authentication</small>
</p>



<span id="example-requests-GET-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://localhost/" \
    --header "Authorization: Enter your bearer token" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/"
);

const headers = {
    "Authorization": "Enter your bearer token",
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GET-">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <details class="annotation">
            <summary style="cursor: pointer;">
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">content-type: text/html; charset=UTF-8
cache-control: no-cache, private
set-cookie: XSRF-TOKEN=eyJpdiI6ImRoQ1FDOHUvbGVjMjViVEgxMGRnNnc9PSIsInZhbHVlIjoiVGczTVBsdVNROTFyOWZ6N1UwbWhBNUIrQllyYTNhUUM0cVZnV2JDR3VyVG1ZZ3ZhTWxaS1dRbWZIY0V6ajdNRUszVmNMajdpVmJ2eWFHaVp6SGNha0o3TXBrSXl3SkxxUHh4NlB5TVFXd3dqSmxvMWMwd2w5cXpSQ2ZVODNCTFIiLCJtYWMiOiI0MDZhNjY1MTMxMjI4ZGFjYWM3NTExZTczYzA5YzYyMTQ4Njc0ZGRkMzEzMzQ4NzE5YzY0MDBmNmZkMzBjYzZjIiwidGFnIjoiIn0%3D; expires=Wed, 17 Sep 2025 03:11:11 GMT; Max-Age=7200; path=/; samesite=lax; laravel-session=eyJpdiI6IjVLZlhhdkpwdCt5SUpyR0dzamRQWEE9PSIsInZhbHVlIjoiRC9Dc0FnODZuOTBkVm9xVnRvK3IvSEFaZ3N1RWJaVThRbzVXRC85WmdLbzRCTDROWVo5dnhKRjZYVDJXZlM3ZU5GMFhKQWFRRFlZTjVrVHRTRWFYTFFKcXh3SW04NlZ4cnJWQWJIMGRIbzU2ak4weFB2NVBEMU8ySVBjaklBazAiLCJtYWMiOiIzOTYwOTMzZDU0NmJiNmZkOWU0YjA2ZjI1NGIyNDhjZjZiOWMzZmQwNDlhYTk2Y2M5YjE5NzZhODQ2YzZlNjE0IiwidGFnIjoiIn0%3D; expires=Wed, 17 Sep 2025 03:11:11 GMT; Max-Age=7200; path=/; httponly; samesite=lax
 </code></pre></details>         <pre>

<code class="language-json" style="max-height: 300px;">&lt;!DOCTYPE html&gt;
&lt;html lang=&quot;pt-BR&quot;&gt;
&lt;head&gt;
    &lt;meta charset=&quot;UTF-8&quot;&gt;
    &lt;meta name=&quot;viewport&quot; content=&quot;width=device-width, initial-scale=1.0&quot;&gt;
    &lt;title&gt;Login - Jornada Maternidade&lt;/title&gt;
    &lt;link rel=&quot;icon&quot; href=&quot;http://localhost/img/JM.png&quot;&gt;
    &lt;link rel=&quot;stylesheet&quot; href=&quot;http://localhost/css/login.css&quot;&gt;
    &lt;link rel=&quot;stylesheet&quot; href=&quot;https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css&quot;&gt;
&lt;/head&gt;
&lt;body&gt;
    &lt;div class=&quot;container&quot;&gt;
        &lt;div class=&quot;logo-container&quot;&gt;
            &lt;img src=&quot;http://localhost/img/JM.png&quot; alt=&quot;Logo Jornada Maternidade&quot; class=&quot;logo-img&quot;&gt;
        &lt;/div&gt;

        &lt;form action=&quot;http://localhost/login&quot; method=&quot;POST&quot;&gt;
            &lt;input type=&quot;hidden&quot; name=&quot;_token&quot; value=&quot;K83cBRdlP5Bewan4WIwGyLJLXjCbYjKfl5EBsOMr&quot; autocomplete=&quot;off&quot;&gt;            &lt;h2&gt;Login&lt;/h2&gt;

                        &lt;div class=&quot;input-group&quot;&gt;
                &lt;i class=&quot;fas fa-envelope input-icon&quot;&gt;&lt;/i&gt;
                &lt;label for=&quot;email&quot; class=&quot;input-label&quot;&gt;E-mail&lt;/label&gt;
                &lt;input type=&quot;email&quot; name=&quot;email&quot; class=&quot;input-field&quot; required&gt;
            &lt;/div&gt;
            &lt;div class=&quot;input-group&quot;&gt;
                &lt;i class=&quot;fas fa-lock input-icon&quot;&gt;&lt;/i&gt;
                &lt;label for=&quot;password&quot; class=&quot;input-label&quot;&gt;Senha&lt;/label&gt;
                &lt;input type=&quot;password&quot; name=&quot;password&quot; class=&quot;input-field&quot; required&gt;
            &lt;/div&gt;
            &lt;button type=&quot;submit&quot; class=&quot;submit-btn&quot;&gt;Entrar&lt;/button&gt;
        &lt;/form&gt;

        &lt;div class=&quot;social-login&quot;&gt;
            &lt;p&gt;Ou acesse com&lt;/p&gt;
            &lt;div class=&quot;social-icons&quot;&gt;
                &lt;a href=&quot;http://localhost/auth/facebook&quot; class=&quot;social-icon-link&quot;&gt;
                    &lt;img src=&quot;https://upload.wikimedia.org/wikipedia/commons/5/51/Facebook_f_logo_%282019%29.svg&quot; alt=&quot;Facebook&quot;&gt;
                &lt;/a&gt;
                &lt;a href=&quot;http://localhost/auth/google&quot; class=&quot;btn btn-primary&quot;&gt;
                    &lt;img src=&quot;https://ssl.gstatic.com/ui/v1/icons/mail/rfr/logo_gmail_lockup_default_1x_r5.png&quot; alt=&quot;Gmail&quot;&gt;
                &lt;/a&gt;
            &lt;/div&gt;
        &lt;/div&gt;

        &lt;div class=&quot;signup-link&quot;&gt;
            &lt;p&gt;N&atilde;o tem uma conta?&lt;/p&gt;
            &lt;a href=&quot;/register&quot;&gt;Cadastrar-se&lt;/a&gt;
        &lt;/div&gt;
    &lt;/div&gt;
&lt;/body&gt;
&lt;/html&gt;</code>
 </pre>
    </span>
<span id="execution-results-GET-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GET-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GET-"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GET-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GET-">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-GET-" data-method="GET"
      data-path="/"
      data-authed="1"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GET-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GET-"
                    onclick="tryItOut('GET-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GET-"
                    onclick="cancelTryOut('GET-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GET-"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>/</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Authorization</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Authorization" class="auth-value"               data-endpoint="GET-"
               value="Enter your bearer token"
               data-component="header">
    <br>
<p>Example: <code>Enter your bearer token</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="GET-"
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
                              name="Accept"                data-endpoint="GET-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        </form>

                    <h2 id="endpoints-GETposts-create--category--">GET posts/create/{category?}</h2>

<p>
<small class="badge badge-darkred">requires authentication</small>
</p>



<span id="example-requests-GETposts-create--category--">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://localhost/posts/create/consequatur" \
    --header "Authorization: Enter your bearer token" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/posts/create/consequatur"
);

const headers = {
    "Authorization": "Enter your bearer token",
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETposts-create--category--">
            <blockquote>
            <p>Example response (401):</p>
        </blockquote>
                <details class="annotation">
            <summary style="cursor: pointer;">
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
set-cookie: XSRF-TOKEN=eyJpdiI6InFoN2gzK0p0bktLWGRyWUw2MlFqUnc9PSIsInZhbHVlIjoiUzlVY1hMNUtRK1JNdDBEMkdVWTlPby9NbVNEVmZ1SGVab3F1bkJ6MGo0blhqcVJrcmJBWitqYW45WHJxRG14M0tEZDFhTjdCOWQyeE0zdDdiQ1loSld1VzdYb2VhaW1CNzFlbW5mZFNXNW5XSWdJT0lpb3hjbWx1Rm9nMzBUWm8iLCJtYWMiOiJkMWFlMDc2ZTE0YWUxZThjYWQ0NjJhYWQzNmZkZmQwMmY4N2E3NTRkZDM3MDQyZjNhZGRlZDBlYzI1ZmIyOTIwIiwidGFnIjoiIn0%3D; expires=Wed, 17 Sep 2025 03:11:11 GMT; Max-Age=7200; path=/; samesite=lax; laravel-session=eyJpdiI6IjFUVjRORzVsRncyWXlFOFJyQUgrNWc9PSIsInZhbHVlIjoic01RR0hoT2YwK3lrYnVIYTFoOXR2eThRR3o5aVUxTlFLQ2RLMGFmVnZWY0pTY1JkN3k5eTFaU1l5TnczMURHd3Fpa21TWGRmdVNweUx4dnNHZUNrTHZxcEZQbWNJRVE4RkZCT2s3ckRuWklTSVo1OUlFdjZNdVhoQWVyTnZwcWEiLCJtYWMiOiJkZTQ5NGM4NjliNjgzOGNlMDBlMjAwOTJmNmNkZDg0OTFjNWNjZmU0MmYxNDJjZTU0YTE5YTIyNjRiYTk3YTA2IiwidGFnIjoiIn0%3D; expires=Wed, 17 Sep 2025 03:11:11 GMT; Max-Age=7200; path=/; httponly; samesite=lax
 </code></pre></details>         <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;message&quot;: &quot;Unauthenticated.&quot;
}</code>
 </pre>
    </span>
<span id="execution-results-GETposts-create--category--" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETposts-create--category--"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETposts-create--category--"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETposts-create--category--" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETposts-create--category--">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-GETposts-create--category--" data-method="GET"
      data-path="posts/create/{category?}"
      data-authed="1"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETposts-create--category--', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETposts-create--category--"
                    onclick="tryItOut('GETposts-create--category--');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETposts-create--category--"
                    onclick="cancelTryOut('GETposts-create--category--');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETposts-create--category--"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>posts/create/{category?}</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Authorization</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Authorization" class="auth-value"               data-endpoint="GETposts-create--category--"
               value="Enter your bearer token"
               data-component="header">
    <br>
<p>Example: <code>Enter your bearer token</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="GETposts-create--category--"
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
                              name="Accept"                data-endpoint="GETposts-create--category--"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>category</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
                <input type="text" style="display: none"
                              name="category"                data-endpoint="GETposts-create--category--"
               value="consequatur"
               data-component="url">
    <br>
<p>Example: <code>consequatur</code></p>
            </div>
                    </form>

                    <h2 id="endpoints-GETcommunity--category--">GET community/{category?}</h2>

<p>
<small class="badge badge-darkred">requires authentication</small>
</p>



<span id="example-requests-GETcommunity--category--">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://localhost/community/consequatur" \
    --header "Authorization: Enter your bearer token" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/community/consequatur"
);

const headers = {
    "Authorization": "Enter your bearer token",
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETcommunity--category--">
            <blockquote>
            <p>Example response (401):</p>
        </blockquote>
                <details class="annotation">
            <summary style="cursor: pointer;">
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
set-cookie: XSRF-TOKEN=eyJpdiI6IkFvZXpoSmovVEFqZkxQcldkOGhnMlE9PSIsInZhbHVlIjoidU94NHZtYVNFS1ZVdkFhdys1Z3dmR1NkeXR2bzQrYWhhWlJOVzhCYTVkVXg1aGZmWGNzdWhab0JEZ0xJdzdhVU52RnZmNzAwdW9MZ05IOEMrT0pCYnFYdHJDOWtxKzdmY3AxVitrM1ppbkNJSnE3L1hHZE4yM3F0YnppMmc2TTAiLCJtYWMiOiJlOGM0MjA0ZDEyMTEzMjQ4YzIwNzdjNTYyM2VkODc5MDVmOTZiNzU1Njc5YmQ3NWQyNTk5MTg4YjljZGVlMzk3IiwidGFnIjoiIn0%3D; expires=Wed, 17 Sep 2025 03:11:11 GMT; Max-Age=7200; path=/; samesite=lax; laravel-session=eyJpdiI6IjlNUU9NQnVqeE8wSE52UFMvTFMvR2c9PSIsInZhbHVlIjoiU3ZPZU9OeHFBbUI1U3RMSWo4ZUU1Ny8vZ29meWhOZ1c5cERYS2MwSUxkVkZPamFyKzRiRGgxZDF2S1ZKVGRlcERJRGRPK0xFZVNJMzRYVjJOb05Md2UxNzM2OEk1ZnQ2V1RrNXRRd0t0K1JESjZ3TW15VkMxaDI2aENXOE5wZzciLCJtYWMiOiJhMDQ4OTE2OTA0YTkyNjM5MjNlZDgzYWM1ZDg1ZDk3YmM4MzIzZGQ0YzM5YmQ4ZDBlMTNmZWM4Mzc1ZjZhMjdlIiwidGFnIjoiIn0%3D; expires=Wed, 17 Sep 2025 03:11:11 GMT; Max-Age=7200; path=/; httponly; samesite=lax
 </code></pre></details>         <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;message&quot;: &quot;Unauthenticated.&quot;
}</code>
 </pre>
    </span>
<span id="execution-results-GETcommunity--category--" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETcommunity--category--"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETcommunity--category--"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETcommunity--category--" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETcommunity--category--">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-GETcommunity--category--" data-method="GET"
      data-path="community/{category?}"
      data-authed="1"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETcommunity--category--', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETcommunity--category--"
                    onclick="tryItOut('GETcommunity--category--');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETcommunity--category--"
                    onclick="cancelTryOut('GETcommunity--category--');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETcommunity--category--"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>community/{category?}</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Authorization</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Authorization" class="auth-value"               data-endpoint="GETcommunity--category--"
               value="Enter your bearer token"
               data-component="header">
    <br>
<p>Example: <code>Enter your bearer token</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="GETcommunity--category--"
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
                              name="Accept"                data-endpoint="GETcommunity--category--"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>category</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
                <input type="text" style="display: none"
                              name="category"                data-endpoint="GETcommunity--category--"
               value="consequatur"
               data-component="url">
    <br>
<p>Example: <code>consequatur</code></p>
            </div>
                    </form>

                    <h2 id="endpoints-DELETEposts--id-">Excluir um post.</h2>

<p>
<small class="badge badge-darkred">requires authentication</small>
</p>

<p>Exclui um post específico. O usuário só pode excluir seus próprios posts.</p>

<span id="example-requests-DELETEposts--id-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request DELETE \
    "http://localhost/posts/2" \
    --header "Authorization: Enter your bearer token" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/posts/2"
);

const headers = {
    "Authorization": "Enter your bearer token",
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "DELETE",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-DELETEposts--id-">
</span>
<span id="execution-results-DELETEposts--id-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-DELETEposts--id-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-DELETEposts--id-"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-DELETEposts--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-DELETEposts--id-">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-DELETEposts--id-" data-method="DELETE"
      data-path="posts/{id}"
      data-authed="1"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('DELETEposts--id-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-DELETEposts--id-"
                    onclick="tryItOut('DELETEposts--id-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-DELETEposts--id-"
                    onclick="cancelTryOut('DELETEposts--id-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-DELETEposts--id-"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-red">DELETE</small>
            <b><code>posts/{id}</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Authorization</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Authorization" class="auth-value"               data-endpoint="DELETEposts--id-"
               value="Enter your bearer token"
               data-component="header">
    <br>
<p>Example: <code>Enter your bearer token</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="DELETEposts--id-"
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
                              name="Accept"                data-endpoint="DELETEposts--id-"
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
               step="any"               name="id"                data-endpoint="DELETEposts--id-"
               value="2"
               data-component="url">
    <br>
<p>The ID of the post. Example: <code>2</code></p>
            </div>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>post</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="post"                data-endpoint="DELETEposts--id-"
               value="1"
               data-component="url">
    <br>
<p>O ID do post a ser excluído. Example: <code>1</code></p>
            </div>
                    </form>

                    <h2 id="endpoints-GETreset-password--token-">Display the password reset view.</h2>

<p>
<small class="badge badge-darkred">requires authentication</small>
</p>



<span id="example-requests-GETreset-password--token-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://localhost/reset-password/consequatur" \
    --header "Authorization: Enter your bearer token" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/reset-password/consequatur"
);

const headers = {
    "Authorization": "Enter your bearer token",
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETreset-password--token-">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <details class="annotation">
            <summary style="cursor: pointer;">
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">content-type: text/html; charset=UTF-8
cache-control: no-cache, private
set-cookie: XSRF-TOKEN=eyJpdiI6Imk0YWNiRTYxSXpxeFVtYnBQNWtKWEE9PSIsInZhbHVlIjoieFoyZnB2K2pVWWthb3NFV1lOR3NrL1k4RUMxM2x6L0podmJJQzFwUXMzdW9VVnpsVEd0WUY0b244Ry9Kd3kzb0Z1aWlNOVRaSFVXb0xIRmhOWHF6d29Gdk9FMDVhd2pZM1pxZk1lajBEVUF0TFBRRDFodlVpa1ZOdGltcmVlNlAiLCJtYWMiOiJlMjJjYjk2YTU4ODNmOTU1Y2YzZTYyNGE4ZWEyNDI2NGNmYzc4MmQ3ZWRhM2NhNjA0Nzc1MTViYzExNDIwNThkIiwidGFnIjoiIn0%3D; expires=Wed, 17 Sep 2025 03:11:14 GMT; Max-Age=7200; path=/; samesite=lax; laravel-session=eyJpdiI6ImljQVgyNDRhdmVzaGlKbDZWVGtFSUE9PSIsInZhbHVlIjoiNDFHRU5LV01wY2VTdWtFZTYxcWY5TkltVnZUbkRWaTVvMnQzWWZ0VVRxenhkbnpOQ3lBNUczYVF3Wi9yb2VtWHRaamZidHFUazNjOWU2ZVU5TExzZU5vd0hkZU03ZjJzYjBCc2xGWUgyc2ZNN2dSRzRTaC93MDlSdVFtWG5ELzUiLCJtYWMiOiJhOTkzOTExZjg0YjA1OWU0NGViODMxYjI1M2IzNmViMDQ3ZDFhZTBjNzhkNjA1OTBmMTYwMjZiNDliNGQyNTJlIiwidGFnIjoiIn0%3D; expires=Wed, 17 Sep 2025 03:11:14 GMT; Max-Age=7200; path=/; httponly; samesite=lax
 </code></pre></details>         <pre>

<code class="language-json" style="max-height: 300px;">&lt;!DOCTYPE html&gt;
&lt;html lang=&quot;en&quot;&gt;
    &lt;head&gt;
        &lt;meta charset=&quot;utf-8&quot;&gt;
        &lt;meta name=&quot;viewport&quot; content=&quot;width=device-width, initial-scale=1&quot;&gt;
        &lt;meta name=&quot;csrf-token&quot; content=&quot;K83cBRdlP5Bewan4WIwGyLJLXjCbYjKfl5EBsOMr&quot;&gt;

        &lt;title&gt;Laravel&lt;/title&gt;

        &lt;!-- Fonts --&gt;
        &lt;link rel=&quot;preconnect&quot; href=&quot;https://fonts.bunny.net&quot;&gt;
        &lt;link href=&quot;https://fonts.bunny.net/css?family=figtree:400,500,600&amp;display=swap&quot; rel=&quot;stylesheet&quot; /&gt;

        
    &lt;/head&gt;
    &lt;body class=&quot;font-sans text-gray-900 antialiased&quot;&gt;
        &lt;div class=&quot;min-h-screen flex flex-col sm:justify-center items-center pt-6 sm:pt-0 bg-gray-100&quot;&gt;
            &lt;div&gt;
                &lt;a href=&quot;/&quot;&gt;
                    &lt;svg viewBox=&quot;0 0 316 316&quot; xmlns=&quot;http://www.w3.org/2000/svg&quot; class=&quot;w-20 h-20 fill-current text-gray-500&quot;&gt;
    &lt;path d=&quot;M305.8 81.125C305.77 80.995 305.69 80.885 305.65 80.755C305.56 80.525 305.49 80.285 305.37 80.075C305.29 79.935 305.17 79.815 305.07 79.685C304.94 79.515 304.83 79.325 304.68 79.175C304.55 79.045 304.39 78.955 304.25 78.845C304.09 78.715 303.95 78.575 303.77 78.475L251.32 48.275C249.97 47.495 248.31 47.495 246.96 48.275L194.51 78.475C194.33 78.575 194.19 78.725 194.03 78.845C193.89 78.955 193.73 79.045 193.6 79.175C193.45 79.325 193.34 79.515 193.21 79.685C193.11 79.815 192.99 79.935 192.91 80.075C192.79 80.285 192.71 80.525 192.63 80.755C192.58 80.875 192.51 80.995 192.48 81.125C192.38 81.495 192.33 81.875 192.33 82.265V139.625L148.62 164.795V52.575C148.62 52.185 148.57 51.805 148.47 51.435C148.44 51.305 148.36 51.195 148.32 51.065C148.23 50.835 148.16 50.595 148.04 50.385C147.96 50.245 147.84 50.125 147.74 49.995C147.61 49.825 147.5 49.635 147.35 49.485C147.22 49.355 147.06 49.265 146.92 49.155C146.76 49.025 146.62 48.885 146.44 48.785L93.99 18.585C92.64 17.805 90.98 17.805 89.63 18.585L37.18 48.785C37 48.885 36.86 49.035 36.7 49.155C36.56 49.265 36.4 49.355 36.27 49.485C36.12 49.635 36.01 49.825 35.88 49.995C35.78 50.125 35.66 50.245 35.58 50.385C35.46 50.595 35.38 50.835 35.3 51.065C35.25 51.185 35.18 51.305 35.15 51.435C35.05 51.805 35 52.185 35 52.575V232.235C35 233.795 35.84 235.245 37.19 236.025L142.1 296.425C142.33 296.555 142.58 296.635 142.82 296.725C142.93 296.765 143.04 296.835 143.16 296.865C143.53 296.965 143.9 297.015 144.28 297.015C144.66 297.015 145.03 296.965 145.4 296.865C145.5 296.835 145.59 296.775 145.69 296.745C145.95 296.655 146.21 296.565 146.45 296.435L251.36 236.035C252.72 235.255 253.55 233.815 253.55 232.245V174.885L303.81 145.945C305.17 145.165 306 143.725 306 142.155V82.265C305.95 81.875 305.89 81.495 305.8 81.125ZM144.2 227.205L100.57 202.515L146.39 176.135L196.66 147.195L240.33 172.335L208.29 190.625L144.2 227.205ZM244.75 114.995V164.795L226.39 154.225L201.03 139.625V89.825L219.39 100.395L244.75 114.995ZM249.12 57.105L292.81 82.265L249.12 107.425L205.43 82.265L249.12 57.105ZM114.49 184.425L96.13 194.995V85.305L121.49 70.705L139.85 60.135V169.815L114.49 184.425ZM91.76 27.425L135.45 52.585L91.76 77.745L48.07 52.585L91.76 27.425ZM43.67 60.135L62.03 70.705L87.39 85.305V202.545V202.555V202.565C87.39 202.735 87.44 202.895 87.46 203.055C87.49 203.265 87.49 203.485 87.55 203.695V203.705C87.6 203.875 87.69 204.035 87.76 204.195C87.84 204.375 87.89 204.575 87.99 204.745C87.99 204.745 87.99 204.755 88 204.755C88.09 204.905 88.22 205.035 88.33 205.175C88.45 205.335 88.55 205.495 88.69 205.635L88.7 205.645C88.82 205.765 88.98 205.855 89.12 205.965C89.28 206.085 89.42 206.225 89.59 206.325C89.6 206.325 89.6 206.325 89.61 206.335C89.62 206.335 89.62 206.345 89.63 206.345L139.87 234.775V285.065L43.67 229.705V60.135ZM244.75 229.705L148.58 285.075V234.775L219.8 194.115L244.75 179.875V229.705ZM297.2 139.625L253.49 164.795V114.995L278.85 100.395L297.21 89.825V139.625H297.2Z&quot;/&gt;
&lt;/svg&gt;
                &lt;/a&gt;
            &lt;/div&gt;

            &lt;div class=&quot;w-full sm:max-w-md mt-6 px-6 py-4 bg-white shadow-md overflow-hidden sm:rounded-lg&quot;&gt;
                &lt;form method=&quot;POST&quot; action=&quot;http://localhost/reset-password&quot;&gt;
        &lt;input type=&quot;hidden&quot; name=&quot;_token&quot; value=&quot;K83cBRdlP5Bewan4WIwGyLJLXjCbYjKfl5EBsOMr&quot; autocomplete=&quot;off&quot;&gt;
        &lt;!-- Password Reset Token --&gt;
        &lt;input type=&quot;hidden&quot; name=&quot;token&quot; value=&quot;consequatur&quot;&gt;

        &lt;!-- Email Address --&gt;
        &lt;div&gt;
            &lt;label class=&quot;block font-medium text-sm text-gray-700&quot; for=&quot;email&quot;&gt;
    Email
&lt;/label&gt;
            &lt;input  class=&quot;border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm block mt-1 w-full&quot; id=&quot;email&quot; type=&quot;email&quot; name=&quot;email&quot; required=&quot;required&quot; autofocus=&quot;autofocus&quot; autocomplete=&quot;username&quot;&gt;
                    &lt;/div&gt;

        &lt;!-- Password --&gt;
        &lt;div class=&quot;mt-4&quot;&gt;
            &lt;label class=&quot;block font-medium text-sm text-gray-700&quot; for=&quot;password&quot;&gt;
    Password
&lt;/label&gt;
            &lt;input  class=&quot;border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm block mt-1 w-full&quot; id=&quot;password&quot; type=&quot;password&quot; name=&quot;password&quot; required=&quot;required&quot; autocomplete=&quot;new-password&quot;&gt;
                    &lt;/div&gt;

        &lt;!-- Confirm Password --&gt;
        &lt;div class=&quot;mt-4&quot;&gt;
            &lt;label class=&quot;block font-medium text-sm text-gray-700&quot; for=&quot;password_confirmation&quot;&gt;
    Confirm Password
&lt;/label&gt;

            &lt;input  class=&quot;border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm block mt-1 w-full&quot; id=&quot;password_confirmation&quot; type=&quot;password&quot; name=&quot;password_confirmation&quot; required=&quot;required&quot; autocomplete=&quot;new-password&quot;&gt;

                    &lt;/div&gt;

        &lt;div class=&quot;flex items-center justify-end mt-4&quot;&gt;
            &lt;button type=&quot;submit&quot; class=&quot;inline-flex items-center px-4 py-2 bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 focus:bg-gray-700 active:bg-gray-900 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 transition ease-in-out duration-150&quot;&gt;
    Reset Password
&lt;/button&gt;
        &lt;/div&gt;
    &lt;/form&gt;
            &lt;/div&gt;
        &lt;/div&gt;
    &lt;/body&gt;
&lt;/html&gt;
</code>
 </pre>
    </span>
<span id="execution-results-GETreset-password--token-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETreset-password--token-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETreset-password--token-"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETreset-password--token-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETreset-password--token-">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-GETreset-password--token-" data-method="GET"
      data-path="reset-password/{token}"
      data-authed="1"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETreset-password--token-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETreset-password--token-"
                    onclick="tryItOut('GETreset-password--token-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETreset-password--token-"
                    onclick="cancelTryOut('GETreset-password--token-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETreset-password--token-"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>reset-password/{token}</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Authorization</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Authorization" class="auth-value"               data-endpoint="GETreset-password--token-"
               value="Enter your bearer token"
               data-component="header">
    <br>
<p>Example: <code>Enter your bearer token</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="GETreset-password--token-"
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
                              name="Accept"                data-endpoint="GETreset-password--token-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>token</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="token"                data-endpoint="GETreset-password--token-"
               value="consequatur"
               data-component="url">
    <br>
<p>Example: <code>consequatur</code></p>
            </div>
                    </form>

                    <h2 id="endpoints-GETverify-email--id---hash-">Mark the authenticated user&#039;s email address as verified.</h2>

<p>
<small class="badge badge-darkred">requires authentication</small>
</p>



<span id="example-requests-GETverify-email--id---hash-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://localhost/verify-email/consequatur/consequatur" \
    --header "Authorization: Enter your bearer token" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/verify-email/consequatur/consequatur"
);

const headers = {
    "Authorization": "Enter your bearer token",
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETverify-email--id---hash-">
            <blockquote>
            <p>Example response (401):</p>
        </blockquote>
                <details class="annotation">
            <summary style="cursor: pointer;">
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
set-cookie: XSRF-TOKEN=eyJpdiI6IjVqZHZNcFJBb3Aya25NTVpxQ3A1RVE9PSIsInZhbHVlIjoiZUJlNU5hWjhXYUU4cmNvUEJDc05ackxZYmgwZkxLcUxJNFFmMmZBbHdhb1JsQjg4dVV3MldwQmZ0cmFCNU9GUTkwWjJpUlpXSlUrUStXM2ZjTWZ2Yi9DSkNicTh2VmdWM1czMHQzdm5WcmIxVVJwUDI0YUUxeDg4Y3JvUTJEd0IiLCJtYWMiOiJiMTE0ZjBmYjdmN2Q5MWY2MWVhYWZjZmQ3MDFjM2VmMDBkMzFhMDZiMmU3YmI0MmM5YWU2Y2FmNWMzNzg3ODZmIiwidGFnIjoiIn0%3D; expires=Wed, 17 Sep 2025 03:11:14 GMT; Max-Age=7200; path=/; samesite=lax; laravel-session=eyJpdiI6InhlYzdFbkxXdWQwbFNLcVM4djJZa3c9PSIsInZhbHVlIjoiWkFGazBtdzlFZXgyaFBDTzhEcmk4YzFqb2h3WENlUHlwUnlsNk5LcVlacXJkUFBnRzZOc2x3SDZFTThNN0FtUFB5WFlZc2N4di92bEV6QjB0dUN1N0owUE53MERKNVpEeGZMZjVRME1nNkNwK0lYQUxxWHR6VmI0MUIvUzJrMzEiLCJtYWMiOiI0ZTU2MjlkYzE2MWIzM2VmMTYzYWZlMDU5YzdlMWE0NmI4YzJjYjZmNDA4NTcxODUzYzliMzMyODllOTcyNGVjIiwidGFnIjoiIn0%3D; expires=Wed, 17 Sep 2025 03:11:14 GMT; Max-Age=7200; path=/; httponly; samesite=lax
 </code></pre></details>         <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;message&quot;: &quot;Unauthenticated.&quot;
}</code>
 </pre>
    </span>
<span id="execution-results-GETverify-email--id---hash-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETverify-email--id---hash-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETverify-email--id---hash-"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETverify-email--id---hash-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETverify-email--id---hash-">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-GETverify-email--id---hash-" data-method="GET"
      data-path="verify-email/{id}/{hash}"
      data-authed="1"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETverify-email--id---hash-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETverify-email--id---hash-"
                    onclick="tryItOut('GETverify-email--id---hash-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETverify-email--id---hash-"
                    onclick="cancelTryOut('GETverify-email--id---hash-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETverify-email--id---hash-"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>verify-email/{id}/{hash}</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Authorization</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Authorization" class="auth-value"               data-endpoint="GETverify-email--id---hash-"
               value="Enter your bearer token"
               data-component="header">
    <br>
<p>Example: <code>Enter your bearer token</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="GETverify-email--id---hash-"
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
                              name="Accept"                data-endpoint="GETverify-email--id---hash-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>id</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="id"                data-endpoint="GETverify-email--id---hash-"
               value="consequatur"
               data-component="url">
    <br>
<p>The ID of the verify email. Example: <code>consequatur</code></p>
            </div>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>hash</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="hash"                data-endpoint="GETverify-email--id---hash-"
               value="consequatur"
               data-component="url">
    <br>
<p>Example: <code>consequatur</code></p>
            </div>
                    </form>

                    <h2 id="endpoints-POSTemail-verification-notification">Send a new email verification notification.</h2>

<p>
<small class="badge badge-darkred">requires authentication</small>
</p>



<span id="example-requests-POSTemail-verification-notification">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request POST \
    "http://localhost/email/verification-notification" \
    --header "Authorization: Enter your bearer token" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/email/verification-notification"
);

const headers = {
    "Authorization": "Enter your bearer token",
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-POSTemail-verification-notification">
</span>
<span id="execution-results-POSTemail-verification-notification" hidden>
    <blockquote>Received response<span
                id="execution-response-status-POSTemail-verification-notification"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-POSTemail-verification-notification"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-POSTemail-verification-notification" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTemail-verification-notification">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-POSTemail-verification-notification" data-method="POST"
      data-path="email/verification-notification"
      data-authed="1"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('POSTemail-verification-notification', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-POSTemail-verification-notification"
                    onclick="tryItOut('POSTemail-verification-notification');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-POSTemail-verification-notification"
                    onclick="cancelTryOut('POSTemail-verification-notification');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-POSTemail-verification-notification"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-black">POST</small>
            <b><code>email/verification-notification</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Authorization</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Authorization" class="auth-value"               data-endpoint="POSTemail-verification-notification"
               value="Enter your bearer token"
               data-component="header">
    <br>
<p>Example: <code>Enter your bearer token</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="POSTemail-verification-notification"
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
                              name="Accept"                data-endpoint="POSTemail-verification-notification"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        </form>

                    <h2 id="endpoints-GETstorage--path-">GET storage/{path}</h2>

<p>
<small class="badge badge-darkred">requires authentication</small>
</p>



<span id="example-requests-GETstorage--path-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://localhost/storage/2UZ5i" \
    --header "Authorization: Enter your bearer token" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/storage/2UZ5i"
);

const headers = {
    "Authorization": "Enter your bearer token",
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETstorage--path-">
            <blockquote>
            <p>Example response (403):</p>
        </blockquote>
                <details class="annotation">
            <summary style="cursor: pointer;">
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
 </code></pre></details>         <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;message&quot;: &quot;&quot;
}</code>
 </pre>
    </span>
<span id="execution-results-GETstorage--path-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETstorage--path-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETstorage--path-"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETstorage--path-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETstorage--path-">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-GETstorage--path-" data-method="GET"
      data-path="storage/{path}"
      data-authed="1"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETstorage--path-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETstorage--path-"
                    onclick="tryItOut('GETstorage--path-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETstorage--path-"
                    onclick="cancelTryOut('GETstorage--path-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETstorage--path-"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>storage/{path}</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Authorization</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Authorization" class="auth-value"               data-endpoint="GETstorage--path-"
               value="Enter your bearer token"
               data-component="header">
    <br>
<p>Example: <code>Enter your bearer token</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="GETstorage--path-"
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
                              name="Accept"                data-endpoint="GETstorage--path-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>path</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="path"                data-endpoint="GETstorage--path-"
               value="2UZ5i"
               data-component="url">
    <br>
<p>Example: <code>2UZ5i</code></p>
            </div>
                    </form>

                <h1 id="gerenciamento-de-perfil">Gerenciamento de Perfil</h1>

    

                                <h2 id="gerenciamento-de-perfil-POSTprofile-photo">Atualizar foto de perfil.</h2>

<p>
<small class="badge badge-darkred">requires authentication</small>
</p>



<span id="example-requests-POSTprofile-photo">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request POST \
    "http://localhost/profile/photo" \
    --header "Authorization: Enter your bearer token" \
    --header "Content-Type: multipart/form-data" \
    --header "Accept: application/json" \
    --form "profile_photo=@C:\Users\andressa\AppData\Local\Temp\phpC16.tmp" </code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/profile/photo"
);

const headers = {
    "Authorization": "Enter your bearer token",
    "Content-Type": "multipart/form-data",
    "Accept": "application/json",
};

const body = new FormData();
body.append('profile_photo', document.querySelector('input[name="profile_photo"]').files[0]);

fetch(url, {
    method: "POST",
    headers,
    body,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-POSTprofile-photo">
</span>
<span id="execution-results-POSTprofile-photo" hidden>
    <blockquote>Received response<span
                id="execution-response-status-POSTprofile-photo"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-POSTprofile-photo"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-POSTprofile-photo" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTprofile-photo">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-POSTprofile-photo" data-method="POST"
      data-path="profile/photo"
      data-authed="1"
      data-hasfiles="1"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('POSTprofile-photo', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-POSTprofile-photo"
                    onclick="tryItOut('POSTprofile-photo');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-POSTprofile-photo"
                    onclick="cancelTryOut('POSTprofile-photo');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-POSTprofile-photo"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-black">POST</small>
            <b><code>profile/photo</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Authorization</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Authorization" class="auth-value"               data-endpoint="POSTprofile-photo"
               value="Enter your bearer token"
               data-component="header">
    <br>
<p>Example: <code>Enter your bearer token</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="POSTprofile-photo"
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
                              name="Accept"                data-endpoint="POSTprofile-photo"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>profile_photo</code></b>&nbsp;&nbsp;
<small>file</small>&nbsp;
 &nbsp;
                <input type="file" style="display: none"
                              name="profile_photo"                data-endpoint="POSTprofile-photo"
               value=""
               data-component="body">
    <br>
<p>A nova foto de perfil (máx 500KB). Example: <code>C:\Users\andressa\AppData\Local\Temp\phpC16.tmp</code></p>
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
