<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrderItem extends Model
{
    use HasFactory;
    protected $fillable = ['order_id', 'product_id', 'quantity', 'unit_price'];

    // Define the relationship with Order
    public function order()
    {
        return $this->belongsTo(Order::class);
    }

    // Define the relationship with Product
    public function product()
    {
        return $this->belongsTo(Product::class);
    }
}
