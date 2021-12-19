<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Character;

class CharacterController extends Controller
{
    public function index(){
        $characters = Character::get();
        return view('characters', \compact('characters'));
    }

    public function character($id){
        $character = Character::where('id',$id)->with('videos')->first();
        return view('single-character', \compact('character'));
    }
}
