<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\icon;
use App\Models\cart;
use App\Models\order;
use App\Models\About;
use App\Models\Team;
use App\Models\reveuse;
use App\Models\footer;
use App\Models\service;
use App\Models\blog;
use App\Models\home;
use App\Models\modern;
use App\Models\Contact;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

class FrontendController extends Controller
{
    
    public function indexpage(Request $request){
        $cart = $request->session()->get('cart', []);
        $productsData = icon::all();
        $footerData = footer::all();  

        return view('frontend.pages.shop', [
            'products' => $productsData,
            'footer' => $footerData,
        ]);
    }

    public function servicepage(){
       
      
        $serviceData = service::all();
        $reveuseData = reveuse::all(); 

        return view('frontend.pages.services', [
            'service' => $serviceData,
            'reveuse' => $reveuseData,
            
        ]);
    }
    public function blogpage(){
       
      
        $blogData = blog::all();
        $reveuseData = reveuse::all(); 
       

        return view('frontend.pages.blog', [
            'blog' => $blogData,
            'reveuse' => $reveuseData,
          
        ]);
    }
    public function contenpage(){ 
        $ContactData = Contact::all();  

        return view('frontend.pages.contact', [
            
            'Contact' => $ContactData,
        ]);
    }
   
    // public function Contact2()
    // {
    //     $studentdata = Contact::all();
    //     return view('Contact', ['Contact' => $studentdata]);
    // }
     public function Homepage()
    {
        $aboutData = About::all(); 
        $productsData = icon::all();
        $modernData = modern::all();
        $reveuseData = reveuse::all(); 
        $blogData = blog::all();
        $homeData = home::all();
         
        
        return view('frontend.pages.home', [
            'about' => $aboutData,
            'products' => $productsData,
            'modern' => $modernData,
            'reveuse' => $reveuseData,
            'blog' => $blogData,
            'home' => $homeData,
           
            
        ]);
    }

     public function aboutPage()
    {
        $aboutData = About::all(); 
        $teamData = Team::all();
        $reveuseData = reveuse::all();  
       
        
        return view('frontend.pages.about', [
            'about' => $aboutData,
            'team' => $teamData,
            'reveuse' => $reveuseData,
           
        ]);
    }
    
   
    public function addToCart(Request $request)
    {
        if ($request->session()->has('user')) {
            
            $productId = $request->input('product_id');
            $quantity = $request->input('quantity');
    
            // dd($productId);
            
            $product = icon::find($productId);
    
            
        if ($product) {
            $quantity = 1;
            $totalPrice = $product->price * $quantity;
                    
            $cart = new cart;
            $cart->user_id = $request->session()->get('user')['id'];
            $cart->product_id = $request->input('product_id');
            $cart->quantity = $quantity;
            $cart->f_name = $product->f_name;
            $cart->price = $product->price;
            $cart->total_price = $totalPrice;
            $cart->image_1 =$product->image_1;
       // dd($cart);
            $cart->save();
                
                return redirect('/cart')->with('success', 'Product added to your cart.');
            } else {
                
                return redirect('/shop')->with('error', 'Product not found.');
            }
        } else {
            
            $productId = $request->input('product_id');
            $quantity = 1;
            
            $product = icon::find($productId);

            $cart = $request->session()->get('cart', []);

            if($cart){
                $lastItem = end($cart);
               
                    $id = $lastItem['id'] + 1;
               
            } else {
                $id = 0;
            }
            if ($product) {
                $cartItem = [
                'id' => $id,
                'product_id' => $productId,
                'f_name' => $product->f_name,
                'price' => $product->price,
                'quantity' => $quantity,
                'total_price' => $product->price * $quantity,
                'image_1' => $product->image_1,
                ];
    
                $cart[] = $cartItem;
                // dd($cart);
                
                $request->session()->put('cart', $cart);
                
                $cart = $request->session()->get('cart', []);
                // dd($cart);
             
                return redirect('/shop')->with('success', 'Product added to your session cart.');
            } else {
                
                return redirect('/shop')->with('error', 'Product not found.');
            }
        }
    }
    
    
    public static function cartitems(Request $request = null)
    {
       
        $request = $request ?? request(); 
    
        if ($request->session()->has('user')) {
            $userId = $request->session()->get('user')['id'];
            return cart::where('user_id', $userId)->count();
        } else {
            $cart = $request->session()->get('cart', []);
            return count($cart);
        }
    }
    
