<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        $users =[ [
            "name" => "ALICE",
            "status" => "active",
            "role" => "Admin"
        ],
        [
            "name" => "BOB",
            "status" => "inactive",
            "role" => "User"
        ],
        [
            "name" => "CHARLIE",
            "status" => "active",
            "role" => "User"
        ],
        [
            "name" => "DAVID",
            "status" => "suspended",
            "role" => "Admin"
        ],
        [
            "name" => "EVE",
            "status" => "active",
            "role" => "Admin"
        ]
        ];
        return view('user', compact('users'));
    }
}
