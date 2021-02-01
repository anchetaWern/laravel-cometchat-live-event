<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        @yield('title')
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">

        @yield('page_scripts')
    </head>
    <body>
        @yield('content')
    </body>

    @yield('foot_scripts')
</html>
