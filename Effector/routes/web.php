<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EffectorController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\DetailController;

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

// Users
Auth::routes();
Route::group(['middleware'=>'auth'], function() {
    Route::get('users/{id}', [UserController::class, 'show'])->name('users_show');
    Route::get('edit/{id}', [UserController::class, 'edit'])->name('user_edit');
});


// Effector
Route::get('/', [EffectorController::class, 'index'])->name('index');

Route::group(['middleware'=>'auth'], function() {
    Route::get('create', [EffectorController::class, 'create'])->name('create');
});

Route::post('store', [EffectorController::class, 'store'])->name('store');


// Details
Route::get('details/{id}', [DetailController::class, 'show'])->name('show');
Route::get('details_create/{id}', [DetailController::class, 'create'])->name('detail_create');
Route::post('details_store', [DetailController::class, 'store'])->name('detail_store');
Route::get('details_edit/{id}', [DetailController::class, 'edit'])->name('detail_edit');
