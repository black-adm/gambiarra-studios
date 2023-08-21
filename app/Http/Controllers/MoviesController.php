<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class MoviesController extends Controller
{
    public function index()
    {
        $response = Http::get('https://api.themoviedb.org/3/movie/popular', [
            'api_key' => config('services.tmdb.token'),
        ]);
    
        $popularMovies = $response->json()['results'];
    
        return view('index', ['popularMovies' => $popularMovies]);
    }

}
