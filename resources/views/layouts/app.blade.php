<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="css/style.min.css">

    <title>@yield('title')</title>
</head>
<body>
    <div>
        @if(Route::currentRouteName() != 'index')
            @include('layouts.navbar')
            @yield('content')   
            @include('layouts.footer')
            @include('layouts.pop')
        @else
            @yield('content')
        @endif
    </div>
    <script src="js/app.min.js"></script>
</body>
</html>