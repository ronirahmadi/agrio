<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\BerandaController;
use App\Http\Controllers\SuperAdmin\MainController;
use App\Http\Controllers\SuperAdmin\PetaniController;
use App\Http\Controllers\SuperAdmin\TanamanController;
use App\Http\Controllers\SuperAdmin\LahanController;
use App\Http\Controllers\SuperAdmin\HamaController;
use App\Http\Controllers\SuperAdmin\PupukController;
use App\Http\Controllers\SubMenu\AboutController;
use App\Http\Controllers\SubMenu\JenisHamaController;
use App\Http\Controllers\SubMenu\JenisPupukController;
use App\Http\Controllers\SubMenu\JenisLahanController;
use App\Http\Controllers\SubMenu\JenisTanamanController;
use App\Http\Controllers\SubMenu\ContactController;
use App\Http\Controllers\Admin\DashboardAdminController;
use App\Http\Controllers\Admin\LaporanController;
use App\Http\Controllers\Admin\ListLahanController;




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

    //Tanaman
    Route::get('/superadmin/tanaman', [TanamanController::class, 'main'])->name('superadmin.tanaman');
    // create tanaman
    Route::get('/superadmin/tanaman/create', [TanamanController::class, 'create'])->name('superadmin.tanaman.create');
    Route::post('/superadmin/tanaman/store', [TanamanController::class, 'store'])->name('superadmin.tanaman.store');
    //edit tanaman
    Route::get('/superadmin/tanaman/edit/{kodeunik_tanaman}', [TanamanController::class, 'edit'])->name('superadmin.tanaman.edit');
    //proses update tanaman
    Route::patch('/superadmin/tanaman/edit/{kodeunik_tanaman}', [TanamanController::class, 'update'])->name('superadmin.tanaman.edit.update');
    //hapus foto tanaman
    Route::patch('/superadmin/tanaman/edit/hapus-foto/{kodeunik_tanaman}', [TanamanController::class, 'hapusfototanaman'])->name('superadmin.tanaman.edit.hapus-foto');
    //upload foto tanaman
    Route::patch('/superadmin/tanaman/edit/upload-foto/{kodeunik_tanaman}', [TanamanController::class, 'upfototanaman'])->name('superadmin.tanaman.edit.upload-foto');
    //proses menghapus tanaman
    Route::delete('/superadmin/tanaman/{kodeunik_tanaman}', [TanamanController::class, 'delete'])->name('superadmin.tanaman.delete');

    //Pupuk
    Route::get('/superadmin/pupuk', [PupukController::class, 'main'])->name('superadmin.pupuk');
    // create pupuk
    Route::get('/superadmin/pupuk/create', [PupukController::class, 'create'])->name('superadmin.pupuk.create');
    Route::post('/superadmin/pupuk/store', [PupukController::class, 'store'])->name('superadmin.pupuk.store');
    //edit pupuk
    Route::get('/superadmin/pupuk/edit/{kodeunik_pupuk}', [PupukController::class, 'edit'])->name('superadmin.pupuk.edit');
    //proses update pupuk
    Route::patch('/superadmin/pupuk/edit/{kodeunik_pupuk}', [PupukController::class, 'update'])->name('superadmin.pupuk.edit.update');
    //hapus foto pupuk
    Route::patch('/superadmin/pupuk/edit/hapus-foto/{kodeunik_pupuk}', [PupukController::class, 'hapusfotopupuk'])->name('superadmin.pupuk.edit.hapus-foto');
    //upload foto pupuk
    Route::patch('/superadmin/pupuk/edit/upload-foto/{kodeunik_pupuk}', [PupukController::class, 'upfotopupuk'])->name('superadmin.pupuk.edit.upload-foto');
    //proses menghapus pupuk
    Route::delete('/superadmin/pupuk/{kodeunik_pupuk}', [PupukController::class, 'delete'])->name('superadmin.pupuk.delete');

    //LAHAN
    Route::get('/superadmin/lahan', [LahanController::class, 'main'])->name('superadmin.lahan');
    //create lahan
    Route::get('/superadmin/lahan/create', [LahanController::class, 'create'])->name('superadmin.lahan.create');
    Route::get('/superadmin/lahan/create/getkota/{id}',[LahanController::class, 'getKota']);
    Route::get('/superadmin/lahan/create/getkec/{id}',[LahanController::class, 'getKec']);
    Route::get('/superadmin/lahan/create/getdes/{id}',[LahanController::class, 'getDes']);    
    Route::post('/superadmin/lahan/store', [LahanController::class, 'store'])->name('superadmin.lahan.store');
    
});



// ADMIN
Route::get('/admin/main', [DashboardAdminController::class, 'main'])->name('admin.main');

// LAPORAN
Route::get('/admin/laporan', [LaporanController::class, 'laporan'])->name('admin.laporan');

// LIST LAHAN
Route::get('/admin/listLahan', [ListLahanController::class, 'listLahan'])->name('admin.list-lahan');



// TANAMAN
Route::get('/superadmin/tanaman', [TanamanController::class, 'main'])->name('superadmin.tanaman');
Route::get('/superadmin/tanaman/create', [TanamanController::class, 'create'])->name('superadmin.tanaman.create');

// LAHAN
Route::get('/superadmin/lahan', [LahanController::class, 'main'])->name('superadmin.lahan');
Route::get('/superadmin/lahan/create', [LahanController::class, 'create'])->name('superadmin.lahan.create');

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
Route::get('/Jenislahan', [JenisLahanController::class, 'jenisLahan'])->name('jenislahan');

// JENIS TANAMAN
Route::get('/Jenistanaman', [JenisTanamanController::class, 'jenisTanaman'])->name('jenistanaman');

// CONTACT
Route::get('/contact', [ContactController::class, 'contact'])->name('contact');

require __DIR__.'/auth.php';
