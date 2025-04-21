<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;

class CookieController extends Controller
{
    public function setcookie(){
        $response = new Response("The cookie has been set");
        $response->cookie('name', 'Shuvajit', 1)->cookie('course', 'PHP', 1);
        return $response;
    }
    public function getcookie(Request $request){
        $value1 = $request->cookie('name');
        $value2 = $request->cookie('course');
        return response()->json(['name' => $value1, 'course' => $value2]);
        // return $value1 . " " . $value2;
    }
    public function deletecookie(){
        $response = new Response("The cookie has been deleted");
        $response->withCookie(cookie()->forget('name'))->withCookie(cookie()->forget('course'));
        return $response;
    }

}
