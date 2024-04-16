<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'category_id', 'image', 'price', 'code', 'quantity', 'quantity_sold','details'];

    public function orders()
    {
        return $this->belongsToMany(Order::class,'order_products','product_id')->using(OrderProduct::class)->withPivot('id','price','quantity','total')->withTimestamps();
    }


    public function scopeProductQty() {
        $orders = $this->orders()->where('status',1)->get();
        $total = 0 ;
        foreach($orders as $order) {
            $total += $order->pivot->quantity;
        }
        return $total;
    }


    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function items() {
        return $this->hasMany(OrderProduct::class);
    }
}
