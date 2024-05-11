<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'role',
        'username',
        'phone_number',
        'address',
        'country',
        'city',
        'zip_code',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'password' => 'hashed',
        ];
    }

    public function orders()
    {
        return $this->hasMany(Order::class); // A user can have many orders
    }

    public function products()
    {
        return $this->belongsToMany(Product::class)->withPivot('quantity'); // A user can have many products in a cart
    }

    // mutator for password
    public function setPasswordAttribute($value)
    {
        $this->attributes['password'] = bcrypt($value);
    }

    // mutator for role. This will probably be used in the future to create an admin user from normal user
    public function setRoleAttribute($value)
    {
        $this->attributes['role'] = $value ?: 'user';
    }

    // validation rules for store and update methods
    public static function rules($id = null)
    {
        return [
            'name' => 'nullable|string|max:255',
            'email' => 'required|string|email|max:255|unique:users,email' . ($id ? ",$id" : ''),
            'password' => 'required|string|min:8',
            'role' => 'required|string|in:user,admin',
            'username' => 'required|string|max:255|unique:users,username' . ($id ? ",$id" : ''),
            'phone_number' => 'nullable|string|max:255',
            'address' => 'nullable|string|max:255',
            'country' => 'nullable|string|max:255',
            'city' => 'nullable|string|max:255',
            'zip_code' => 'nullable|string|max:255',
        ];
    }
}
