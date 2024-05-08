<?php

namespace App\Http\Controllers\Web;

use App\Models\Product;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Session;

class ProductController extends Controller
{
    public function show($id)
    {
        $data['product'] = Product::findOrFail($id); // Find the product or fail
        return view('web.products.show')->with($data); // Return the product view with data
    }
public function addToCart($id)
{
    $cart = Session::get('cart', []); // Get current cart from session or initialize as empty array
    $cart[] = $id; // Add the product ID to the cart array
    Session::put('cart', $cart); // Store the updated cart back in the session
    return redirect(url('/cart')); // Redirect to the cart page
}
}
