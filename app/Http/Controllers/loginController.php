<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\login;
use App\Models\cart;
use App\Models\icon;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class loginController extends Controller
{
    // function add(Request $request)
    // {
    // $student = new login();
    // $user= login::where(['email'=>$request->email])->first();
  
    // if(!$user || !Hash::check($request->password,$user->password))
    // {
    //     return "username or password is not match";
    // }
    // else{
    //     $request->session()->put('user',$user);
    //     return redirect('/');
    // }
   

    function Register(Request $request){
       // return $request->input();
       $user = new login;
       $user->name = $request->name;
       $user->email = $request->email;
       $user->password =Hash::make ($request->password);
       $user->save();
       return redirect('/login');
    }

    public function add(Request $request) {
        $user = login::where('email', $request->email)->first();
    
        if ($user && Hash::check($request->password, $user->password)) {
           
            Session::put('user', $user);
    
            
            if (Session::has('cart')) {
                foreach (Session::get('cart') as $cartItem) {
                    
                    $product = icon::find($cartItem['product_id']);
   
                    if ($product) {
                        // dd($cartItem);
                       
                        cart::create([
                            'user_id' => $user->id,
                            'product_id' => $cartItem['product_id'],
                            'quantity' => $cartItem['quantity'],
                            'f_name' => $cartItem['f_name'],
                            'price' => $cartItem['price'],
                            'image_1' => $cartItem['image_1'],
                            'total_price' => $cartItem['price'] * $cartItem['quantity'],
                           
                        ]);
                       
                    }
                }
               
                Session::forget('cart');
            }
    
            
            return redirect('/checkout')->with('success', 'Logged in successfully.');
        }
    
       
        return back()->with('error', 'Invalid credentials.');
    }
    
    
   
}
    

