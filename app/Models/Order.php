<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    protected $fillable = ['total_price', 'added_at','cashier_id','open'];

    public function products()
    {
        return $this->belongsToMany(Product::class,'order_products')->using(OrderProduct::class)->withPivotValue('quantity','total')->withTimestamps();
    }

    public function cashier()
    {
        return $this->belongsTo(Cashier::class);
    }


    public function items() {
        return $this->hasMany(OrderProduct::class);
    }
}