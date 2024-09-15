<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class PembayaranApiController extends Controller
{
    public function upload(Request $request)
    {
        // Validasi file
        $request->validate([
            'bukti_pembayaran' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        // Simpan file gambar ke dalam folder 'uploads'
        $path = $request->file('bukti_pembayaran')->store('bukti_tf', 'public');

        // Return URL gambar
        return response()->json([
            // 'url' => Storage::url($path),
            'url' => asset('storage/' . $path),
        ])->header('Access-Control-Allow-Origin', '*')
        ->header('Access-Control-Allow-Methods', 'GET, POST, PUT, DELETE, OPTIONS')
        ->header('Access-Control-Allow-Headers', 'X-Requested-With, Content-Type, X-Token-Auth, Authorization');
    }
}
