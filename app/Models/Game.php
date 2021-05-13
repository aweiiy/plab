<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Game extends Model
{
    use HasFactory;

    protected $table = 'games';
    protected $fillable = ['title', 'image', 'genre_id', 'rating'];

    public function genre()
    {
        return $this->belongsTo(Genre::class)->withDefault();
    }

    public function review()
    {
        return $this->hasMany(Review::class);
    }
}


