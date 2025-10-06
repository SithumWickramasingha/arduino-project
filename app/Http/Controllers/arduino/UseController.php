<?php

namespace App\Http\Controllers\arduino;

use App\Http\Controllers\Controller;
use App\Models\Weather;
use Illuminate\Http\Request;

class UseController extends Controller
{
    public function index(Request $request){

        $data = Weather::create([
            'temp' => $request->temp,
            'humidity' => $request->humidity,
            'fetched_time' => $request->fetched_time,
        ]);

        return response()->json([
            'success' => true,
            'message' => 'Weather data saved successfully!',
            'data' => $data
        ], 201);
        
    }
}
