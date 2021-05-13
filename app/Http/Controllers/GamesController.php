<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Game;
use App\Models\Genre;
use App\Models\Review;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class GamesController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request)
    {
        $genres = Genre::pluck('title', 'id');
        $games = Game::all()->sortByDesc("rating");   // naudojam modelį Game; ši eilutė įvykdo SQL užklausą "SELECT * FROM `games`"; taip pat išrūšiuojam žaidimus pagal įvartinimus
        return view('user.games.index', compact('games', 'genres'));  // nurodom kokiame vaizde bus atvaizduojami duomenys ir perduodam duomenis (masyvą games) vaizdui
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

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
            'rating' => 'required|integer',
            'title' => 'required',
            'review' => 'required'
        ]);

       $game = Game::findOrFail($request->id);

        Review::create([
            'user_id' => Auth::id(),
            'game_id' => $game->id,
            'rating' => $request->rating,
            'title' => $request->title,
            'review' => $request->review,
        ]);

        return redirect('games/'.$game->id)->with('success', 'Review added successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {   $reviews = Review::all();
        $users = User::all();
        $game = Game::findOrFail($id);
        $auth = Auth::user();
        return view('user.games.show', compact('game', 'reviews','users','auth'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $auth = Auth::user();
        $game = Game::findOrFail($id);
        return view('user.games.form', compact('game', 'auth'));
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

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $review = Review::findOrFail($id);
        $game = $review->game_id;
        $review->delete();
        return redirect('games/'.$game)->with('success', 'Review deleted successfully.');
    }
}
