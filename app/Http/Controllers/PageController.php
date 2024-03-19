<?php

namespace App\Http\Controllers;

// use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index() {
        return view('pages.home');
    }

    public function comics() {
        $comics = config('comics');
        return view('pages.comics', compact('comics'));
    }

    public function comicDetail($index) {
        $comics = config('comics');
        $comic = $comics[$index];
        return view('pages.comic-detail', compact('comic'));
    }

    public function about() {
        return view('pages.about');
    }

    public function contacts() {
        return view('pages.contacts');
    }

    public function movies() {
        return view('pages.movies');
    }

    public function tv() {
        return view('pages.tv');
    }

    public function games() {
        return view('pages.games');
    }

    public function collectibles() {
        return view('pages.collectibles');
    }

    public function videos() {
        return view('pages.videos');
    }
    public function fans() {
        return view('pages.fans');
    }
    public function news() {
        return view('pages.news');
    }
    public function shop() {
        return view('pages.shop');
    }
    public function characters() {
        return view('pages.characters');
    }
}
