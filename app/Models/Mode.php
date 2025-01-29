<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Mode extends Model
{
    public function games(): BelongsToMany
    {
        // return $this->belongsToMany(Game::class, 'game_mode', 'mode_id', 'game_id');
        return $this->belongsToMany(Game::class, 'game_mode');
    }
}
