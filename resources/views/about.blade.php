<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>About Page</title>
</head>
<body>
    <h1>About Me</h1>
    <p>my about_page</p>
    <p>{!! $first !!} {!! $last !!}</p>
    <div class="container"> 
        @yield('content')
    </div>
   
</body>
</html>