<?php

use App\Http\Controllers\v1\web\EventController;
use App\Http\Controllers\v1\web\HomeController;
use Illuminate\Support\Facades\Auth;
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

Route::get('/', [HomeController::class, 'index'])->name('home.index');

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    // Route::resource('home', HomeController::class);
    Route::resource('events', EventController::class);
    Route::get('logout', function () {
        auth()->guard('web')->logout();
        return redirect('/');
    });
});
