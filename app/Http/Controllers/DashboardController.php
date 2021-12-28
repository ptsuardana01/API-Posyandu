<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function index()
    {
        if (Auth::user()->hasRole('admin')) {
            return redirect('/admin/dashboard');
        } else if (Auth::user()->hasRole('kader')) {
            return redirect('/petugas-posyandu/dashboard');
        } else {
            return redirect('/user/dashboard');
        }
    }
}
