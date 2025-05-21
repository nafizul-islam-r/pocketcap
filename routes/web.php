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
    Route::resource('applications', ApplicationController::class)->only(['index', 'create', 'store', 'show']);
    Route::resource('investments', InvestmentController::class)->only(['index', 'create', 'store', 'show']);
});

Route::middleware(['auth', 'role:candidate'])->group(function () {
    Route::get('/applications/create', [ApplicationController::class, 'create'])->name('applications.create');
    Route::post('/applications/store', [ApplicationController::class, 'store'])->name('applications.store');
    Route::get('/applications', [ApplicationController::class, 'show'])->name('applications.show');
});


require __DIR__.'/auth.php';
