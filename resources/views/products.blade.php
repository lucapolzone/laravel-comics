<!-- il figlio estende il padre -->
@extends('layout.app')

@section('title', 'Products')

<!-- si collega allo yield di app.blade.php -->
@section('main-content')
  <h1>Products</h1>
  {{-- Faccio un dump per vedere se il dato è passato --}}
  {{-- @dump($comics) --}}

  <div class="row g-4">
    @foreach ($comics as $comic)
      <div class="col-2">
        <div class="card">
          <img src="{{ url($comic['thumb']) }}" alt="">
          <p>{{ $comic['title'] }}</p>
        </div>
      </div>
    @endforeach
  </div>


@endsection
