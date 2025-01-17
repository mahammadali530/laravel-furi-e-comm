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
    
}
