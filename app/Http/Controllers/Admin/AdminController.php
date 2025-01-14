<?php

// app/Http/Controllers/Admin/AdminController.php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;

class AdminController extends Controller
{
    public function dashboard()
    {
        return view('admin.dashboard');
    }

    public function users()
    {
        return view('admin.users');
    }

    public function studentAccounts() {
        return view('admin.student-accounts');
    }
    
    public function registrarAccounts() {
        return view('admin.registrar-accounts');
    }
    
    public function departmentAccounts() {
        return view('admin.department-accounts');
    }
    
}

