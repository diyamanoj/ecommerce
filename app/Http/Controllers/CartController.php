<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Product;
use Illuminate\Http\Request;

class CartController extends Controller
{
     public function index()
    {
        $cartItems = Cart::where('user_id', auth()->id())->get();
        return view('cart.index', compact('cartItems'));
    }

    public function add(Request $request, $productId)
    {
        $product = Product::find($productId);
        Cart::create([
            'user_id' => auth()->id(),
            'product_id' => $product->id,
            'quantity' => 1,
            'price' => $product->price,
        ]);

        return redirect()->route('cart.index');
    }

    public function update(Request $request)
    {
        foreach ($request->quantity as $cartItemId => $quantity) {
            $cartItem = Cart::find($cartItemId);
            $cartItem->update(['quantity' => $quantity]);
        }

        return redirect()->route('cart.index');
    }
}
