<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Product extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = ['name', 'description', 'price', 'quantity', 'availability']; // The attributes that are mass assignable

    public function categories()
    {
        return $this->belongsToMany(Category::class); // A product can belong to many categories
    }

    public function orders()
    {
        return $this->belongsToMany(Order::class)->withPivot('quantity'); // A product can belong to many orders
    }

    public function users()
    {
        return $this->belongsToMany(User::class)->withPivot('quantity'); // A product can belong to many users
    }

    public function images()
    {
        return $this->hasMany(ProductImage::class); // A product can have many images
    }


    public function getAvailabilityAttribute($value) // Get the availability of the product
    {
        return $value === 'available' ? 'available' : 'unavailable';
    }

    public function setAvailabilityAttribute($value) // Set the availability of the product
    {
        $this->attributes['availability'] = $value === 'available' ? 'available' : 'unavailable';
    }

    public function getPriceAttribute($value) // Get the price of the product
    {
        return number_format($value, 2);
    }

    public function setPriceAttribute($value) // Set the price of the product
    {
        $this->attributes['price'] = number_format($value, 2);
    }

    public function getQuantityAttribute($value) // Get the quantity of the product
    {
        return number_format($value);
    }

    public function setQuantityAttribute($value) // Set the quantity of the product
    {
        $this->attributes['quantity'] = number_format($value);
    }

    // validation rules for store and update methods
    public static function rules($id = null)
    {
        return [
            'name' => 'required|string|max:255',
            'code' => 'required|string|max:255|unique:products,code,' . $id,
            'description' => 'required|string',
            'price' => 'required|numeric|min:0',
            'quantity' => 'required|integer|min:0',
            'availability' => 'required|string|in:available,unavailable',
            'categories' => 'required|array',
            'categories.*' => 'exists:categories,id',
        ];
    }
}
