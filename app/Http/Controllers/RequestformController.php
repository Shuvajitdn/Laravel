<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RequestformController extends Controller
{
    public function index(Request $request)
    {
        $name = $request->input('name');
        $username = $request->input('username');
        $password = $request->input('password');

        echo "The Name is: $name<br>";
        echo "The Username is: $username<br>";
        echo "The Password is: $password<br>";

        /*has method*/
        // echo $request->has('name');

        /*has method with if condition*/
        // if ($request->has('name')) {
        //     echo "The Name is: $name<br>";
        // } else {
        //     echo "The Name is not available<br>";
        // }

        /*hasAny method*/
        // echo $request->hasAny('name', 'username');
        /*hasAny method with if condition*/
        // if ($request->hasAny('name', 'username')) {
        //     echo "The Name is: $name<br>";
        //     echo "The Username is: $username<br>";
        // }

        /*filled method*/
        // echo $request->filled('name');

        /*filled method with if condition*/
        // if ($request->filled('name')) {
        //     echo "The Name is: $name<br>";
        // } else {
        //     echo "The Name is not available<br>";
        // }

        /*anyFilled method*/
        // echo $request->anyFilled('name', 'username');

        /*anyFilled method with if condition*/
        // if ($request->anyFilled('name', 'username')) {
        //     echo "The Name is: $name<br>";
        // }

        /*isNotfilled method*/
        // echo $request->isNotfilled('name');

        /*isNotfilled method with if condition*/
        // if ($request->isNotfilled('name')) {
        //     echo "The Name is not available<br>";
        // } else {
        //     echo "The Name is: $name<br>";
        // }

        /*missing method*/
        // echo $request->missing('name');

        /*missing method with if condition*/
        // if ($request->missing('name')) {
        //     echo "The Name is missing<br>";
        // } else {
        //     echo "The Name is not missing<br>";
        // }

        /*whenfilled method*/
        // $request->whenFilled('name', function ($name) {
        //     echo "The Name is: $name<br>";
        // });

        /*whenHas method*/
        // $request->whenHas('name', function ($name) {
        //     echo "The Name is: $name<br>";
        // });


        /*whenMissing method*/
        $request->whenMissing('name', function () {
            echo "The Name is missing<br>";
        });
    }
}
