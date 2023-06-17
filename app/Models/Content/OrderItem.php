<?php

namespace App\Models\Content;

use App\Domains\Auth\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class OrderItem extends Model
{
  use SoftDeletes;

  protected $table = 'order_item';

  public $primaryKey = 'id';

  public $timestamps = true;

  protected $guarded = [];

  public function user()
  {
    return $this->belongsTo(User::class, 'user_id', 'id');
  }

  public function order()
  {
    return $this->belongsTo(Order::class, 'order_id', 'id');
  }

  public function product()
  {
    return $this->belongsTo(Product::class, 'product_id', 'id');
  }

  public function itemVariations()
  {
    return $this->hasMany(OrderItemVariation::class, 'order_item_id', 'id');
  }
}
