<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <link type="text/css" rel="stylesheet" href="/assets/css/materialize.css" />
    <link type="text/css" rel="stylesheet" href="/assets/css/font-awesome.min.css" />
    <link type="text/css" rel="stylesheet" href="/assets/css/style.css" />
    <link type="text/css" rel="stylesheet" href="/assets/css/aieset.css" />
    <link type="text/css" rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons" />

    {{-- Revert to jQuery 1.11.2 instead of 1.12.0 due to an error with scrollspy on html selectors --}}
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.4/jquery-ui.min.js"></script>
    <script type="text/javascript" src="/assets/js/moment-with-locales.min.js"></script>
    <script type="text/javascript" src="/assets/js/materialize.min.js"></script>
    <script type="text/javascript" src="/assets/js/parsley.min.js"></script>
    <script type="text/javascript" src="/assets/js/parselyConditions.min.js"></script>
    <script type="text/javascript" src="/assets/js/site.js"></script>
    @yield("head")
  </head>
  <body>
    @include("partials/header")

    @yield("content")
    
    @include("partials/footer")
    
    @yield("scripts")
    <script type="text/javascript" src="/assets/js/typekit-cache.min.js"></script>
    <script>
      (function(d) {
        var config = {
          kitId: 'grc7ary',
          scriptTimeout: 3000,
          async: true
        },
        h=d.documentElement,t=setTimeout(function(){h.className=h.className.replace(/\bwf-loading\b/g,"")+" wf-inactive";},config.scriptTimeout),tk=d.createElement("script"),f=false,s=d.getElementsByTagName("script")[0],a;h.className+=" wf-loading";tk.src='https://use.typekit.net/'+config.kitId+'.js';tk.async=true;tk.onload=tk.onreadystatechange=function(){a=this.readyState;if(f||a&&a!="complete"&&a!="loaded")return;f=true;clearTimeout(t);try{Typekit.load(config)}catch(e){}};s.parentNode.insertBefore(tk,s)
      })(document);
    </script>
  </body>
</html>