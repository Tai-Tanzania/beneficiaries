<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Article;
use App\Models\Video;

class HomeController extends Controller
{
    public function index(){
        $articles = Article::all();
        $featured = Video::where('featured', true)->first();
        $videos = Video::where('featured', false)->take(3)->get();

        return view('welcome', compact('articles', 'featured', 'videos'));
    }
}
