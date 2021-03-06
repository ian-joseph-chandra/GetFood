<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Menu extends Model
{
    use HasFactory;

    protected $table = 'menus';

    protected $fillable = [
        'category_id',
        'name',
        'description',
        'price',
        'image'
    ];

    public function menu_category(): BelongsTo
    {
        return $this->belongsTo(MenuCategory::class, 'category_id');
    }

    public function stocks(): HasMany
    {
        return $this->hasMany(Stock::class, 'menu_id', 'id');
    }

    public function cart_details(): HasMany
    {
        return $this->hasMany(CartDetail::class, 'menu_id', 'id');
    }

    public function order_details(): HasMany
    {
        return $this->hasMany(OrderDetail::class, 'menu_id', 'id');
    }
}