    public function cartlist(Request $request)
{
   
    if ($request->session()->has('user')) {
       
        $userId = $request->session()->get('user')['id'];
        $cart = cart::where('user_id', $userId)->get();

       
        return view('frontend.pages.cart', ['products' => $cart]);

    } else {
        
        $cart = $request->session()->get('cart', []);

        $products = collect($cart);

     
        return view('frontend.pages.cart', ['products' => $products]);
    }
}


public function remove($id, Request $request)
{
    if ($request->session()->has('user')) {
       
        cart::where('id', $id)->delete();
    } else {
        $cart = $request->session()->get('cart', []);

    if (empty($cart)) {
        return response()->json(['message' => 'Cart is empty'], 400);
    }
    if (!isset($id)) {
        return response()->json(['message' => 'Invalid item ID'], 400);
    }
 
    $cart = array_filter($cart, function ($item) use ($id) {
        return isset($item['id']) && $item['id'] != $id;
    });

    $request->session()->put('cart', $cart);
    }
    return redirect()->back()->with('success', 'Item removed from cart.');
}

    // function ordernow(){

    //     if (!Session::has('user')) {
    //         return redirect('/login')->with('message', 'Please login to place an order.');
    //     }
    //     $userId=Session::get('user')['id'];
    //    $total=  $products= DB::table('cart')
    //     ->join('products','cart.product_id','=','products.u_id')
    //     ->where('cart.user_id',$userId)
    //     // ->select('products.*','cart.id as cart_id')
    //     ->sum('products.price');
    //     return view('frontend.pages.checkout',['total'=>$total]);
     
    // }
    public function orderplace(Request $requests) {
        
        if (!Session::has('user')) {
            return redirect('/login')->with('message', 'Please login to place an order.');
        }
    
        
        $validatedData = $requests->validate([
            'payment' => 'required',
            'c_fname' => 'required|string|max:255',
            'c_lname' => 'required|string|max:255',
            'c_companyname' => 'required|string|max:255', 
            'c_address' => 'required|string|max:500',
            'c_state_country' => 'required|string|max:255',
            'c_postal_zip' => 'required|numeric',
            'c_email_address' => 'required|email',
            'c_phone' => 'required|digits_between:10,15',
        ], [
            'payment.required' => 'Payment method is required.',
            'c_fname.required' => 'First name is required.',
            'c_lname.required' => 'Last name is required.',
            'c_companyname.required' => 'Company name is required.', 
            'c_address.required' => 'Address is required.',
            'c_state_country.required' => 'State and country are required.',
            'c_postal_zip.required' => 'Postal/Zip code is required.',
            'c_email_address.required' => 'Email address is required.',
            'c_email_address.email' => 'Please provide a valid email address.',
            'c_phone.required' => 'Phone number is required.',
            'c_phone.digits_between' => 'Phone number must be between 10 and 15 digits.',
        ]);
    
        $userId = Session::get('user')['id'];
        $allCart = cart::where('user_id', $userId)->get();
    
        if ($allCart->isEmpty()) {
            return redirect()->back()->with('error', 'Your cart is empty.');
        }
    
        
        foreach ($allCart as $cartItem) {
            $order = new order;
            $order->product_id = $cartItem->product_id;
            $order->user_id = $cartItem->user_id;
            $order->quantity = $cartItem->quantity;
            $order->total_price = $cartItem->total_price;
    
            $order->payment_method = $requests->payment;
            $order->c_fname = $requests->c_fname;
            $order->c_lname = $requests->c_lname;
            $order->c_companyname = $requests->c_companyname;
            $order->c_address = $requests->c_address;
            $order->c_state_country = $requests->c_state_country;
            $order->c_postal_zip = $requests->c_postal_zip;
            $order->c_email_address = $requests->c_email_address;
            $order->c_phone = $requests->c_phone;
    
            if (!$order->save()) {
                return redirect()->back()->with('error', 'Failed to place order for a product.');
            }
            
        }
    
        
        cart::where('user_id', $userId)->delete();
    
        return redirect()->route('checkout')->with('success', 'Order placed successfully!');
    }
    
    
    function myordersNew(){
        $userId=Session::get('user')['id'];
        $orders= DB::table('orders')
        
        ->join('products', 'orders.product_id', '=', 'products.u_id')
        ->where('orders.user_id', $userId)
        ->get();
        return view('frontend.pages.myorders',['orders'=>$orders]);
     
    }

}   

