<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Game extends Model
{
    use HasFactory;

    protected $fillable = [
        'game_name',
        'platform',
        'genre',
        'rating'
    ];

    protected $table = 'games';
}


public function up()
{
    Schema::create('games', function (Blueprint $table) {
        $table->increments('id');
        $table->string('game_name');
        $table->string('platform');
        $table->string('genre');
        $table->decimal('rating', 3, 1);
        $table->timestamps();
    });
}

