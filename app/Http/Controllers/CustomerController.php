<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CustomerController extends Controller
{
    public function index()
    {
        $customers = ['customer1', 'customer2', 'customer3', 'customer4'];
        return view('customers', compact('customers'));
    }
}
