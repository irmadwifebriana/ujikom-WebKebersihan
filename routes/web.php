<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\backend\UserController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\backend\ProfileController;
use App\Http\Controllers\backend\KategoriController;
use App\Http\Controllers\backend\LingkupPekerjaanController;
use App\Http\Controllers\backend\FilmController;
use App\Http\Controllers\backend\BahanController;
use App\Http\Controllers\backend\BahanMasukController;
use App\Http\Controllers\backend\BahanKeluarController;
use App\Http\Controllers\backend\BahanPesanController;
use App\Http\Controllers\backend\BahanStokController;
use App\Http\Controllers\backend\AlatController;
use App\Http\Controllers\backend\AlatPinjamController;
use App\Http\Controllers\backend\AlatPesanController;
use App\Http\Controllers\backend\AlatItemController;
use App\Http\Controllers\backend\RuangLingkupController;
use App\Http\Controllers\backend\BagianController;
use App\Http\Controllers\backend\PenugasanController;
use App\Models\Penugasan;

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
    return view('admin.user.login');
})->name('login');

Route::get('dashboard', function () {
    return view('admin.index');
})->name('dashboard');

Route::controller(UserController::class)->group(function () {
    Route::get('register', 'register')->name('register');
    Route::post('register', 'registerSimpan')->name('register.simpan');

    Route::get('login', 'login')->name('login');
    Route::post('login', 'loginAksi')->name('login.aksi');

    Route::get('logout', 'logout')->name('logout');
});

Route::prefix('profile')->group(function () {
    Route::get('/view', [ProfileController::class, 'ProfileView'])->name('profile.view');
});

Route::prefix('lingkup_pekerjaans')->group(function () {
    Route::get('/view', [LingkupPekerjaanController::class, 'LingkupPekerjaanView'])->name('Lingkup.view');
    // Route::get('/add', [FilmController::class,'FilmAdd'])->name('film.add');
    // Route::post('/store', [FilmController::class,'FilmStore'])->name('film.store');
    // Route::get('/edit/{id}', [FilmController::class,'FilmEdit'])->name('film.edit');
    // Route::post('/update/{id}', [FilmController::class,'FilmUpdate'])->name('Film.update');

});

Route::prefix('ruanglingkup')->group(function () {
    Route::get('/view', [RuangLingkupController::class, 'index'])->name('Lingkup_view');
    Route::get('/add', [RuangLingkupController::class, 'createRuangLingkup'])->name('RuangLingkup_add_view');
    Route::post('/store', [RuangLingkupController::class, 'storeRuangLingkup'])->name('createRuangLingkup.store');
    Route::get('/edit/{id}', [RuangLingkupController::class, 'editRuangLingkup'])->name('RuangLingkup.edit');
    Route::post('/update/{id}', [RuangLingkupController::class, 'updateRuangLingkup'])->name('RuangLingkup.update');
    Route::get('/delete/{id}', [RuangLingkupController::class, 'deleteRuangLingkup'])->name('RuangLingkup.delete');
});

Route::prefix('bagian')->group(function () {
    Route::get('/view', [BagianController::class, 'index'])->name('Bagian_view');
    Route::get('/add', [BagianController::class, 'createBagian'])->name('Bagian_add_view');
    Route::post('/store', [BagianController::class, 'storeBagian'])->name('Bagian.store');
    Route::get('/edit/{id}', [BagianController::class, 'editBagian'])->name('Bagian.edit');
    Route::post('/update/{id}', [BagianController::class, 'updateBagian'])->name('Bagian.update');
    Route::get('/delete/{id}', [BagianController::class, 'deleteBagian'])->name('Bagian.delete');
});

Route::prefix('penugasan')->group(function () {
    Route::get('/view', [PenugasanController::class, 'index'])->name('Penugasan_view');
    Route::get('/add', [PenugasanController::class, 'createPenugasan'])->name('Penugasan_add_view');
    Route::post('/store', [PenugasanController::class, 'storePenugasan'])->name('Penugasan.store');
    Route::get('/delete/{id}', [PenugasanController::class, 'deletePenugasan'])->name('Penugasan.delete');
    Route::get('/edit/{id}', [PenugasanController::class, 'editPenugasan'])->name('Penugasan.edit');
    Route::post('/update/{id}', [PenugasanController::class, 'updatePenugasan'])->name('Penugasan.update');
});
