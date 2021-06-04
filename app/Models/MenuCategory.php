<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class MenuCategory extends Model
{
    use HasFactory;

    protected $table = 'menu_categories';

    public function menus(): HasMany
    {
        return $this->hasMany(Menu::class, 'category_id', 'id');
    }
}
