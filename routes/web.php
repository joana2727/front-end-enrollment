<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\Admin\AdminController;



Route::post('/update-student-details', [StudentController::class, 'updateDetails'])->name('updateStudentDetails');

Route::get('/', function () {
    return view('welcome');
});

// routes/web.php

// Ensure the route points to the correct controller action
Route::get('/students/status', [StudentController::class, 'status'])->name('students.status');


// Route for the dashboard
Route::get('/student-dashboard', function () {
    return view('student.student-dashboard');
})->name('student.dashboard');

// Route for student information
Route::get('/student-information', function () {
    return view('student.student-information');
})->name('student.information');

// Route for student schedule
Route::get('/student-status', function () {
    return view('student.student-status');
})->name('student.status');

// Route for logout (example logout route)
Route::get('/logout', function () {
    // Add your logout logic here
    return redirect('/login'); // Redirect to login page after logout
})->name('logout');




Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');



// Admin Dashboard
Route::get('/admin-dashboard', function () {
    return view('admin.dashboard');
})->name('admin.dashboard');

// Admin Users
Route::get('/admin-users', function () {
    return view('admin.users');
})->name('admin.users');

// Student Accounts
Route::get('/student-accounts', function () {
    return view('admin.student-accounts');
})->name('student.accounts');

// Registrar Accounts
Route::get('/registrar-accounts', function () {
    return view('admin.registrar-accounts');
})->name('registrar.accounts');

// Department Accounts
Route::get('/department-accounts', function () {
    return view('admin.department-accounts');
})->name('department.accounts');

// Logout
Route::post('/logout', function () {
    // Your logout logic
    return redirect('/');
})->name('logout');


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});


Route::prefix('admin')->group(function () {
    Route::get('/dashboard', [AdminController::class, 'dashboard'])->name('admin.dashboard');
    Route::get('/users', [AdminController::class, 'users'])->name('admin.users');
     // Student Accounts
     Route::get('/student-accounts', [AdminController::class, 'studentAccounts'])->name('student.accounts');

     // Registrar Accounts
     Route::get('/registrar-accounts', [AdminController::class, 'registrarAccounts'])->name('registrar.accounts');
 
     // Department Accounts
     Route::get('/department-accounts', [AdminController::class, 'departmentAccounts'])->name('department.accounts');
 });
 


Route::get('/registar-dashboard', function () {
    return view('registar.registar-dashboard'); // Ensure this matches your view file's location
})->name('registar.dashboard');

Route::get('/registar/students', function () {
    return view('registar.students'); // Ensure this matches your view file's location
})->name('registar.students');

Route::get('/registar/issue-cor', function () {
    return view('registar.issue-cor'); // Ensure this matches your view file's location
})->name('registar.issue-cor');


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
