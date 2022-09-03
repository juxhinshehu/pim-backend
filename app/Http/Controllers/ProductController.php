<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Models\Metadata;

class ProductController extends Controller {

    public function index() 
    {
        return Product::all();
    }

    public function metadata($product_id)
    {
        return Metadata::where('product_id', $product_id)->get();
    }
}