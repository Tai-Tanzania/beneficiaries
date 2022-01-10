<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CharacterController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\VideoController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\PostController;

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

Route::get('/',[HomeController::class, 'index'])->name('login');

Route::get('videos',[VideoController::class, 'index']);

Route::get('characters',[CharacterController::class,'index']);
Route::get('character/{id}', [CharacterController::class,'character']);
Route::post('character/thoughts/{id}',[CharacterController::class,'characterThoughts']);

Route::get('articles',[ArticleController::class,'index']);

Route::get('comics', function(){
    return view('comics');
});

Route::get('login', function(){
    return view('login');
});

Route::get('forum',[PostController::class,'index']);
Route::post('forum',[PostController::class,'store']);
Route::post('comment/{id}',[PostController::class,'comment']);

Route::get('register', function(){
    return view('register');
});

Route::get('post/{id}',[PostController::class,'viewPost']);

Route::post('login',[AuthController::class,'login']);
Route::post('register',[AuthController::class,'register']);

Route::middleware('auth')->group(function () {
    Route::get('dashboard',[DashboardController::class,'kidDashboard'])->name('dashboard');
    Route::get('logout',[AuthController::class,'logout']);
});
