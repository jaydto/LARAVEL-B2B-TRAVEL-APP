<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Accommodation extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'description',
        'price',
        'location',
        // Add more fields as needed
    ];

    public function contracts()
    {
        return $this->hasMany(Contract::class);
    }
}
