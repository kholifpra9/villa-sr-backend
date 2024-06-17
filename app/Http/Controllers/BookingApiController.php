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

    public function store(Request $request){
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

        $booking = Booking::create($validated);

        return response()->json([
            'message' => 'succes',
            'data' => [
                'id' => $booking->id,
                'tanggalCheckin' => $booking->tanggalCheckin,
                'tanggalCheckout' => $booking->tanggalCheckout,
                'jml_malam' => $booking->jml_malam,
                'jml_tamu' => $booking->jml_tamu,
                'status' => $booking->status,
                'totalBayar' => $booking->totalBayar,
                'villa_id' => $booking->villa_id,
                'user_id' => $booking->user_id,
            ]

        ]);

    }
}
