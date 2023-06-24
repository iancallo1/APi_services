<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class VolumeController extends Controller
{
    public function gallonsToLiters(Request $request)
    {
        $gallons = $request->input('gallons');
        $liters = $gallons * 3.78541; // 1 gallon is approximately equal to 3.78541 liters

        return response()->json(['liters' => number_format($liters, 1)]);
    }

    public function litersToGallons(Request $request)
    {
        $liters = $request->input('liters');
        $gallons = $liters / 3.78541; // 1 gallon is approximately equal to 3.78541 liters

        return response()->json(['gallons' => number_format($gallons, 1)]);
    }
}
