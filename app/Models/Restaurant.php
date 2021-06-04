<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

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
    ];
    
    public function branch(): HasMany
    {
        return $this->hasMany(Branch::class, 'restaurant_id', 'id');
    }

    public function menu(): HasMany
    {
        return $this->hasMany(Menu::class, 'restaurant_id', 'id');
    }
}
