<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Driver extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
    ];

    public function vehicle()
    {
        return $this->belongsTo(Vehicle::class);
    }

    public function orders()
    {
        return $this->hasMany(Order::class, 'driver_id');
    }
}
