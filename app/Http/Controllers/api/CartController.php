<?php

namespace App\Http\Controllers\Api;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Session;
use App\Models\Order;
class CartController extends Controller
{
//     public function index()
//     {
//         $cart = Session::get('cart', []);

//         $products = Product::whereIn('id', $cart)->get();

//         return response()->json(['products' => $products]);
//     }
//     public function addToCart(Request $request)
//     {
//         // Check if the user is authenticated
//         if (!auth()->check()) {
//             return response()->json(['error' => 'Unauthorized'], 401);
//         }

//         // Perform addToCart logic
//         // Example: auth()->user()->addToCart($productId, $quantity);

//         return response()->json(['message' => 'Product added to cart']);
//     }


//         public function updateCartItem(Request $request, $orderItemId)
//         {
//             $newQuantity = $request->input('quantity');

//             $success = auth()->user()->updateCartItemQuantity($orderItemId, $newQuantity);

//             if ($success) {
//                 return response()->json(['message' => 'Cart item updated']);
//             }

//             return response()->json(['error' => 'Cart item not found or unauthorized'], 404);
//         }

//         public function getCartItems()
//         {
//             $cartItems = auth()->user()->getCartItems();

//             return response()->json(['cartItems' => $cartItems]);
//         }

//         public function placeOrder()
//         {
//             $order = auth()->user()->placeOrder();

//             if ($order) {
//                 return response()->json(['message' => 'Order placed successfully', 'order' => $order]);
//             }

//             return response()->json(['error' => 'No items in cart or unable to place order'], 400);
//         }

// public function destroy($productId)
// {
//     // Retrieve current cart from session
//     $cart = Session::get('cart', []);

//     // Filter out the product to be removed
//     $filteredCart = array_values(array_filter($cart, function ($item) use ($productId) {
//         return $item['id'] != $productId;
//     }));

//     if (count($cart) > count($filteredCart)) {
//         // Product was found and removed
//         Session::put('cart', $filteredCart);
//         return response()->json(['message' => 'Product removed from cart']);
//     }

//     return response()->json(['error' => 'Product not found in cart'], 404);
// }

}
