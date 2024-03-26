<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cashier extends Model
{
    use HasFactory;

    protected $guard = 'cashier';
    protected $fillable = ['name', 'password', 'image', 'email', 'phone','c_number'];

    public function orders()
    {
        return $this->hasMany(Order::class);
    }
}
