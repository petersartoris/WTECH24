<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PaymentType extends Model
{
    use HasFactory;

    protected $fillable = ['name']; // The attributes that are mass assignable

    public function orders()
    {
        return $this->hasMany(Order::class); // A payment type can have many orders
    }

    // validation rules for store and update methods
    public static function rules($id = null)
    {
       return [
        'name' => 'required|string|max:255|in:credit card,paypal,cash on delivery|unique:payment_types,name,' . $id . ',id',
       ];
    }
}
