<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cookie;

class CookieformController1 extends Controller
{
    public function cookieform()
    {
        return view('cookieform'); 
    }

    public function submitForm(Request $request)
    {
        $name = $request->input('name');
        $email = $request->input('email');
        $phone = $request->input('phone');

    
        Cookie::queue('name', $name, 60);
        Cookie::queue('email', $email, 60);
        Cookie::queue('phone', $phone, 60);

        return redirect('/form')->with('success', 'Cookies have been set successfully!');
    }
}