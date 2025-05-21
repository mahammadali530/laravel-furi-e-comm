<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Cart;
use Illuminate\Support\Facades\DB;
class cartController extends Controller
{
   
    public function increase(Request $request)
    {
        $cartId = $request->id;
        $cart = DB::table('cart')->where('id', $cartId)->first();
    
        if (!$cart) {
            return response()->json(['status' => 'error', 'message' => 'Cart item nahi mila.']);
        }
    
        $quantity = $cart->quantity + 1;
        $totalPrice = $cart->price * $quantity;
    
        DB::table('cart')
            ->where('id', $cartId)
            ->update([
                'quantity' => $quantity,
                'total_price' => $totalPrice,
            ]);
    
       
        $cartTotal = DB::table('cart')->sum('total_price');
    
        return response()->json([
            'status' => 'success',
            'newQuantity' => $quantity,
            'newTotalPrice' => $totalPrice,
            'cart_total' => $cartTotal
        ]);
    }
    

    public function decrease(Request $request)
    {
        $cartId = $request->id;
        $cart = DB::table('cart')->where('id', $cartId)->first();
    
        if (!$cart) {
            return response()->json(['status' => 'error', 'message' => 'Cart item nahi mila.']);
        }
    
        if ($cart->quantity > 1) {
            $quantity = $cart->quantity - 1;
            $totalPrice = $cart->price * $quantity;
    
            DB::table('cart')
                ->where('id', $cartId)
                ->update([
                    'quantity' => $quantity,
                    'total_price' => $totalPrice,
                ]);
        } else {
            DB::table('cart')->where('id', $cartId)->delete();
        }
    
      
        $cartTotal = DB::table('cart')->sum('total_price');
    
        return response()->json([
            'status' => 'success',
            'newQuantity' => $cart->quantity > 1 ? $quantity : 0,
            'newTotalPrice' => $cart->quantity > 1 ? $totalPrice : 0,
            'removed' => $cart->quantity <= 1,
            'cart_total' => $cartTotal
        ]);
    }
    
}
