<?php

namespace App\Http\Controllers;

use App\Models\Villa;
use Illuminate\Http\Request;

class VillaApiController extends Controller
{
    public function index(){
        $data = Villa::all();
        return response()->json(['message' => 'succes', 'data' => $data]);
    }
}
