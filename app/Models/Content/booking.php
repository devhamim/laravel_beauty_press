<?php

namespace App\Models\Content;

use App\Domains\Auth\Models\User;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class booking extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = 'booking';

    public $primaryKey = 'id';

    public $timestamps = true;

    protected $guarded = [];



    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
