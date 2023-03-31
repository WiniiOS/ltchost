<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CartController extends Controller
{
    public function addToSessionCart(Request $request, $productId) 
    {
        $cart = session()->get('cart');
        
        // Si le panier est vide, initialiser un tableau vide
        if (!$cart) {
            $cart = [];
        }

        // Ajouter le produit au panier
        $cart[$productId] = [        'id' => $productId,        'quantity' => 1,    ];
        
        // Enregistrer le panier en session
        session()->put('cart', $cart);

        return redirect()->back();
    }

    public function showCart()
    {
        $cart = session()->get('cart');
        
        return view('cart', [
            'cart' => $cart
        ]);
    }

    public function index(Request $request)
    {
        $cart = $request->session()->get('cart', []);
        
        return view('cart', ['cart' => $cart]);
    }

    public function add(Request $request, $id)
{
    $product = Product::findOrFail($id);
    
    $cart = session()->get('cart', []);
    if (isset($cart[$id])) {
        $cart[$id]['quantity']++;
    } else {
        $cart[$id] = [
            'product' => $product,
            'quantity' => 1
        ];
    }
    
    session()->put('cart', $cart);
    return redirect()->route('cart.index');
}


   

    public function removeSessionFromCart(Request $request, $productId)
    {
        $cart = $request->session()->get('cart', []);

        if (isset($cart[$productId])) {
            if ($cart[$productId] == 1) {
                unset($cart[$productId]);
            } else {
                $cart[$productId]--;
            }

            $request->session()->put('cart', $cart);
        }

        return redirect()->back();
    }

    public function addToCart(Request $request)
    {
        $product = Product::find($request->input('product_id'));
        Cart::add($product->id, $product->name, 1, $product->price)->associate('Product');
        return redirect()->route('cart')->with('success_msg', 'Item is Added to Cart!');
    }

    public function checkout(Request $request)
    {
        // do checkout process
        Cart::destroy();
        return redirect()->route('home')->with('success_msg', 'Your order has been placed.');
    }

    public function removeFromCart()
    {
        
    }

    public function remove(Request $request, $id)
    {
        $cart = session()->get('cart', []);
        if (isset($cart[$id])) {
            unset($cart[$id]);
            session()->put('cart', $cart);
        }
        return redirect()->route('cart.index');
    }


}
