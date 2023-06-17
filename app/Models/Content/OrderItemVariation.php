<?php

namespace App\Models\Content;

use App\Domains\Auth\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class OrderItemVariation extends Model
{
  use SoftDeletes;

  protected $table = 'order_item_variations';

  public $primaryKey = 'id';

  public $timestamps = true;

  protected $guarded = [];

  public function user()
  {
    return $this->belongsTo(User::class);
  }

  public function orderItem()
  {
    return $this->belongsTo(OrderItem::class, 'order_item_id', 'id');
  }

  public function product()
  {
    return $this->belongsTo(Product::class, 'product_id', 'id');
  }
}
