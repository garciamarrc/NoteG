<?php

use App\Http\Controllers\NoteController;
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
    return view('welcome');
});

Route::controller(NoteController::class)->middleware(['auth', 'verified'])->group(function () {
    Route::get('/dashboard', 'index')->name('dashboard');
    Route::get('/create', 'create')->name('notes.create');
    Route::post('/create', 'store')->name('notes.store');
    Route::get('/edit/{id}', 'edit')->name('notes.edit');
    Route::get('/delete/{id}', 'destroy')->name('notes.destroy');
});

require __DIR__ . '/auth.php';
