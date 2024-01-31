<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contract extends Model
{
    use HasFactory;

    protected $fillable = [
        'start_date',
        'end_date',
        'amount',
        'terms',
        // Add more fields as needed
    ];

    public function accommodation()
    {
        return $this->belongsTo(Accommodation::class);
    }

    public function travelAgent()
    {
        return $this->belongsTo(TravelAgent::class);
    }
}
