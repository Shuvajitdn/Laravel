<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cookie;

class CookieFormController extends Controller
{
    // Set multiple cookies: name, email, country
    public function setCookies()
    {
        Cookie::queue('name', 'Shuvajit', 60); // expires in 60 minutes
        Cookie::queue('email', 'shuvajit@gmail.com', 60);
        Cookie::queue('country', 'Bangladesh', 60);

        return response('Cookies for name, email, and country have been set.');
    }

    // Get cookies
    public function getCookies()
    {
        $name = Cookie::get('name');
        $email = Cookie::get('email');
        $country = Cookie::get('country');

        return response()->json([
            'name' => $name,
            'email' => $email,
            'country' => $country,
        ]);
    }
}


