<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CharacterVideo extends Model
{
    use HasFactory;

    protected $table = 'character_video';

    protected $fillable = [
        'character_id', 'video_id'
    ];
}
