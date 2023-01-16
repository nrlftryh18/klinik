<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PasienController;

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

Route::get('/pasien', [PasienController::class, 'index'])->name('pasien');
Route::get('/datapasien', [PasienController::class, 'index']);
Route::get('/tambahdata', [PasienController::class, 'tambahdata'])->name('tambahdata');
Route::post('/insertdata', [PasienController::class, 'insertdata'])->name('insertdata');

Route::get('/tampilkandata/{id}', [PasienController::class, 'tampilkandata'])->name('tampilkandata');
Route::post('/updatedata/{id}', [PasienController::class, 'updatedata'])->name('updatedata');

Route::get('/CekUp', [PasienController::class, 'CekUp'])->name('CekUp');
Route::get('/tambahcekup', [PasienController::class, 'tambahcekup'])->name('tambahcekup');
Route::get('/tampilkancekup/{id}', [PasienController::class, 'tampilkancekup'])->name('tampilkancekup');
Route::get('/insertdatacekup', [PasienController::class, 'insertdatacekup'])->name('insertdatacekup');
