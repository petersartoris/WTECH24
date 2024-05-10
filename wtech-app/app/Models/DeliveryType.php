<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DeliveryType extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'price']; // The attributes that are mass assignable

    public function orders()
    {
        return $this->hasMany(Order::class); // A delivery type can have many orders
    }

    // validation rules for store and update methods
    public static function rules($id = null)
    {
        return [
            'name' => 'required|string|max:255|in:standard,express,next day|unique:delivery_types,name,' . $id . ',id',
            'price' => 'required|numeric|between:0,9999.99',
        ];
    }
}
