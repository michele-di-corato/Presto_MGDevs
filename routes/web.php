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
// Rotte generiche
Route::get('/', [PublicController::class, 'home'])->name('home');
Route::post('/language/{lang}', [PublicController::class, 'setLanguage'])->name('set_language_locale');
// Rotte degli annunci
Route::get('/announce/create', [AnnounceController::class, 'create'])->name('create_announce');
Route::get('/announce/index', [AnnounceController::class, 'index'])->name('show_announces');
Route::get('/announce/category/{category}', [PublicController::class, 'categoryShow'])->name('show_per_category');
Route::get('/announce/detail/{id}', [PublicController::class, 'showDetail'])->name('announce_detail');
Route::get('/announce/edit/{announce}', [AnnounceController::class, 'edit'])->name('edit_announce');
Route::get('/user_profile', [PublicController::class, 'profile'])->name('show_profile');
// Rotte dei revisori
Route::get('/revisor/home', [RevisorController::class, 'index'])->name('revisor_index');
Route::patch('/revisor/announce/accept/{announce}', [RevisorController::class, 'accept'])->name('accept_announce');
Route::patch('/revisor/announce/reject/{announce}', [RevisorController::class, 'reject'])->name('reject_announce');
Route::patch('/revisor/announce/undo', [RevisorController::class, 'undoAction'])->name('undo_announce');
Route::patch('/revisor/announce/undo/{announce}', [RevisorController::class, 'undoRevision'])->name('undo_revision');
Route::get('/revisor/form', [RevisorController::class, 'formRevisor'])->name('form_revisor');
Route::get('/revisor/request', [RevisorController::class, 'becomeRevisor'])->middleware('auth')->name('become_revisor');
Route::get('/revisor/make/{user}', [RevisorController::class, 'makeRevisor'])->name('make_revisor');
Route::get('/revisor/log', [RevisorController::class, 'logRevisions'])->name('log_revisions');
// Rotte della ricerca
Route::get('/research/announce', [PublicController::class, 'searchAnnounce'])->name('search_announce');
