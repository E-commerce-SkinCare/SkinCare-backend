<?php

namespace App\Http\Controllers\Web;

use App\Models\Product;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Session;


class CartController extends Controller
{
    public function show()
        {
        $cart = Session::get('cart', []);

        // Fetch products based on the IDs in the cart array
        $products = Product::whereIn('id', $cart)->get();

        return view('web.cart.show', compact('products'));
    }
}
