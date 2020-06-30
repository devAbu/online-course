<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Second laravel App</title>

        {{-- BOOTSTRAP CSS --}}
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

        {{-- CUSTOM CSS --}}
        <link rel="stylesheet" href="{{ URL::to('css/style.css') }}">

    </head>
    <body>
        
        @include('templates.navbar')

        @yield('main')

        @include('templates.footer')
    </body>
</html>
