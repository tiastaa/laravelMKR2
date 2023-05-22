<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Product extends Model
{
    use HasFactory;
    protected $fillable = [
        'title',
        'maker',
        'price',
        'data_make',
        'maker_id',
    ];
    public function maker(): BelongsTo
    {
        return $this->belongsTo(Maker::class);
    }
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}
