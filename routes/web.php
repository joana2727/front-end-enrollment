<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Admin\AdminController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/admin-dashboard', function () {
    return view('admin.dashboard');
});

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});


Route::prefix('admin')->group(function () {
    Route::get('/dashboard', [AdminController::class, 'dashboard'])->name('admin.dashboard');
    Route::get('/users', [AdminController::class, 'users'])->name('admin.users');
});

Route::get('/registar-dashboard', function () {
    return view('registar.registar-dashboard');
})->name('registar.dashboard');


Route::prefix('department')->group(function () {
    Route::get('/dashboard', function () {
        return view('department.dep-dashboard');
    })->name('department.dashboard');

    Route::get('/instructors', function () {
        return view('department.instructors');
    })->name('department.instructors');

    Route::get('/courses', function () {
        return view('department.courses');
    })->name('department.courses');
});



require __DIR__.'/auth.php';
