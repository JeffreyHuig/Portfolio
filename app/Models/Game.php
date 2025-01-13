<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Casts\AsCollection;
use Illuminate\Database\Eloquent\Casts\AsStringable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Game extends Model
{
    /**
     * The attributes that aren't mass assignable.
     *
     * @var array<string>|bool
     */
    protected $guarded = [];

    public function developers(): HasMany
    {
        return $this->hasMany(Developer::class)->chaperone();
    }

    public function genres(): HasMany
    {
        return $this->hasMany(Genre::class)->chaperone();
    }

    public function modes(): HasMany
    {
        return $this->hasMany(Mode::class)->chaperone();
    }

    public function platforms(): HasMany
    {
        return $this->hasMany(Platform::class)->chaperone();
    }

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
