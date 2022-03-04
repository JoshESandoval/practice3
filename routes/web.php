<?php


use Illuminate\Support\Facades\Route;

header("Access-Control-Allow-Origin: *");

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
Route::middleware(['cors'])->group(function () {
    Route::post('/herokuapp', 'Controller@herokuapp');
});

Route::get('/', function () {
    return view('welcome');
});

Route::get('/todos', function () {
    return view('todos');
});

Route::get('/calendar', function () {
    return view('calendar');
});

Route::get('/board', function () {
    return view('board');
});

Route::fallback( function () {
    return view('errorPage');   
});


