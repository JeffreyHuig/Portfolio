<?php

namespace App\Http\Controllers;

use App\Models\Game;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class GameController extends Controller
{
    public function index(Game $game)
    {
        $games = DB::table('games')->simplePaginate(12);
        return view('games.index', [
            'games' => $games,
        ]);
    }
}
