<!-- il figlio estende il padre -->
@extends('layout.app')

@section('title', 'Comics')

<!-- si collega allo yield di app.blade.php -->
@section('main-content')
  <h1>Comic detail: {{ $comic['title'] }}</h1>

  <div class="wrapper-image">
    <img src="{{ url($comic['thumb']) }}" alt="">
  </div>
  <p>{{ $comic['series'] }}</p>

@endsection

