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
        $cartId = $request->cart_id;
        $cart = DB::table('cart')->where('id', $cartId)->first();
        $quantity = $cart->quantity + 1;
        DB::table('cart')
            ->where('id', $cartId)
            ->update(['quantity' => $quantity]);
        return response()->json(['status' => 'success', 'message' => 'Cart updated successfully!']);
    }

    public function decrease(Request $request)
    {
        $cartId = $request->cart_id;
        $cart = DB::table('cart')->where('id', $cartId)->first();
        if($cart->quantity > 1){
            $quantity = $cart->quantity - 1;
            DB::table('cart')
                ->where('id', $cartId)
                ->update(['quantity' => $quantity]);
        }else{
            DB::table('cart')
                ->where('id', $cartId)
                ->delete();
        }
        return response()->json(['status' => 'success', 'message' => 'Cart updated successfully!']);
    }
    
    
}
