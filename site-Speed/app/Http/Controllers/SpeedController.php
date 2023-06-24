<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SpeedController extends Controller
{
    public function milesphToKilometersph(Request $request)
    {
        $milesph = $request->input('milesph');
        $kilometersph = $milesph * 1.60934;

        return response()->json(['kilometersph' => $kilometersph]);
    }

     public function kilometersphtoMilesph(Request $request)
    {
        $kilometersph = $request->input('kilometersph');
        $milesph = $kilometersph * 0.621371;

        return response()->json(['milesph' => $milesph]);
    }
}