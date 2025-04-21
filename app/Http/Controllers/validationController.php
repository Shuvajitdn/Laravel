<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class validationController extends Controller
{
    public function validation(Request $request)  
    {
        $request->validate([
            'name' => ['required', 'min:2', 'max:255'], 
            'email' => ['required', 'email'],
            'password' => ['required', 'min:6', 'max:12'],
        ]);

        $name = $request->input('name');
        $email = $request->input('email');
        $password = $request->input('password');

        echo "Name: $name <br> Email: $email <br> Password: $password";
    }
}
