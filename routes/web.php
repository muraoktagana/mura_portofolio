<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AdminController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
Route::get('/', [UserController::class, 'user']);

Route::get('signin', [UserController::class, 'signin'])->name('login');
Route::post('login', [UserController::class, 'auth']);

Route::get('register', [UserController::class, 'register']);
Route::post('signup', [UserController::class, 'signup']);

Route::get('admin', [AdminController::class, 'admin'])->middleware('auth');
Route::get('tambah', [AdminController::class, 'add']);
Route::post('create', [AdminController::class, 'create']);
Route::get('ubah/{id}', [AdminController::class, 'ubah']);
Route::post('update/{id}', [AdminController::class, 'update']);
Route::get('hapus/{id}', [AdminController::class, 'hapus']);


Route::get('detail', function () {
    return view('detail');
});