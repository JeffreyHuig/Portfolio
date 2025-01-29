<?php

namespace App\Http\Controllers;

use App\Models\Game;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class GameController extends Controller
{
    public function index(Game $game)
    {
        $games = Game::all()->map(function ($game) {
            return [
                'id' => $game->id,
                'name' => $game->name,
                'release_date' => $game->release_date,
                'description' => $game->description,
                'game_link' => $game->game_link,
                'developers' => $game->developers,
                'genres' => $game->genres,
                'modes' => $game->modes,
                'platforms' => $game->platforms,
            ];
        });

        // return response()->json($games);
        
        return view('games.index', [
            'games' => $games,
        ]);
    }

    public function show($id)
    {
        // \Illuminate\Support\Facades\DB::enableQueryLog();
        //^ Find the game by ID
        $game = Game::with(['developers', 'genres', 'modes', 'platforms'])->findOrFail($id);
        $game = json_decode($game);
        // @dd($game->toArray());
        // dd(\Illuminate\Support\Facades\DB::getQueryLog());
        //^ Format the game data, including related data
        // $gameData = [
        //     'id' => $game->id,
        //     'name' => $game->name,
        //     'release_date' => $game->release_date,
        //     'description' => $game->description,
        //     'game_link' => $game->game_link,
        //     'developers' => $game->developers, // Assuming $game->developers returns related developer models
        //     'genres' => $game->genres,         // Assuming $game->genres returns related genre models
        //     'modes' => $game->modes,           // Assuming $game->modes returns related mode models
        //     'platforms' => $game->platforms,   // Assuming $game->platforms returns related platform models
        // ];
        //^ Pass the game data to the view
        return view('games.show', compact('game'));
    }
}
