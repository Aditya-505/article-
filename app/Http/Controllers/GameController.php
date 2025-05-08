<?php
namespace App\Http\Controllers;

use App\Models\Game;
use App\Models\Genre;
use Illuminate\Http\Request;

class GameController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $game = Game::all();
        return view('game.index', compact('game'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $genre = Genre::all();
        return view('game.create', compact('genre'));

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $game            = new Game;
        $game->judul     = $request->judul;
        $game->deskripsi = $request->deskripsi;
        $game->foto      = $request->foto;
        $game->penulis   = $request->penulis;
        $game->id_genre  = $request->id_genre;
        if ($request->hasFile('foto')) {
            $img  = $request->file('foto');
            $name = rand(1000, 9999) . $img->getClientOriginalName();
            $img->move('storage/game', $name);
            $game->foto = $name;
        }

        $game->save();

        session()->flash('success', 'Data berhasil ditambahkan');

        return redirect()->route('game.index');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $game = Game::findOrFail($id);
        return view('game.show', compact('game'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $game  = Game::findOrFail($id);
        $genre = Genre::all();
        return view('game.edit', compact('game', 'genre'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $game = Game::findOrFail($id);
        $game->judul     = $request->judul;
        $game->deskripsi = $request->deskripsi;
        $game->penulis   = $request->penulis;
        $game->id_genre  = $request->id_genre;

        if ($request->hasFile('foto')) {

            $img  = $request->file('foto');
            $name = rand(1000, 9999) . $img->getClientOriginalName();
            $img->move('storage/game', $name);
            $game->foto = $name;
        }

        $game->save();

        session()->flash('success', 'Data berhasil di update');

        return redirect()->route('game.index');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $game = Game::findOrFail($id);
        $game->delete();

        return redirect()->route('game.index')->with('success', 'Data Berhasil Dihapus');

    }
}
