<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
class CartSessionController extends Controller
{
    public function increase(Request $request)
    {
        
        $cart = session()->get('cart', []);
        if (isset($cart[$request->id])) {
            $cart[$request->id]['quantity'] += 1;
            $cart[$request->id]['total_price'] = $cart[$request->id]['price'] * $cart[$request->id]['quantity'];
            session()->put('cart', $cart);
        }
    
        return response()->json(['status' => 'success', 'message' => 'Cart updated successfully!']);
    }
    
    public function decrease(Request $request)
    {
        $cart = session()->get('cart', []);
    
        if (isset($cart[$request->id])) {
            if ($cart[$request->id]['quantity'] > 1) {
                $cart[$request->id]['quantity'] -= 1;
                $cart[$request->id]['total_price'] = $cart[$request->id]['price'] * $cart[$request->id]['quantity'];
            } else {
                unset($cart[$request->id]);
            }
            session()->put('cart', $cart);
        }
    
        return response()->json(['status' => 'success', 'message' => 'Cart updated successfully!']);
    }


public function increaseQuantity(Request $request)
{
    $cart = session()->get('cart', []);
    $totalPrice = 0;

    foreach ($cart as &$item) {
        if ($item['product_id'] == $request->product_id) {  // Use product_id here
            $item['quantity']++;
        }
        $totalPrice += $item['quantity'] * $item['price'];
    }

    session()->put('cart', $cart);

    return response()->json([
        'status' => 'success', 
        'message' => 'Quantity increased',
        'quantity' => collect($cart)->firstWhere('product_id', $request->product_id)['quantity'],
        'totalPrice' => $totalPrice
    ]);
}

public function decreaseQuantity(Request $request)
{
    $cart = session()->get('cart', []);
    $totalPrice = 0;

    foreach ($cart as &$item) {
        if ($item['product_id'] == $request->product_id && $item['quantity'] > 1) {
            $item['quantity']--;
        }
        $totalPrice += $item['quantity'] * $item['price'];
        
    }

    session()->put('cart', $cart);

    return response()->json([
        'status' => 'success', 
        'message' => 'Quantity decreased',
        'quantity' => collect($cart)->firstWhere('product_id', $request->product_id)['quantity'],
        'totalPrice' => $totalPrice
    ]);
}

}

