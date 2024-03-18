<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  {{-- Google font --}}
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">
  <title>Titolo - @yield('title')</title>

  @vite('resources/js/app.js')
  @yield('css')
</head>

<body>

  @include('partials.header')

  <section id="content-section">
    @yield('main-content')
  </section>
  
  @include('partials.blue-ribbon')

  @include('partials.footer')
  
</body>
</html>