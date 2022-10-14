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

Route::get('/', function () {
    return view('welcome');
});
Route::get('/name', function () {
    return 'giorgi vakhvakhishvili';
});
Route::get('/age', function () {
    return '19';
});
Route::get('/hobby', function () {
    return 'gym, cars, anime, being a chad,';
    });
Route::get('/mycars', function () {
    return 'honda cr-v, jeep liberty, honda ridgline ';
});
Route::get('/carsiwant', function () {
    return 'ford mustang, Ferrari sf90, ford raptor R';
});
Route::put('/put', function () {
    return response()->json([
        'message' => 'წარმატებით დაემატა'
    ]);
});
Route::post('/post', function () {
    return response()->json([
        'message' => 'წარმატება'
    ]);
});
Route::delete('/del', function () {
    return response()->json([
        'message' => 'წარმატებით წაიშალა'
        ]);
    });