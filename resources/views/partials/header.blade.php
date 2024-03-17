<!-- Route::currentRouteName() restituisce il nome della rotta corrente -->

<header>
  <div class="top-bar">
  </div>

  <div class="container">
    <nav class="d-flex justify-content-center align-items-center">
      <img src="{{ Vite::asset('/resources/images/dc-logo.png') }}" class="dc-logo" alt="">

      <ul class="d-flex">
        <li>
          <a @class (['link','active' => Route::currentRouteName() == 'home']) href="{{ route('home') }}">HOME</a>
        </li>
        <li>
          <a @class (['link','active' => Route::currentRouteName() == 'about']) href="{{ route('about') }}">ABOUT</a>
        </li>
        <li>
          <a @class (['link','active' => Route::currentRouteName() == 'contacts']) href="{{ route('contacts') }}">CONTACTS</a>
        </li>
        <li>
          <a @class (['link','active' => Route::currentRouteName() == 'comics']) href="{{ route('comics') }}">COMICS</a>
        </li>
        <li>
          <a @class (['link','active' => Route::currentRouteName() == 'movies']) href="{{ route('movies') }}">MOVIES</a>
        </li>
        <li>
          <a @class (['link','active' => Route::currentRouteName() == 'tv']) href="{{ route('tv') }}">TV</a>
        </li>
        <li>
          <a @class (['link','active' => Route::currentRouteName() == 'games']) href="{{ route('games') }}">GAMES</a>
        </li>
        <li>
          <a @class (['link','active' => Route::currentRouteName() == 'collectibles']) href="{{ route('collectibles') }}">COLLECTIBLES</a>
        </li>
        <li>
          <a @class (['link','active' => Route::currentRouteName() == 'videos']) href="{{ route('videos') }}">VIDEOS</a>
        </li>
        <li>
          <a @class (['link','active' => Route::currentRouteName() == 'fans']) href="{{ route('fans') }}">FANS</a>
        </li>
        <li>
          <a @class (['link','active' => Route::currentRouteName() == 'news']) href="{{ route('news') }}">NEWS</a>
        </li>
        <li>
          <a @class (['link','active' => Route::currentRouteName() == 'shop']) href="{{ route('shop') }}">SHOP</a>
        </li>
        <li>
          <a @class (['link','active' => Route::currentRouteName() == 'characters']) href="{{ route('characters') }}">CHARACTERS</a>
        </li>
      </ul>
    </nav>
  </div>

  <div class="jumbotron">
    <img src="{{ Vite::asset('/resources/images/hero-image.jpg') }}" class="hero-image" alt="">
  </div>
</header>