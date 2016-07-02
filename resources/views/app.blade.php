<html>
    <head>
        
        <title>@yield('title')</title>
        <meta charset="utf-8">
        @include('CDN')
    </head>
    <body>
        
        <h1>Welcome</h1><div>@yield('content')</div>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    </body>
</html>