<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function index()
    {
        if (Auth::user()->hasRole('admin')) {
            return redirect('/admin/dashboad');
        } else if (Auth::user()->hasRole('kader')) {
            return redirect('/kader/dashboad');
        } else {
            return redirect('/user/dashboad');
        }
    }
}
