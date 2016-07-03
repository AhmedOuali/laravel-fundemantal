<html>
    <head>
        <title>@yield('title')</title>
        <meta charset="utf-8">
        @include('CDN')
    </head>
    <body>
        @yield('bar-menu')
        <div class="contaier">
            @if(Session::has('flash_message'))
                <div class="alert alert-success">{{Session::get('flash_message')}}</div>
            @endif
            @yield('content')
        </div>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    </body>
</html>