<?php

use App\Http\Controllers\CompanyProfileController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\SchoolProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/',[CompanyProfileController::class, 'index']);
//Route::put('/update/{companyProfile}', [CompanyProfileController::class, 'update']);


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::get('/landing',[SchoolProfileController::class, 'index']);

Route::get('/landing2',[SchoolProfileController::class, 'index2']);
require __DIR__.'/auth.php';
