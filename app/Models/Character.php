<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Character extends Model
{
    use HasFactory;

    protected $fillable = [
        'name', 'age', 'description', 'image'
    ];

    public function videos(){
        return $this->belongsToMany(Video::class);
    }
}
