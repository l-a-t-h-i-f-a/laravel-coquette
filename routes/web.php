<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\BonekaController;
use App\Http\Controllers\DataController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\JenisController;
use Barryvdh\DomPDF\Facade as PDF;

 
Route::get('/', function () {
    return view('landpage');
});

Route::get('/dashboard', function () {
    return view('dashboard');
Route::get('/produk', function () {
        return view('produk');});
})->middleware(['auth', 'verified'])->name('dashboard');


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});
Route::middleware(['auth', 'admin'])->group(function () {
 
    Route::get('admin/dashboard', [BonekaController::class, 'index']);
    Route::post('admin/dashboard/bonekasStore', [BonekaController::class, 'store']);
    Route::get('admin/dashboard/bonekasEdit/{id}', [BonekaController::class, 'edit']);
    Route::get('admin/dashboard/bonekasDelete/{id}', [BonekaController::class, 'destroy']);
    Route::get('admin/template', [DataController::class, 'index'])->name('index');
    Route::get('admin/user', [UserController::class, 'index'])->name('index');
    Route::get('admin/jenis', [JenisController::class, 'index'])->name('index');
    Route::get('/export-pdf', [BonekaController::class, 'exportPDF'])->name('export.pdf');

});
Route::get('/produk', [HomeController::class, 'index'])->name('produk');


require __DIR__.'/auth.php';

