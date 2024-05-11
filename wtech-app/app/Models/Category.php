<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    protected $fillable = ['parent_id', 'name']; // The attributes that are mass assignable

    public function products()
    {
        return $this->belongsToMany(Product::class); // A category can have many products
    }

    public function children()
    {
        return $this->hasMany(Category::class, 'parent_id'); // A category can have many children categories
    }

    public function parent()
    {
        return $this->belongsTo(Category::class, 'parent_id'); // A category can have one parent category
    }

    public function descendants() // Get all descendants of the category (e.g., children, grandchildren, etc.)
    {
        return $this->children()->with('descendants');
    }

    public function getPathAttribute() // Get the path of the category (e.g., ... > grandparent > parent > category)
    {
        return $this->parent ? $this->parent->path . ' > ' . $this->name : $this->name;
    }

    // validation rules for store and update methods
    public static function rules($id = null)
    {
        return [
            'parent_id' => 'nullable|exists:categories,id',
            'name' => 'required|string|max:255|unique:categories,name,' . $id . ',id,parent_id,' . request('parent_id'),
            'slug' => 'required|string|max:255|unique:categories,slug,' . $id . ',id,parent_id,' . request('parent_id'),
        ];
    }
}
