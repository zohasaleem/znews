<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\HomeController;
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

Route::get('/', function () {
    return redirect('login');
});


Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('/login', [LoginController::class, 'login'])->name('login');
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');
Route::get('/home', [HomeController::class, 'index'])->name('home');



// =======================
//   Admin
// =======================

Route::middleware('auth')->group(function () {
    Route::get('/admin',    [AdminController::class, 'index'])->name('admin.index');
    Route::get('/admin-list',    [AdminController::class, 'getAdminData'])->name('admin.list');
    Route::get('/admin-add',    [AdminController::class, 'create'])->name('admin.add');
    Route::post('/admin-store',    [AdminController::class, 'store'])->name('admin.store');
    Route::get('/admin-edit/{id}',    [AdminController::class, 'edit'])->name('admin.edit');
    Route::post('/admin-update',    [AdminController::class, 'update'])->name('admin.update');
    Route::get('/admin-delete/{id}',    [AdminController::class, 'destroy'])->name('admin-delete');

});