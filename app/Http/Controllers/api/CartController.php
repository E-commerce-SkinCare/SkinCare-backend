<?php

namespace App\Http\Controllers\Api;

use App\Models\Cart;
use App\Models\Product;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Resources\CartResource;

class CartController extends Controller
{
    public function store(Request $request)
    {

        $userId = $request->input('user_id');
        $productId = $request->input('product_id');
        $quantity = $request->input('quantity', 1); // Default quantity is 1 if not specified

        // Validate that the product exists
        $product = Product::find($productId);
        if (!$product) {
            return response()->json(['error' => 'Product not found'], 404);
        }

        // Check if the product is already in the cart
        $cartItem = Cart::where('user_id', $userId)->where('product_id', $productId)->first();

        if ($cartItem) {
            // If item exists, update the quantity
            $cartItem->quantity += $quantity;
            $cartItem->save();
        } else {
            // If item does not exist, create a new cart item
            Cart::create([
                'user_id' => $userId,
                'product_id' => $productId,
                'quantity' => $quantity
            ]);
        }

        return response()->json(['message' => 'Product added to cart']);
    }

    public function show($userId){
        // Retrieving all products from the database
        $cartItems=Cart::where('user_id', $userId)->get();
        // Returning products as a collection of productResource
        return CartResource::collection($cartItems);
    }
}
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

//}
