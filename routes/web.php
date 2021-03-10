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

Route::redirect('/', '/contact/create');

Route::prefix('admin')->group(function () {
    Auth::routes([
        'register' => false,
        'confirm' => false,
        'verify' => false,
    ]);
    Route::get('/contact', [App\Http\Controllers\ContactController::class, 'index'])->name('contact.index');
    Route::delete('/contact/all', [App\Http\Controllers\ContactController::class, 'deleteAll'])->name('contact.delete.all');
    Route::delete('/contact/{contact}', [App\Http\Controllers\ContactController::class, 'delete'])->name('contact.delete');
    Route::put('/contact/{contact}', [App\Http\Controllers\ContactController::class, 'update'])->name('contact.update');
});

Route::get('/contact/create', [App\Http\Controllers\ContactController::class, 'create'])->name('contact.create');
Route::post('/contact/store', [App\Http\Controllers\ContactController::class, 'store'])->name('contact.store');
