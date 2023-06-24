<?php

namespace App\Http\Controllers;

class ConversionController extends Controller
{
    public function convert($from, $to, $value)
    {
        if ($from === 'gallons' && $to === 'liters') {
            $result = $this->gallonsToLiters($value);
        } elseif ($from === 'liters' && $to === 'gallons') {
            $result = $this->litersToGallons($value);
        } else {
            return response()->json(['error' => 'Invalid conversion parameters'], 400);
        }

        return response()->json(['result' => $result]);
    }

    private function gallonsToLiters($gallons)
    {
        return $gallons * 3.78541; // 1 gallon = 3.78541 liters
    }

    private function litersToGallons($liters)
    {
        return $liters / 3.78541; // 1 liter = 0.264172 gallons
    }
}
