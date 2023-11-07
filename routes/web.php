<?php

use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\kelolamenuController;
use App\Http\Controllers\menuController;
use App\Http\Controllers\globalController;

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
    return view('auth.login');
});
Route::get('/ji', function () {
    return view('dashboard');
});

Route::get('/dashboard', function () {return view('blank');})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/tambah_menu', [globalController::class, 'index']);

    Route::get('/kelolamenu', [kelolamenuController::class, 'create'])->name('input_menu');
            Route::post('/tambah_menu', [kelolamenuController::class, 'store'])->name('tambah_menu');

    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::get('/kelolamenu', [kelolamenuController::class, 'index'])->name('kelolamenu');
});

require __DIR__.'/auth.php';
