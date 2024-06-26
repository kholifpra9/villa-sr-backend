<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Booking extends Model
{
    use HasFactory;
    public function user() : BelongsTo{
        return $this->belongsTo(User::class);
    }

    public function villa() : BelongsTo{
        return $this->belongsTo(Villa::class);
    }


    protected $fillable = [
        'tanggalCheckin',
        'tanggalCheckout',
        'jml_malam',
        'jml_tamu',
        'status',
        'totalBayar',
        'villa_id',
        'user_id',
    ];
}
