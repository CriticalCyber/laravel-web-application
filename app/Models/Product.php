<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

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
        'category_id',
        'image_path',
        'image_url',
        'stock_quantity',
        'is_featured',
        'is_new_arrival',
    ];

    /**
     * Get the category that owns the product.
     */
    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    /**
     * Get all of the orders for the product.
     */
    public function orderItems()
    {
        return $this->hasMany(OrderItem::class);
    }

    /**
     * Scope a query to only include featured products.
     */
    public function scopeFeatured($query)
    {
        return $query->where('is_featured', true);
    }

    /**
     * Scope a query to only include new arrival products.
     */
    public function scopeNewArrival($query)
    {
        return $query->where('is_new_arrival', true);
    }
    
    /**
     * Get the full URL to the product image.
     */
    public function getImageUrlAttribute()
    {
        if ($this->attributes['image_url']) {
            return $this->attributes['image_url'];
        }
        
        if ($this->image_path) {
            // For Hostinger shared hosting where symlink is not available
            // Use a route that serves images from storage
            return route('storage.serve', ['path' => $this->image_path]);
        }
        
        // Return a default image if no image is set
        return 'https://images.unsplash.com/photo-1505691938895-1758d7feb511?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1170&q=80';
    }
    
    /**
     * Set the image URL attribute.
     */
    public function setImageUrlAttribute($value)
    {
        $this->attributes['image_url'] = $value;
    }
}