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
        $quantity = $cart->quantity + 1;
        $totalPrice = $cart->price * $quantity; 
        DB::table('cart')
            ->where('id', $cartId)
            ->update([
                'quantity' => $quantity,
                'total_price' => $totalPrice,
            ]);
            
        return response()->json(['status' => 'success', 'message' => 'Cart updated successfully!']);
    }

    public function decrease(Request $request)
    {
        $cartId = $request->id;
        $cart = DB::table('cart')->where('id', $cartId)->first();
        if($cart->quantity > 1){
            $quantity = $cart->quantity - 1;
            $totalPrice = $cart->price * $quantity;
            DB::table('cart')
                ->where('id', $cartId)
                ->update([
                    'quantity' => $quantity,
                    'total_price' => $totalPrice,
                ]);
        }else{
            DB::table('cart')
                ->where('id', $cartId)
                ->delete();
        }
        return response()->json(['status' => 'success', 'message' => 'Cart updated successfully!']);
    }


    
    
}

