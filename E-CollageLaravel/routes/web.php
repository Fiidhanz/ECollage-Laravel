<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Controller;
use App\Http\Controllers\penilaiancontroller;


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
Route::get('dashboard', function () {
    return view('layout/dashboard');
});


Route::get('/penilaian', [penilaiancontroller::class, 'index'])->name('penilaian');
Route::get('/penilaian/addform', [penilaiancontroller::class, 'add'])->name('addpenilaian');
Route::post('/penilaian/addform', [penilaiancontroller::class, 'insertdata'])->name('insertpenilaian');   
Route::get('/penilaian/updateform/{id}', [penilaiancontroller::class, 'readdata'])->name('readpenilaian');
Route::get('/penilaian/allform/{id}', [penilaiancontroller::class, 'alldata'])->name('allpenilaian');
Route::post('/penilaian/updateform/{id}', [penilaiancontroller::class, 'updatedata'])->name('updatepenilaian');
Route::get('/penilaian/{id}', [penilaiancontroller::class, 'deletedata'])->name('deletepenilaian');
Route::get('/pdf-penilaian', [penilaiancontroller::class, 'exportpdf'])->name('pdfpenilaian');