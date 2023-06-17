<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class secrets extends Model
{
    use HasFactory;

    protected $guarded = ['id'];
}