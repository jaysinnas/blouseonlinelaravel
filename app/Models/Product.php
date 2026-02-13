<?php


namespace App\Models;

use App\Models\Comment;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class Product extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'description',
        'price',
        'image',
        'category_id',
        'is_trendy',
        'discount_percent'
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array
     */
    protected $casts = [
        'price' => 'float',
        'is_trendy' => 'boolean',
        'discount_percent' => 'integer',
    ];

    /**
     * Get the full public URL for the product image.
     *
     * @return string|null
     */

    public function getImageUrlAttribute()
    {
        if (!$this->image) {
            return asset('assets/images/defaults/no-image.jpg');
        }

        // Images stored in storage/app/public
        return Storage::url($this->image);
    }

        public function getDiscountPriceAttribute()
    {
        if ($this->discount_percent) {
            return $this->price * (1 - $this->discount_percent / 100);
        }
        return $this->price;
    }



    /**
     * Get the category that owns the product.
     */
    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    /**
     * Get all comments for the product.
     */
    public function comments()
    {
        return $this->hasMany(Comment::class);
    }
}