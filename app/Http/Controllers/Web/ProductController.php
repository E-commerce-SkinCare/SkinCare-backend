<?php

namespace App\Http\Controllers\Web;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class ProductController extends Controller
{
    // public function show($id)
    // {
    //     $data['product'] = Product::findOrFail($id); // Find the product or fail
    //     $user = Auth::user(); // Get the authenticated user
    //     if ($user!==null){ // Check if user is not null
    //         $pivotRow=$user->products()->where('product_id',$id)->active()->first(); // Get the user's product pivot row
    //         if ($pivotRow !== null and $pivotRow->pivot->status =='closed'){ // Check if the product status is closed
    //             $data['canEnterproduct']=false; // Set canEnterproduct to false if product is closed
    //         }
    //     }

    //     return view('web.products.show')->with($data); // Return the product view with data
    // }
}
