<?php

namespace App\Http\Controllers;

use App\models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
     public function index()
    {
        $products = Product::all();
        return view('admin.product_management', compact('products'));
    }

    public function list()
    {
        $products = Product::all();
        return view('products.list', compact('products'));
    }

    public function addToCart($productId)
    {
        
    }
}
