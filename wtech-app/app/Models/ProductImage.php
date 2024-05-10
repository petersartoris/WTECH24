<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductImage extends Model
{
    use HasFactory;

    protected $fillable = ['product_id', 'path']; // The attributes that are mass assignable

    public function product()
    {
        return $this->belongsTo(Product::class); // A product image belongs to a product
    }

    // validation rules for store and update methods
    public static function rules($id = null)
    {
        return [
            'product_id' => 'required|exists:products,id',
            'path' => 'required|string|max:255',
        ];
    }
}
