<?php


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TodoController;
use App\Http\Controllers\CalEventController;
use App\Models\CalEvent;

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

Route::get('/bd-test', function () {
    try{
        echo \DB::connection()->getDatabaseName();
    }catch (\Exception $e) {
        echo 'None';
    }
});

Route::get('/db-migrate', function () { 
    Artisan::call('migrate');
    echo Artisan::output();
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

Route::get('/event-feed', function(){
    
    $events =  CalEvent::all()->get();
});

Route::resource('/todos', TodoController::class);

Route::resource('/calendar', CalEventController::class);



Route::fallback( function () {
    return view('errorPage');   
});


