<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Post extends Model
{
    use HasFactory;

    public function descriptions(): HasMany
    {
        return $this->hasMany(PostDescription::class);
    }

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

}
