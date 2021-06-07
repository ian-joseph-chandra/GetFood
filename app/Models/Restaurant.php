<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasManyThrough;

class Restaurant extends Model
{
    use HasFactory;

    protected $table = 'restaurants';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'image',
        'image_type'
    ];

    public function branches(): HasMany
    {
        return $this->hasMany(Branch::class, 'restaurant_id', 'id');
    }

    public function menu_categories(): HasMany
    {
        return $this->hasMany(MenuCategory::class, 'restaurant_id', 'id');
    }

    public function menus(): HasManyThrough
    {
        return $this->hasManyThrough(
            Menu::class,
            MenuCategory::class,
            'restaurant_id',
            'category_id',
            'id',
            'id');
    }
}
