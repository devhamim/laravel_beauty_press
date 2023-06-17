<?php

namespace App\Domains\Products\Models;

use App\Domains\Auth\Models\User;
use App\Domains\Products\Models\Product;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Shipping extends Model
{
  use HasFactory;

  public function user()
  {
    return $this->belongsTo(User::class);
  }

  public function products()
  {
    return $this->hasMany(Product::class);
  }
}
