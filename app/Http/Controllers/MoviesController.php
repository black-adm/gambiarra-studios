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
    
        $genresResponse = Http::get('https://api.themoviedb.org/3/genre/movie/list', [
            'api_key' => config('services.tmdb.token'),
        ]);

        $genresArray = $genresResponse->json(); 

        $genres = collect($genresArray['genres'])->mapWithKeys(function ($genre) {
            return [$genre['id'] => $genre['name']];
        });

        $popularMovies = $response->json()['results'];

        return view('index', [
            'popularMovies' => $popularMovies,
            'genres' => $genres,
        ]);
    }

}
