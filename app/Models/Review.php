<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    use HasFactory;

    protected $table = 'reviews';
    protected $fillable = ['user_id', 'game_id', 'rating', 'title', 'review'];

    public function games()
    {
        return $this->belongsTo(Game::class)->withDefault();
    }

}
