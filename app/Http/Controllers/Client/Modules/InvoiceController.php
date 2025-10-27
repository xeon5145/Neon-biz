<?php

namespace App\Http\Controllers\Client\Modules;

use App\Http\Controllers\Controller;

class InvoiceController extends Controller
{
    public function Index()
    {
        return view('client/invoiceManagement/dashboard');
    }
}
