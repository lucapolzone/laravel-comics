<!-- il figlio estende il padre -->
@extends('layout.app')

@section('title', 'Comics')

<!-- si collega allo yield di app.blade.php -->
@section('main-content')
  <div class="container d-flex justify-content-center" id="comic-detail-section">
    <div class="row">
      <div class="col-12 d-flex justify-content-center">
        <div class="wrapper-comic text-center">
          <h1>{{ $comic['title'] }}</h1>
        
          <div class="wrapper-image">
            <img src="{{ url($comic['thumb']) }}" alt="">
          </div>
          <div class="caption d-flex justify-content-center">
            <p>{{ $comic['description'] }}</p>
          </div>
        </div>
      </div>
    </div>
  </div>
  
@endsection

