<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Cashier extends Authenticatable
{
    use HasFactory;

    protected $guard = 'cashier';
    protected $fillable = ['name', 'password', 'image', 'email', 'phone','c_number'];

    public function orders()
    {
        return $this->hasMany(Order::class);
    }
}
