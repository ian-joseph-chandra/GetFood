<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Order extends Model
{
    use HasFactory;

    protected $table = 'orders';

    public function branches(): BelongsTo
    {
        return $this->belongsTo(Branch::class, 'branch_id');
    }

    public function order_statuses(): BelongsTo
    {
        return $this->belongsTo(OrderStatus::class, 'order_status_id');
    }

    public function customers(): BelongsTo
    {
        return $this->belongsTo(Customer::class, 'customer_id');
    }

    public function drivers(): BelongsTo
    {
        return $this->belongsTo(Driver::class, 'driver_id');
    }

    public function order_detail(): HasMany
    {
        return $this->hasMany(Order::class, 'order_id', 'id');
    }
}
