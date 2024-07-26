<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\BerandaController;
use App\Http\Controllers\SuperAdmin\MainController;
use App\Http\Controllers\SuperAdmin\PetaniController;
use App\Http\Controllers\SuperAdmin\TanamanController;
use App\Http\Controllers\SuperAdmin\LokasiController;
use App\Http\Controllers\SuperAdmin\HamaController;
use App\Http\Controllers\SuperAdmin\PupukController;
use App\Http\Controllers\SubMenu\AboutController;
use App\Http\Controllers\SubMenu\JenisHamaController;
use App\Http\Controllers\SubMenu\JenisPupukController;
use App\Http\Controllers\SubMenu\JenisLokasiController;
use App\Http\Controllers\SubMenu\JenisTanamanController;
use App\Http\Controllers\SubMenu\ContactController;



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
})->name('beranda');


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::group(['middleware'=>'role:superadmin'],function () {
    // SUPERADMIN
    Route::get('/superadmin/main', [MainController::class, 'main'])->name('superadmin.main');
    
    // PETANI
    Route::get('/superadmin/petani', [PetaniController::class, 'main'])->name('superadmin.petani');
    // create petani
    Route::get('/superadmin/petani/create', [PetaniController::class, 'create'])->name('superadmin.petani.create');
    Route::post('/superadmin/petani/store', [PetaniController::class, 'store'])->name('superadmin.petani.store');
    //edit petani
    Route::get('/superadmin/petani/edit/{kodeunik_petani}', [PetaniController::class, 'edit'])->name('superadmin.petani.edit');
    //proses update petani
    Route::patch('/superadmin/petani/edit/{kodeunik_petani}', [PetaniController::class, 'update'])->name('superadmin.petani.edit.update');
    //hapus foto petani
    Route::patch('/superadmin/petani/edit/hapus-foto/{kodeunik_petani}', [PetaniController::class, 'hapusfotopetani'])->name('superadmin.petani.edit.hapus-foto');
    //upload foto petani
    Route::patch('/superadmin/petani/edit/upload-foto/{kodeunik_petani}', [PetaniController::class, 'upfotopetani'])->name('superadmin.petani.edit.upload-foto');
    //proses menghapus petani
    Route::delete('/superadmin/petani/{kodeunik_petani}', [PetaniController::class, 'delete'])->name('superadmin.petani.delete');

    // HAMA
    Route::get('/superadmin/hama', [HamaController::class, 'main'])->name('superadmin.hama');
    Route::get('/superadmin/hama/create', [HamaController::class, 'create'])->name('superadmin.hama.create');
    // create hama
    Route::get('/superadmin/hama/create', [HamaController::class, 'create'])->name('superadmin.hama.create');
    Route::post('/superadmin/hama/store', [HamaController::class, 'store'])->name('superadmin.hama.store');
    //edit hama
    Route::get('/superadmin/hama/edit/{kodeunik_hama}', [HamaController::class, 'edit'])->name('superadmin.hama.edit');
    //proses update hama
    Route::patch('/superadmin/hama/edit/{kodeunik_hama}', [HamaController::class, 'update'])->name('superadmin.hama.edit.update');
    //proses menghapus hama
    Route::delete('/superadmin/hama/{kodeunik_hama}', [HamaController::class, 'delete'])->name('superadmin.hama.delete');
    
});

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


// ABOUT
Route::get('/about', [AboutController::class, 'about'])->name('about');


// JENIS HAMA
Route::get('/Jenishama', [JenisHamaController::class, 'jenisHama'])->name('jenishama');


// JENIS PUPUK
Route::get('/Jenispupuk', [JenisPupukController::class, 'jenisPupuk'])->name('jenispupuk');

// JENIS LOKASI
Route::get('/Jenislokasi', [JenisLokasiController::class, 'jenisLokasi'])->name('jenislokasi');

// JENIS TANAMAN
Route::get('/Jenistanaman', [JenisTanamanController::class, 'jenisTanaman'])->name('jenistanaman');

// CONTACT
Route::get('/contact', [ContactController::class, 'contact'])->name('contact');

require __DIR__.'/auth.php';
