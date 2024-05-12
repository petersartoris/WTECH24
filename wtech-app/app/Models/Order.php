<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    protected $fillable = ['user_id', 'delivery_type_id', 'status', 'total_price']; // The attributes that are mass assignable

    public function user()
    {
        return $this->belongsTo(User::class); // An order belongs to a user
    }

    public function deliveryType()
    {
        return $this->belongsTo(DeliveryType::class); // An order belongs to a delivery type
    }

    public function paymentType()
    {
        return $this->belongsTo(PaymentType::class); // An order belongs to a payment type
    }

    public function products()
    {
        return $this->belongsToMany(Product::class)->withPivot('quantity'); // An order can have many products
    }

    public function getTotalPriceAttribute() // Get the total price of the order
    {
        return $this->products->sum(function ($product) {
            return $product->pivot->quantity * $product->pivot->price;
        });
    }

    // validation rules for store and update methods
    public static function rules($id = null)
    {
        return [
            'user_id' => 'nullable|exists:users,id',
            'delivery_type_id' => 'required|exists:delivery_types,id',
            'payment_type_id' => 'required|exists:payment_types,id',
            'status' => 'required|string|in:pending,processing,completed,cancelled',
            'address' => 'required|string|max:255',
            'city' => 'required|string|max:255',
            'country' => 'required|string|max:255',
            'zip_code' => 'required|string|max:255',
            'phone_number' => 'required|string|max:255',
            'first_name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'total_price' => 'required|numeric',
        ];
    }
}
