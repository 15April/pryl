<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function viewDashBoard(){
        return view('pages.dashboard');
    }

    public function viewAdminDashboard(){
        return view('admin.admin');
    }
}
