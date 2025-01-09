<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Cart;
class cartController extends Controller
{
    public function update(Request $request)
    {
        $cartItem = Cart::findOrFail($request->cart_id);
        $cartItem->quantity = $request->quantity;
        $cartItem->save();

        return response()->json([
            'success' => true,
            'total' => $cartItem->price * $cartItem->quantity,
        ]);
    }

}
