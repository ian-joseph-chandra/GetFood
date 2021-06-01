<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class OrderStatus extends Model
{
    use HasFactory;

    protected $table = "order_statuses";

    public function order_status(): HasMany
    {
        return $this->hasMany(Order::class, 'order_status_id', 'id');
    }
}
