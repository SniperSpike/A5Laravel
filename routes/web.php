<?php

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
Route::get('/bandinfo', [App\Http\Controllers\BandInfoController::class, 'index'])->name('bandinfo');
Route::get('/bandinfo/{id}', [App\Http\Controllers\BandInfoController::class, 'getBandInfo'])->name('getBandInfo');
Route::get('/verkennen', [App\Http\Controllers\VerkennenController::class, 'index'])->name('verkennen');
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/dashboard', [App\Http\Controllers\DashboardController::class, 'index'])->name('dashboard');
Route::get('/edit', [App\Http\Controllers\EditController::class, 'index'])->name('edit');
Route::get('/edit/{id}', [App\Http\Controllers\EditController::class, 'editBand'])->name('editBand');
Route::post('/edit/submit', [App\Http\Controllers\EditController::class, 'submitForm'])->name('edit.submitForm');
Route::post('/edit/update', [App\Http\Controllers\EditController::class, 'updateForm'])->name('edit.updateForm');
Route::get('/edit/delete/{id}', [App\Http\Controllers\EditController::class, 'delete'])->name('edit.delete');
Route::get('/edit{id}', [App\Http\Controllers\EditController::class, 'index'])->name('innerJoin');
