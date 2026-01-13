<?php

namespace App\Models;


use App\Models\Comment;
use Illuminate\Database\Eloquent\Factories\HasFactory; 
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage; // Needed for the Accessor

class Product extends Model
{
    use HasFactory;

     /**
     * The attributes that are mass assignable.
     * Crucial for security (Mass Assignment Protection).
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'price',
        'description',
        'image',
        'category_id',
    ];

      /**
     * The attributes that should be cast.
     * Ensures 'price' is consistently treated as a float.
     *
     * @var array
     */
        protected $casts = [
            'price' => 'float', 
        ];

        /**
     * Accessor to get the full public URL for the product image.
     * This makes accessing the image in views much cleaner.
     *
     * @return string|null
     */
    public function getImageUrlAttribute()
    {
        // Check if the product has an image path saved
        if ($this->image) {
            // Use the Storage facade to generate the URL for the 'public' disk
            // Expects image path like 'products/file.jpg' stored relative to the public disk
            return Storage::disk('public')->url($this->image);
        }

        // Return a placeholder or null if no image exists
        return null; 
    }

    public function category()
    {
        return $this->belongsTo(Category::class);
    }
    public function comments()
    {
        return $this->hasMany(Comment::class);
    }
}
