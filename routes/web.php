<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\ShowController;

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
Route::get('/references', function () {
    return view('references');
});


Route::resource('career', ProjectController::class);
Route::resource('contacts', ContactController::class);
Route::resource('show', ShowController::class);


// Route::resource('projects', 'ProjectController');

