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
      <div class="col-4">
        <div class="card">
          <p>{{ $comic['title'] }}</p>
          <img src="{{ url($comic['thumb']) }}" alt="">
        </div>
      </div>
    @endforeach
  </div>


@endsection
