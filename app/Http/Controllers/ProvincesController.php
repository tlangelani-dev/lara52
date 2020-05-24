<?php

namespace App\Http\Controllers;

use App\Province;
use Illuminate\Http\Request;

use App\Http\Requests;

class ProvincesController extends Controller
{
    public function index()
    {
        return response()->json([
            'provinces' => Province::latest()->get()
        ]);
    }

    public function show(Request $request, Province $province)
    {
        return response()->json([
            'province' => $province
        ]);
    }
}
