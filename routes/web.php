<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CharacterController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\VideoController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/',[HomeController::class, 'index']);

Route::get('videos',[VideoController::class, 'index']);

Route::get('characters',[CharacterController::class,'index']);

Route::get('character/{id}', [CharacterController::class,'character']);

Route::get('articles',[ArticleController::class,'index']);

Route::get('comics', function(){
    return view('comics');
});
