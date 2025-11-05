<?php

namespace App\Http\Controllers\Admin\Modules;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ClientManagementController extends Controller
{
    public function Index()
    {
        return view('admin/clientManagement/dashboard');
    }
}
