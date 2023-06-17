<?php

namespace App\Models\Content;

use App\Domains\Auth\Models\User;
use Illuminate\Database\Eloquent\Model;
// use Illuminate\Database\Eloquent\SoftDeletes;
use Spatie\Permission\Traits\HasRoles;
// use Illuminate\Database\Eloquent\Factories\HasFactory;

class Order extends Model
{
  use HasRoles;
  //  HasFactory;

  public const TYPE_ADMIN = 'admin';
  public const TYPE_USER = 'user';

  protected $table = 'orders';

  public $primaryKey = 'id';

  public $timestamps = true;

  protected $guarded = [];

  public function user()
  {
    return $this->belongsTo(User::class);
  }

  public function orderItems()
  {
    return $this->hasMany(OrderItem::class, 'order_id', 'id');
  }
  public function orderItemsVariations()
  {
    return $this->hasMany(OrderItemVariation::class, 'order_item_id', 'id');
  }
}
