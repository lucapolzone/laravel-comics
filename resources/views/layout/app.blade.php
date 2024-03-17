<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Titolo - @yield('title')</title>

  @vite('resources/js/app.js')
  @yield('css')
</head>

<body>
  @include('partials.header')

  @yield('main-content')
  
  @include('partials.footer')
  
</body>
</html>