<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\API\Auth\AuthController;
use App\Http\Controllers\API\Tugas\TugasController;
use App\Http\Controllers\API\ProgramController;
use App\Http\Controllers\API\SiswaController;


/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::get('siswa',[SiswaController::class,'index']);
Route::post('siswa/store',[SiswaController::class,'store']);
Route::get('siswa/show/{id}',[SiswaController::class,'show']);
Route::post('siswa/update/{id}',[SiswaController::class,'update']);
Route::get('siswa/destroy/{id}',[SiswaController::class,'destroy']);

Route::resource('programs', App\Http\Controllers\API\ProgramController::class);
// Route::post('program/update/{id}',[ProgramController::class,'update']);

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

//route::post('register','API\Auth\AuthController@register');
//route::post('login','Api\Auth\AuthController@login');
route::post('register',[AuthController::class,'register']);
route::post('login',[AuthController::class,'login']);

Route::prefix('users')->group(function(){
    Route::get('get_all', [TugasController::class,'getAll']);
    Route::post('tambah', [TugasController::class,'store']);
    Route::post('update', [TugasController::class,'update']);
    Route::post('hapus', [TugasController::class,'destroy']);
});