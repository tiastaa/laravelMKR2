<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Maker extends Model
{
    use HasFactory;
    protected $fillable = [
        'brand',
        'country',
        'number',
        'email',
    ];

    public function maker(): HasMany
    {
        return $this->hasMany(Maker::class);
    }
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}
