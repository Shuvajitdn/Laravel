<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class testController extends Controller
{
    public function index($name)
    {
        return "Hello $name";
    }
}
