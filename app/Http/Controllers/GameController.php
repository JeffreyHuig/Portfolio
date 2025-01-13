<?php

namespace App\Http\Controllers;

use App\Models\Game;
use Illuminate\Http\Request;

class GameController extends Controller
{
    public function index(Game $game)
    {
        $games = Game::all();
        return view('games.index', [
            'games' => $games
        ]);
    }
}
