<?php
namespace App\Http\Controllers;

use App\Models\Genre;

class FrontController extends Controller
{
    public function index()
    {
        $genre = Genre::all();
        return view('welcome', compact('Genre'));
    }
}
