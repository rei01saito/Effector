<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EffectorController;

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

// Route::get('/', function () {
//     return view('welcome');
// });

Auth::routes();

//Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

//Effector
Route::get('/', [EffectorController::class, 'index'])->name('index');

Route::group(['middleware'=>'auth'], function() {
    Route::get('create', [EffectorController::class, 'create'])->name('create');
});

Route::post('store', [EffectorController::class, 'store'])->name('store');