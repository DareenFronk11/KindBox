<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vehicle extends Model
{
    use HasFactory;

    protected $fillable = [
        'vehicle_type',
        'is_available',
        'license_plate',
        'user_id',
    ];

    public function user() {
        return $this->belongsTo(User::class);
    }
    
    public function deliveries() {
        return $this->hasMany(Delivery::class);
    }


}