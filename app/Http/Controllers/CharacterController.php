<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Character;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

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

    public function characterThoughts(Request $request, $id){
        if(!Auth::check()){
            session()->flash('error', 'Please login first');
            return \redirect()->back();
        }   

        $validator = Validator::make($request->all(), [
            'answer' => 'required',
        ]);

        if ($validator->fails()) {
            session()->flash('error', 'Please enter all details');
            return \redirect()->back();
        }

        $character = Character::find($id);

        $character->comments()->create([
            'user_id' => Auth::id(),
            'body' => $request->answer
        ]);

        return redirect()->back();
    }
}
