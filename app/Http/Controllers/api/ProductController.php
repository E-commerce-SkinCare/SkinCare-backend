<?php

namespace App\Http\Controllers\Api;

use App\Models\Product;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Resources\productResource;

class ProductController extends Controller
{
    public function index(){
        // Retrieving all products from the database
        $products=Product::get();
        // Returning products as a collection of productResource
        return productResource::collection($products);
    }
}
