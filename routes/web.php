<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
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
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

//User Management

Route::get('/all-user', [App\Http\Controllers\backend\UserController::class, 'AllUser'])->name('alluser');
Route::get('/add-user-index', [App\Http\Controllers\backend\UserController::class, 'AddUserIndex'])->name('AddUserIndex');
Route::post('/insert-user', [App\Http\Controllers\backend\UserController::class, 'InsertUser'])->name('InsertUser');
Route::get('/edit-user/{id}', [App\Http\Controllers\backend\UserController::class, 'EditUser'])->name('EditUser');
Route::post('/update-user/{id}', [App\Http\Controllers\backend\UserController::class, 'UpdateUser'])->name('UpdateUser');
Route::get('/delete-user/{id}', [App\Http\Controllers\backend\UserController::class, 'DeleteUser'])->name('DeleteUser');

// Route Toko
Route::get('/all-toko', [App\Http\Controllers\tokoController::class, 'index']);
Route::get('/add-toko', [App\Http\Controllers\tokoController::class, 'tambah']);
Route::post('/insert-toko', [App\Http\Controllers\tokoController::class, 'simpan']);
Route::get('/edit-toko/{id}', [App\Http\Controllers\tokoController::class, 'ubah']);
Route::post('/update-toko/{id}', [App\Http\Controllers\tokoController::class, 'update']);
Route::get('/delete-toko/{id}', [App\Http\Controllers\tokoController::class, 'hapus']);
// Toko pada wilayah indonesia
Route::get('get.kota', [App\Http\Controllers\tokoController::class, 'get_kota'])->name('get.kota');
Route::get('get.kecamatan', [App\Http\Controllers\tokoController::class, 'get_kecamatan'])->name('get.kecamatan');
Route::get('get.kabupaten', [App\Http\Controllers\tokoController::class, 'get_kabupaten'])->name('get.kabupaten');
Route::get('get.kelurahan', [App\Http\Controllers\tokoController::class, 'get_kelurahan'])->name('get.kelurahan');

// Route Lisensi
Route::get('/all-lisensi', [App\Http\Controllers\lisensiController::class, 'index']);
Route::get('/add-lisensi', [App\Http\Controllers\lisensiController::class, 'tambah']);
Route::post('/insert-lisensi', [App\Http\Controllers\lisensiController::class, 'simpan']);
Route::get('/edit-lisensi/{id}', [App\Http\Controllers\lisensiController::class, 'ubah']);
Route::post('/update-lisensi/{id}', [App\Http\Controllers\lisensiController::class, 'update']);
Route::get('/delete-lisensi/{id}', [App\Http\Controllers\lisensiController::class, 'hapus']);


// Route Aktivasi
Route::get('/all-aktivasi', [App\Http\Controllers\aktivasiController::class, 'index']);
Route::get('/add-aktivasi', [App\Http\Controllers\aktivasiController::class, 'tambah']);
Route::post('/insert-aktivasi', [App\Http\Controllers\aktivasiController::class, 'simpan']);
Route::get('/edit-aktivasi/{id}', [App\Http\Controllers\aktivasiController::class, 'ubah']);
Route::post('/update-aktivasi/{id}', [App\Http\Controllers\aktivasiController::class, 'update']);
Route::get('/delete-aktivasi/{id}', [App\Http\Controllers\aktivasiController::class, 'hapus']);

// Wilayah Indonesia
// Route::get('/provinces', [App\Http\Controllers\DependantDropdownController::class, 'provinces']);
// Route::get('/cities', [App\Http\Controllers\DependantDropdownController::class, 'cities']);
// Route::get('/districts', [App\Http\Controllers\DependentDropdownController::class, 'districts']);
// Route::get('/villages', [App\Http\Controllers\DependentDropdownController::class, 'villages']);