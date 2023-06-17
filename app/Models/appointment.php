<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class appointment extends Model
{
    use HasFactory;

    // relation to service
    function rel_to_service(){
        return $this->belongsTo(Service::class, 'appointment_service');
    }
}
