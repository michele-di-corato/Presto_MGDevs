<?php

use App\Http\Controllers\AnnounceController;
use App\Http\Controllers\PublicController;
use App\Http\Controllers\RevisorController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', [PublicController::class, 'home'])->name('home');
Route::get('/announce/create', [AnnounceController::class, 'create'])->name('create_announce');
Route::get('/announce/index', [AnnounceController::class, 'index'])->name('show_announces');
Route::get('/announce/category/{category}', [PublicController::class, 'categoryShow'])->name('show_per_category');
Route::get('/announce/detail/{id}', [PublicController::class, 'showDetail'])->name('announce_detail');
Route::get('/announce/edit/{announce}', [AnnounceController::class, 'edit'])->name('edit_announce');
Route::get('/user_profile', [PublicController::class, 'profile'])->name('show_profile');

Route::get('/revisor/home', [RevisorController::class, 'index'])->name('revisor_index');
