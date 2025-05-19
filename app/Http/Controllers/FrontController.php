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
}
