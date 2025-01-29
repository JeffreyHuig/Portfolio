@php
// section of gameseeder when i used game_relations table
foreach ($games as $gameData) {
    try {
    // Insert the game into the games table and retrieve its ID
    $gameId = DB::table('games')->insertGetId([
        'name' => $gameData['name'],
        'release_date' => $gameData['release_date'],
        'description' => $gameData['description'],
        'game_link' => $gameData['game_link'],
    ]);

    // Combine all relationships into arrays and store them in the game_relations table
    DB::table('game_relations')->insert([
        'game_id' => $gameId,
        'developer_ids' => json_encode($gameData['developers']), // Store developers as a JSON array
        'genre_ids' => json_encode($gameData['genres']),         // Store genres as a JSON array
        'mode_ids' => json_encode($gameData['modes']),           // Store modes as a JSON array
        'platform_ids' => json_encode($gameData['platforms']),   // Store platforms as a JSON array
    ]);

    echo "Seeded game and relations for: {$gameData['name']}\n";
    } catch (\Exception $e) {
        // Debugging error
        echo "Error seeding game: {$gameData['name']} - " . $e->getMessage() . "\n";
    }
}