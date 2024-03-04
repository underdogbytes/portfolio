<!-- resources/views/home.blade.php -->

<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Underdog Bytes</title>

    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
  </head>

  <body>

    <x-navbar />

    <main>
      @yield('content')
    </main>

    <x-footer />

  </body>

</html>