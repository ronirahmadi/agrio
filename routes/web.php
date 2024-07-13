<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\BerandaController;
use App\Http\Controllers\SuperAdmin\MainController;
use App\Http\Controllers\SuperAdmin\PetaniController;
use App\Http\Controllers\SuperAdmin\TanamanController;
use App\Http\Controllers\SuperAdmin\LokasiController;
use App\Http\Controllers\SuperAdmin\HamaController;
use App\Http\Controllers\SuperAdmin\PupukController;

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

Route::get('/', function () {
    return view('beranda');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

// BERANDA
Route::get('/beranda', [BerandaController::class, 'beranda'])->name('beranda');


// SUPERADMIN
Route::get('/superadmin/main', [MainController::class, 'main'])->name('superadmin.main');

// PETANI
Route::get('/superadmin/petani', [PetaniController::class, 'main'])->name('superadmin.petani');
Route::get('/superadmin/petani/create', [PetaniController::class, 'create'])->name('superadmin.petani.create');

// TANAMAN
Route::get('/superadmin/tanaman', [TanamanController::class, 'main'])->name('superadmin.tanaman');
Route::get('/superadmin/tanaman/create', [TanamanController::class, 'create'])->name('superadmin.tanaman.create');

// LOKASI
Route::get('/superadmin/lokasi', [LokasiController::class, 'main'])->name('superadmin.lokasi');
Route::get('/superadmin/lokasi/create', [LokasiController::class, 'create'])->name('superadmin.lokasi.create');

// HAMA
Route::get('/superadmin/hama', [HamaController::class, 'main'])->name('superadmin.hama');
Route::get('/superadmin/hama/create', [HamaController::class, 'create'])->name('superadmin.hama.create');

// PUPUK
Route::get('/superadmin/pupuk', [PupukController::class, 'main'])->name('superadmin.pupuk');
Route::get('/superadmin/pupuk/create', [PupukController::class, 'create'])->name('superadmin.pupuk.create');

require __DIR__.'/auth.php';
