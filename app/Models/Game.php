<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Casts\AsCollection;
use Illuminate\Database\Eloquent\Casts\AsStringable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Support\Facades\DB;

class Game extends Model
{
    /**
     * The attributes that aren't mass assignable.
     *
     * @var array<string>|bool
     */
    protected $fillable = ['name', 'release_date', 'description', 'game_link'];

    public function developers(): BelongsToMany
    {
        return $this->belongsToMany(Developer::class, 'game_developer', 'game_id', 'developer_id');
    }

    public function genres(): BelongsToMany
    {
        return $this->belongsToMany(Genre::class, 'game_genre', 'game_id', 'genre_id');
    }

    public function modes(): BelongsToMany
    {
        return $this->belongsToMany(Mode::class, 'game_mode', 'game_id', 'mode_id');
    }

    public function platforms(): BelongsToMany
    {
        return $this->belongsToMany(Platform::class, 'game_platform', 'game_id', 'platform_id');
    }

    // public function getDevelopersAttribute()
    // {
    //     $relation = DB::table('game_relations')->where('game_id', $this->id)->first();
    //     $developerIds = json_decode($relation->developer_ids ?? '[]', true);
    //     return DB::table('developer_game')->whereIn('id', $developerIds)->get();
    // }

    // public function getGenresAttribute()
    // {
    //     $relation = DB::table('game_relations')->where('game_id', $this->id)->first();
    //     $genreIds = json_decode($relation->genre_ids ?? '[]', true);
    //     return DB::table('genre_game')->whereIn('id', $genreIds)->get();
    // }

    // public function getModesAttribute()
    // {
    //     $relation = DB::table('game_relations')->where('game_id', $this->id)->first();
    //     $modeIds = json_decode($relation->mode_ids ?? '[]', true);
    //     return DB::table('mode_game')->whereIn('id', $modeIds)->get();
    // }

    // public function getPlatformsAttribute()
    // {
    //     $relation = DB::table('game_relations')->where('game_id', $this->id)->first();
    //     $platformIds = json_decode($relation->platform_ids ?? '[]', true);
    //     return DB::table('platform_game')->whereIn('id', $platformIds)->get();
    // }

    /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'developers' => 'array',
            'genres' => 'array',
            'modes' => 'array',
            'platforms' => 'array',
        ];
    }
}
