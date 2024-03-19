<!-- il figlio estende il padre -->
@extends('layout.app')

@section('title', 'Comics')

<!-- si collega allo yield di app.blade.php -->
@section('main-content')
  {{-- <h1>Products</h1> --}}
  {{-- Faccio un dump per vedere se il dato è passato --}}
  {{-- @dump($comics) --}}

  {{-- <section class="content-section"> --}}
    <div class="container">
      <button class="btn btn-primary" id="current-series">CURRENT SERIES</button>
      
      <div class="row g-4">
        @foreach ($comics as $comic)
        <div class="col-2">
          <div class="card">
            <div class="wrapper-image">
              <a href="{{ route('comic-detail') }}">
                <img src="{{ url($comic['thumb']) }}" alt="">
              </a>
            </div>
            <p>{{ $comic['title'] }}</p>
          </div>
        </div>
        @endforeach
      </div>
    </div>

    <div class="container text-center mt-5">
      <button class="btn btn-primary" id="load-more">LOAD MORE</button>
    </div>
      
  {{-- </section> --}}

  @include('partials.blue-ribbon')


@endsection

