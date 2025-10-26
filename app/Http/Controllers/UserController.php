<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function userDashboard()
    {

        if(!(Auth::check()))
        {
            return redirect('login');
        }

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
    }
}
