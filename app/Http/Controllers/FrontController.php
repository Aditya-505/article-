<?php
namespace App\Http\Controllers;

use App\Models\Genre;
use App\Models\Game;


class FrontController extends Controller
{
    public function index()
    {
        $genre = Genre::all();
        $game = Game::all();

        return view('welcome', compact('genre','game'));
    }

    public function show($id)
    {
        $game = Game::find($id);
        return view('penjelasan', compact('game'));
    }

}

   
