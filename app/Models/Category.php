<?php

namespace App\Models;

// use Illuminate\Database\Eloquent\Model;
// use Illuminate\Database\Eloquent\Factories\HasFactory;

// class Category extends Model
// {
    // protected $fillable = ['name', 'slug', 'folder_name'];

    // public function products()
    // {
    //     return $this->hasMany(Product::class);
    // }

    // use HasFactory;

    // protected $fillable = [
    //     'name',
    //     'slug',
    //     'folder_name',
    // ];

    /**
     * A category has many products
     */
//     public function products()
//     {
//         return $this->hasMany(Product::class);
//     }
// }


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
}
