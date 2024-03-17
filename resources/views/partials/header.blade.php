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
      <a @class (['link','active' => Route::currentRouteName() == 'products']) href="{{ route('products') }}">Products</a>
    </li>
  </ul>
</header>