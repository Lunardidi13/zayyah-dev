<?php

use App\Http\Controllers\ItemController;
use App\Http\Controllers\PageController;
use Illuminate\Support\Facades\Route;
use Symfony\Component\Routing\Route as RoutingRoute;

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

// For Laravel 5.x
// Route::get('/', 'IndexController@index');

// For Laravel 8.x
Route::get('/', [PageController::class, 'showIndex']);
Route::get('/about', [PageController::class, 'showAbout']);

Route::prefix('item')->group(function(){
    Route::get('detail/{id}', [ItemController::class, 'show']);
});

Route::get('/detail', function() {
    return view('layouts.detail');
});