<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function (App\Http\Requests\PostRequest $request) 
{
    $post = new App\Models\Post();
    $post->body  = $request->body;
    $post->save();

    return view('home');
});
