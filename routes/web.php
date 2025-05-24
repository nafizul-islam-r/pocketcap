<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CandidateProfileController;
use App\Http\Controllers\InvestorProfileController;
use App\Http\Controllers\ApplicationController;
use App\Http\Controllers\InvestmentController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::middleware(['auth'])->group(function () {
    Route::resource('candidate-profiles', CandidateProfileController::class);
    Route::resource('investor-profiles', InvestorProfileController::class);
});

Route::middleware(['auth'])->group(function () {
    Route::resource('applications', ApplicationController::class);
    Route::resource('investments', InvestmentController::class);
});

Route::middleware(['auth'])->group(function () {
    Route::get('/investments', [InvestmentController::class, 'index'])->name('investments.index');
    Route::get('/investments/create/{application}', [InvestmentController::class, 'create'])->name('investments.create');
    Route::post('/investments/{application}', [InvestmentController::class, 'store'])->name('investments.store');
});


require __DIR__.'/auth.php';
