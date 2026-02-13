<?php

declare(strict_types=1);

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'slug',
        'folder_name',
    ];

    /**
     * Get all products for this category.
     */
    public function products()
    {
        return $this->hasMany(Product::class);
    }
      public function getRouteKeyName()
    {
        return 'slug';
    }

    
}
