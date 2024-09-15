<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use App\Models\User;
use App\Models\Villa;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class BookingApiController extends Controller
{
    public function getBookings(){
        $user_id = Auth::user()->id;
        $data = Booking::with('villa')->with('user')->where('user_id', $user_id)->orderBy('created_at', 'desc')->get();
        return response()->json([
            'data' => $data
        ]);
    }

    public function store(Request $request)
{
    // Validasi input
    $validated = $request->validate([
        'tanggalCheckin' => 'required',
        'tanggalCheckout' => 'required',
        'jml_malam' => 'required',
        'jml_tamu' => 'required',
        'status'=> 'required',
        'totalBayar' => 'required',
        'villa_id' => 'required',
        'user_id' => 'required',
    ]);

    // Simpan booking
    $booking = Booking::create($validated);

    // Ambil data booking beserta relasi dengan user dan villa
    $bookingWithRelations = Booking::with('villa', 'user')->find($booking->id);

    // Dapatkan nama user dan nama villa dari relasi
    $nama_user = $bookingWithRelations->user->nama; // Misal kolom nama user adalah 'name'
    $nama_villa = $bookingWithRelations->villa->nama_villa; // Misal kolom nama villa adalah 'nama_villa'

    return response()->json([
        'message' => 'success',
        'data' => [
            'id' => $bookingWithRelations->id,
            'tanggalCheckin' => $bookingWithRelations->tanggalCheckin,
            'tanggalCheckout' => $bookingWithRelations->tanggalCheckout,
            'jml_malam' => $bookingWithRelations->jml_malam,
            'jml_tamu' => $bookingWithRelations->jml_tamu,
            'status' => $bookingWithRelations->status,
            'totalBayar' => $bookingWithRelations->totalBayar,
            'villa_id' => $bookingWithRelations->villa_id,
            'user_id' => $bookingWithRelations->user_id,
            'nama_user' => $nama_user, // Tambahkan nama user
            'nama_villa' => $nama_villa, // Tambahkan nama villa
        ]
    ]);
}
}
