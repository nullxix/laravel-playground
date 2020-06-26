<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>@yield('title')</title>
    </head>
    <body style='background: #eaa;'>

        <div class="container" style='width: 70%; margin: auto; background: #fdd; min-height: 80vh; box-shadow: 5px 5px 20px rgba(110, 79, 79, 0.5); border-radius: 20px;'>
            @yield('content')
        </div>
    </body>
</html>