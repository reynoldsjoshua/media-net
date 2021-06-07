<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Director extends Model
{
    use HasFactory;

    /**
     * @return HasMany
     */

    public function movies()
    {
        return $this->hasMany(Movie::class);
    }
}
