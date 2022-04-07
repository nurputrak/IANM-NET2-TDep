<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\QnaController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\LayananController;

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

//HomeController
Route::get('/', [HomeController::class, 'index']);
Route::get('/profil', [HomeController::class, 'indexProfil']);
Route::get('/perusahaan', [HomeController::class, 'indexPerusahaan']);
Route::get('/layanan', [HomeController::class, 'indexLayanan']);
Route::get('/tim', [HomeController::class, 'indexTim']);
Route::get('/qna', [HomeController::class, 'indexQnA']);
Route::get('/dashboard', [AdminController::class, 'AdminHome'])->middleware(['auth'])->name('dashboard');

//AdminController
Route::get('/admin-admin', [AdminController::class, 'AdminList'])->middleware(['auth']);
Route::get('/admin-tambah-admin', [AdminController::class, 'AdminAddAdmin'])->middleware(['auth']);
Route::get('/admin-edit-admin', [AdminController::class, 'AdminEditAdmin'])->middleware(['auth']);


Route::get('/admin-pesanan', [AdminController::class, 'AdminPesanan'])->middleware(['auth']);
Route::get('/admin-edit-pesanan', [AdminController::class, 'AdminEditPesanan'])->middleware(['auth']);

Route::get('/admin-qna', [AdminController::class, 'AdminQna'])->middleware(['auth']);
Route::get('/admin-edit-qna', [AdminController::class, 'AdminEditQna'])->middleware(['auth']);


//UserController
Route::get('/admin-user', [UserController::class, 'Show'])->middleware(['auth'])->name('listUsers');
Route::get('/admin-edit-user', [UserController::class, 'Edit'])->middleware(['auth']);
Route::get('/admin-tambah-user', [UserController::class, 'Add'])->middleware(['auth']);
Route::post('/insert-user', [UserController::class, 'InsertUser'])->middleware(['auth']);

Route::get('/tampil-update-user/{id}', [UserController::class, 'TampilData'])->middleware(['auth']);
Route::post('/save-user/{id}', [UserController::class, 'SaveUser'])->middleware(['auth']);
Route::delete('/delete-user/{id}', [UserController::class, 'DeleteUser'])->middleware(['auth']);

//LayananController
Route::get('/admin-layanan', [LayananController::class, 'Show'])->middleware(['auth'])->name('listLayanan');
Route::get('/admin-tambah-layanan', [LayananController::class, 'Add'])->middleware(['auth']);
Route::post('/insert-layanan', [LayananController::class, 'InsertLayanan'])->middleware(['auth']);
Route::get('/admin-edit-layanan', [LayananController::class, 'Edit'])->middleware(['auth']);

Route::get('/tampil-update/{id}', [LayananController::class, 'TampilData'])->middleware(['auth']);
Route::post('/save-layanan/{id}', [LayananController::class, 'SaveLayanan'])->middleware(['auth']);
Route::delete('/delete-layanan/{id}', [LayananController::class, 'DeleteLayanan'])->middleware(['auth']);

//QnAController
Route::get('/admin-qna', [QnaController::class, 'Show'])->middleware(['auth'])->name('listQna');
Route::get('/admin-edit-qna/{id}', [QnaController::class, 'TampilData'])->middleware(['auth']);
Route::post('/save-qna/{id}', [QnaController::class, 'SaveQna'])->middleware(['auth']);

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
