<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Game;
use App\Models\Genre;

use Illuminate\Http\Request;

class GamesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $games = Game::all();
        return view('admin.games.index', compact('games'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $genres = Genre::pluck('title', 'id');              // sukuriamas knygų žanrų masyvas iš genres lentelės
        $genres->prepend('---Please select---', 0);         // pirmo masyvo elemento reikšmė bus '---Please select---'
        $genres->all();
        $games = Game::all();
        return view('admin.games.form', compact('games','genres'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',   // laukas privalomas|galima įvesti tik raides
            'genre_id' => 'required',
            'rating' => 'required|integer|max:100',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048'
        ]);


        $data = $request->all();
        if ($request->hasFile('image')) {
            $fileName = time().'.'.$request->image->extension(); // failo pavadinimas pvz. 1620283915.jpg
            $request->image->move(public_path('images'), $fileName); // failas bus išsaugotas kataloge ..\library\public\images
            $data['image'] = $fileName;
        }


        Game::create($data);
        return redirect('admin/games')->with('success', 'Game added successfully.');
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
        return view('admin.games.show', compact('game'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $genres = Genre::pluck('title', 'id');
        $genres->prepend('---Please select---', 0);
        $genres->all();


        $game = Game::findOrFail($id);
        return view('admin.games.form', compact('game',  'genres'));
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
        $request->validate([
            'title' => 'required',   // laukas privalomas|galima įvesti tik raides
            'rating' => 'required|integer|max:100',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048'
        ]);


        $data = $request->all();
        $game = Game::findOrFail($id);
        if ($request->hasFile('image')) {
            @unlink(public_path('images').$game->image);
            $fileName = time().'.'.$request->image->extension(); // failo pavadinimas pvz. 1620283915.jpg
            $request->image->move(public_path('images'), $fileName); // failas bus išsaugotas kataloge ..\library\public\images
            $data['image'] = $fileName;
        }

        //$game->update($request->all());
        $game->update($data);
        return redirect('admin/games')->with('success', 'Game updated successfully.');
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
        $image_path = public_path().'/images/'.$game->image;
        unlink($image_path);
        $game->delete();
        return redirect('admin/games')->with('success', 'Game deleted successfully.');
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
}
