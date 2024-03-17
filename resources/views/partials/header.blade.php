<!-- Route::currentRouteName() restituisce il nome della rotta corrente -->

<header class="container d-flex justify-content-center">
  <ul>
    <li>
      <a @if (Route::currentRouteName() == 'home') class="link active" @endif href="{{ route('home') }}">Homepage</a>
    </li>
    <li>
      <a @if (Route::currentRouteName() == 'about') class="link active" @endif href="{{ route('about') }}">About</a>
    </li>
    <li>
      <a @if (Route::currentRouteName() == 'contacts') class="link active" @endif href="{{ route('contacts') }}">Contacts</a>
    </li>
    <li>
      <a @if (Route::currentRouteName() == 'products') class="link active" @endif href="{{ route('products') }}">Products</a>
    </li>
  </ul>
</header>