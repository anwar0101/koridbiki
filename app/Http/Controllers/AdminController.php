<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    /**
     *  Admin dashboard
     */
    public function dashboard()
    {
        return view('admin.dashboard');
    }
}
