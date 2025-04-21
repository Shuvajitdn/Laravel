<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RequestController extends Controller
{
    public function index(Request $request)
    {
        //path() method
        $path = $request->path();
        echo "The path is $path<br>";

        //is() method
        $is = $request->is('request/*'); 
        echo "The return value is $is";   

        if($request -> is('admin/*')){
            echo "<br>It's starts with the given prefix";
        } else {
            echo "<br>It doesn't starts with the given prefix";
        }

        //isMethod() method
        $isMethod = $request->isMethod('GET');
        echo "<br>The return value is $isMethod";

        //method() method
        $method = $request->method();
        echo "<br>The method is $method";

        //url() method
        $url = $request->url();
        echo "<br>The url is $url";

        //fullurl() method
        $fullurl = $request->fullurl();
        echo "<br>The full url is $fullurl";

        //routeIs() method
        $routeIs = $request->routeIs('request');
        echo "<br>The return value is $routeIs";

        //query() method
        $queryname = $request->query('name', 'Shuvajit');
        echo "<br>The value is $queryname";
    }
}
