<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function userDashboard()
    {
        // Checking if user is logged in
        if (!(Auth::check())) {
            return redirect('login');
        }
        // Checking if user is logged in

        // Picking dashboard
        switch (Auth::user()->user_type) {
            case '1':
                return view('adminDashboard');
                break;

            case '2':
                return view('clientDashboard');
                break;

            default:
                return view('clientDashboard');
                break;
        }
        // Picking dashboard
    }
}
