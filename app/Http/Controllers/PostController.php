<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Comment;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class PostController extends Controller
{
    public function index(){
        $forum = Post::paginate(10);
        return view('forum', \compact('forum'));
    }


    public function viewPost($id){
        $post = Post::find($id);

        return view('post',\compact('post'));
    }


    public function comment(Request $request, $id){
        if(!Auth::check()){
            session()->flash('error', 'Please login first');
            return \redirect()->back();
        }   

        $validator = Validator::make($request->all(), [
            'comment' => 'required',
        ]);

        if ($validator->fails()) {
            session()->flash('error', 'Please enter all details');
            return \redirect()->back();
        }

        $post = Post::find($id);

        $post->comments()->create([
            'user_id' => Auth::id(),
            'body' => $request->comment
        ]);

        return redirect()->back();
    }


    public function store(Request $request){

        if(!Auth::check()){
            session()->flash('error', 'Please login first');
            return \redirect()->back();
        }   

        $validator = Validator::make($request->all(), [
            'title' => 'required',
            'body' => 'required',
        ]);

        if ($validator->fails()) {
            session()->flash('error', 'Please enter all details');
            return \redirect()->back();
        }

        Post::create([
            'title' => $request->title,
            'body' => $request->body,
            'user_id' => Auth::id()
        ]);

        session()->flash('success', 'Post created');
        return redirect()->back();
    }


}
