<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <link rel="stylesheet" type="text/css" href="css/app.css">

    </head>
    <body>
        <header>
            @include('includes.header')
        </header>
        <div id="main" class="row">
                @yield('content')
        </div>
        <footer class="row">
            @include('includes.footer')
        </footer>
    </body>
</html>
