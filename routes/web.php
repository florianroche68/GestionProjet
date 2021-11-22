<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\EntreprisesController;
use App\Http\Controllers\StageController;
use App\Http\Controllers\ProfilController;


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
    return view('menu');
});

Route::resource('entreprises', EntreprisesController::class);

Route::resource('stage', StageController::class);

Route::resource('profil', ProfilController::class);
