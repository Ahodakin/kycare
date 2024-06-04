<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Availability extends Model
{
    use HasFactory;

    protected $fillable = [
        'start_time',
        'end_time',
        'doctor_id',
    ];

    // public function doctor()
    // {
    //     return $this->belongsTo(User::class);
    // }
}
