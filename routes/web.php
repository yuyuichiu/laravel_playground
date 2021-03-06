<?php

// Don't need to worry about how it's inside work
// Extension PHP Name Resolver can help you locate these imports by right clicking the type you need
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
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

Route::get('/listings', function() {
    return view('listing', [
        'header' => 'Latest Listings',
        'listings' => [
            [
                'title' => 'Web developer',
                'description' => 'Require 15 years of experience, must be under 30 years old'
            ],
            [
                'title' => 'Pilot',
                'description' => 'Pays with exposure.'
            ],
        ]
    ]);
});

Route::get('/users/{name?}', function($name = "Guest") {
    return response("<h1>Welcome, $name</h1>")
        ->header('Content-Type', 'text/plain')
        ->header('X-Custom', 'hello header world');
})->where('name', '[A-Za-z]+'); // If regex test failed, skip this route.

Route::get('/test', function() {
    return response("<h1>Users</h1>", 200);
});

Route::get('search', function(Request $req) {
    // dd($req);
    return response("Name:$req->name || City: $req->age", 200);
});

Route::get('restaurants', function() {
    $restaurants = DB::select("SELECT * FROM restaurants join addresses on addresses.id = restaurants.address_id");
    
    return response(view('restaurants', [
        'header' => 'restaurants',
        'restaurants' => $restaurants
    ]), 200);
});

// Unlike Express, this does not necessarily need to placed in the bottom
Route::get('/', function () {
    return response(view('welcome'), 200);
});