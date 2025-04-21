<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Firstcontroller extends Controller
{
    public function index()
    {
        return "This is my first controller";
    }
    public function index1()
    {
        $name= "Ashish";
        return "The name is $name";
    }
    public function index2($name)
    {
        return "The name is $name";
    }

    public function index3($name , $score)
    {
    return view('test',['name' => $name, 'score' => $score]);
    }
}
