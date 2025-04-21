<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PlanetController extends Controller
{
    public function index()
    {
        $planets = [
            ["name" => "Mercury", "temperature" => 167],
            ["name" => "Venus", "temperature" => 464],
            ["name" => "Earth", "temperature" => 15],
            ["name" => "Mars", "temperature" => -65],
            ["name" => "Jupiter", "temperature" => -108],
            ["name" => "Saturn", "temperature" => -139],
            ["name" => "Uranus", "temperature" => -195],
            ["name" => "Neptune", "temperature" => -200]
        ];

        return view('planet', compact('planets'));
    }

    public function convert($unit)
    {
        $planets = [
            ["name" => "Mercury", "temperature" => 167],
            ["name" => "Venus", "temperature" => 464],
            ["name" => "Earth", "temperature" => 15],
            ["name" => "Mars", "temperature" => -65],
            ["name" => "Jupiter", "temperature" => -108],
            ["name" => "Saturn", "temperature" => -139],
            ["name" => "Uranus", "temperature" => -195],
            ["name" => "Neptune", "temperature" => -200]
        ];

        foreach ($planets as &$planet) {
            if ($unit === 'fahrenheit') {
                $planet['temperature'] = round(($planet['temperature'] * 9/5) + 32, 1);
            }
        }

        return view('planet', compact('planets', 'unit'));
    }
}