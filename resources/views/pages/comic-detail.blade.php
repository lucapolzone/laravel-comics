<!-- il figlio estende il padre -->
@extends('layout.app')

@section('title', 'Comics')

<!-- si collega allo yield di app.blade.php -->
@section('main-content')
  <h1 style="color: red">Comic detail: {{ $comic['title'] }}</h1>

  <div class="wrapper-image">
    <img src="{{ url($comic['thumb']) }}" alt="">
  </div>
  <h2 style="color: orange">{{ $comic['series'] }}</h2>

@endsection

