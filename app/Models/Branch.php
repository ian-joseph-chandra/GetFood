<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Branch extends Model
{
    use HasFactory;

    protected $table = 'branches';

    public function restaurants(): BelongsTo
    {
        return $this->belongsTo(Restaurant::class, 'restaurant_id');
    }

    public function stock(): HasMany
    {
        return $this->hasMany(Stock::class, 'branch_id', 'id');
    }

    public function order(): HasMany
    {
        return $this->hasMany(Order::class, 'branch_id', 'id');
    }
}
