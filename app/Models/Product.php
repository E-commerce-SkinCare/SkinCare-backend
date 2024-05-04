<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $fillable = ['product_name', 'description', 'price', 'img', 'rating'];

    // Define the relationship with OrderItem
    public function orderItems()
    {
        return $this->hasMany(OrderItem::class);
    }
    public function carts()
    {
        return $this->hasMany(Cart::class);
    }
}
