<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <link type="text/css" rel="stylesheet" href="/assets/css/materialize.min.css" />
    <link type="text/css" rel="stylesheet" href="/assets/css/font-awesome.min.css" />
    <link type="text/css" rel="stylesheet" href="/assets/css/style.css" />
    <link type="text/css" rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons" />
    
    {{-- Revert to jQuery 1.11.2 instead of 1.12.0 due to an error with scrollspy on html selectors --}}
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.4/jquery-ui.min.js"></script>
    <script type="text/javascript" src="/assets/js/moment-with-locales.min.js"></script>
    <script type="text/javascript" src="/assets/js/materialize.min.js"></script>
    <script type="text/javascript" src="/assets/js/parsley.min.js"></script>
    <script type="text/javascript" src="/assets/js/site.js"></script>
    @yield("head")
  </head>
  <body>
    @include("partials/header")

    @yield("content")
    
    @include("partials/footer")
    
    @yield("scripts")
    <script src="https://use.typekit.net/grc7ary.js"></script>
    <script>try{Typekit.load({ async: true });}catch(e){}</script>
  </body>
</html>