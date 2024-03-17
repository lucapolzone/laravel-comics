<!-- il figlio estende il padre -->
@extends('layout.app')

@section('title', 'Products')

<!-- si collega allo yield di app.blade.php -->
@section('main-content')
  <h1>Products</h1>
  {{-- Faccio un dump per vedere se il dato è passato --}}
  {{-- @dump($comics) --}}

  <div class="row">
    @foreach ($comics as $comic)
      <div class="col-4">
        <div class="card">
          <h3>{{ $comic['title'] }}</h3>
        </div>
      </div>
    @endforeach
  </div>


@endsection
