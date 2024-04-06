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
        return $this->belongsToMany(Product::class,'order_products')->using(OrderProduct::class)->withPivotValue('quantity','total')->withTimestamps();
    }
    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function items() {
        return $this->hasMany(OrderProduct::class);
    }
}
