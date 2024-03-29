<?php

use App\Http\Controllers\UsersController;
use App\Http\Controllers\LoginController;
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

Route::get('/', function () {
    return view('index');
});

Route::get('/users/list', [UsersController::class, 'list'])->name('usersList');
Route::get('/users/new', [UsersController::class, 'create'])->name('userCreate');
Route::get('/users/edit/{id}', [UsersController::class, 'edit'])->name('userEdit');
Route::get('/users/delete/{id}', [UsersController::class, 'delete'])->name('userDelete');
Route::get('/users/login', [LoginController::class, 'index'])->name('userLogin');


Route::post('/main/checklogin', [LoginController::class, 'checkLogin'])->name('checkLogin');
Route::post('/users/new', [UsersController::class, 'store'])->name('userRegister');
Route::put('/users/edit/{id}', [UsersController::class, 'update'])->name('userUpdate');
Route::delete('/users/delete/{id}', [UsersController::class, 'destroy'])->name('userDestroy');