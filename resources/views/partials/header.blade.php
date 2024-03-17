<!-- Route::currentRouteName() restituisce il nome della rotta corrente -->

<header class="container d-flex justify-content-center">

  <img src="{{ Vite::asset('/resources/images/dc-logo.png') }}" alt="">

  <ul>
    <li>
      <a @class (['link','active' => Route::currentRouteName() == 'home']) href="{{ route('home') }}">Homepage</a>
    </li>
    <li>
      <a @class (['link','active' => Route::currentRouteName() == 'about']) href="{{ route('about') }}">About</a>
    </li>
    <li>
      <a @class (['link','active' => Route::currentRouteName() == 'contacts']) href="{{ route('contacts') }}">Contacts</a>
    </li>
    <li>
      <a @class (['link','active' => Route::currentRouteName() == 'comics']) href="{{ route('comics') }}">Comics</a>
    </li>
    <li>
      <a @class (['link','active' => Route::currentRouteName() == 'movies']) href="{{ route('movies') }}">Movies</a>
    </li>
    <li>
      <a @class (['link','active' => Route::currentRouteName() == 'tv']) href="{{ route('tv') }}">TV</a>
    </li>
    <li>
      <a @class (['link','active' => Route::currentRouteName() == 'games']) href="{{ route('games') }}">Games</a>
    </li>
    <li>
      <a @class (['link','active' => Route::currentRouteName() == 'collectibles']) href="{{ route('collectibles') }}">Collectibles</a>
    </li>
    <li>
      <a @class (['link','active' => Route::currentRouteName() == 'videos']) href="{{ route('videos') }}">Videos</a>
    </li>
    <li>
      <a @class (['link','active' => Route::currentRouteName() == 'fans']) href="{{ route('fans') }}">Fans</a>
    </li>
    <li>
      <a @class (['link','active' => Route::currentRouteName() == 'news']) href="{{ route('news') }}">News</a>
    </li>
    <li>
      <a @class (['link','active' => Route::currentRouteName() == 'shop']) href="{{ route('shop') }}">Shop</a>
    </li>
  </ul>
</header>