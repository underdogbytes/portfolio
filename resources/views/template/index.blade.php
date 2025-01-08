<!-- resources/views/home.blade.php -->

<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

  <head>
    <!-- Meta tags principais -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="UnderdogBytes (Bea)">
    <meta name="description" content="Portfólio de UnderdogBytes, engenheira de software, programadora e artista visual. Explore projetos de desenvolvimento, UI design e arte.">
    <meta name="keywords" content="engenheira de software, programadora, artista visual, ilustradora, desenvolvimento web, portfólio, projetos de software, UI design, arte digital, arte tradicional">
    
    <!-- Meta tags para motores de busca -->
    <meta name="robots" content="index, follow">
    <meta name="googlebot" content="index, follow">

    <!-- Open Graph Meta Tags (para redes sociais) -->
    <meta property="og:title" content="Portfólio de Bea - Engenheira de Software e Artista Visual">
    <meta property="og:description" content="Conheça os projetos de Bea, que combinam habilidades técnicas em programação e criatividade artística.">
    <meta property="og:url" content="https://underdogbytes.com">
    <meta property="og:type" content="website">
    <meta property="og:locale" content="pt_BR">

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