<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

// A simple API route that returns a JSON response
Route::get('/posts', function() {
    return response()->json([
        'posts' => [
            [
                'title'=> 'First post!',
                'content' => 'Woah'
            ],
            [
                'title'=> 'Second post!',
                'content' => 'That\'s cool'
            ]
        ]
    ]);
});


Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
