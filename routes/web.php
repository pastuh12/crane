<?php

use App\Http\Controllers\CraneController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ServicesController;
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




Route::get('/', [HomeController::class, 'getIndex'])->name('home');

Route::get('/about', function() {
    return view('content.about');
})->name('about');



Route::get('/cranes', [CraneController::class, 'getAllCranes'])->name('cranes');


Route::get('/crane/{crane?}', [CraneController::class, 'getCrane'])->name('getCrane');

Route::get('/servises/{servise}', [ServiceController::class, 'getService'])->name('getService');
