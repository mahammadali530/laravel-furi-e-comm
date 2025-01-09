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
    
    public function indexpage(){
    
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
    
    function addToCart(Request $requeste){
        if($requeste->session()->has('user'))
        {
       
        $cart= new cart;
        $cart->user_id=$requeste->session()->get('user')['id'];
        $cart->product_id = $requeste->input('product_id');
       
        $cart->save();
        
       return redirect('/shop');
        
    }
    else{
        return redirect('/login');
    }
}
    static function cartitems(){

       $userId=Session::get('user')['id'];
       return cart::where('user_id',$userId)->count();
        //return cart::all()->count();
    
    }
    function cartlist(){
        $userId=Session::get('user')['id'];
       $products= DB::table('cart')
       ->join('products','cart.product_id','=','products.u_id')
       ->where('cart.user_id',$userId)
       ->select('products.*','cart.id as cart_id')
       ->get();
       return view('frontend.pages.cart',['products'=>$products]);
    }

    
    function removeCart($id){
        cart::destroy($id);
        return redirect('/cart');
    }
    function ordernow(){
        $userId=Session::get('user')['id'];
       $total=  $products= DB::table('cart')
        ->join('products','cart.product_id','=','products.u_id')
        ->where('cart.user_id',$userId)
        // ->select('products.*','cart.id as cart_id')
        ->sum('products.price');
        return view('frontend.pages.checkout',['total'=>$total]);
     
    }
    function orderplace(Request $requests){
        
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
        

        $userId=Session::get('user')['id'];
        $allcart= cart::where('user_id',$userId)->get();

        foreach($allcart as $request){
        $order=new order;
        $order->product_id= $request['product_id'];
        $order->user_id= $request['user_id']; 
       
        
        $order->payment_method = $requests->payment;
        $order->c_fname = $requests->c_fname;
        $order->c_lname = $requests->c_lname;
        $order->c_companyname = $requests->c_companyname;
        $order->c_address = $requests->c_address;
        $order->c_state_country = $requests->c_state_country;
        $order->c_postal_zip = $requests->c_postal_zip;
        $order->c_email_address = $requests->c_email_address;
        $order->c_phone = $requests->c_phone;
      
        //$order->save();
       
        cart::where('user_id',$userId)->delete();

        } 
        $requests->input();
        if ($order->save()) {
           
            return redirect()->back()->with('success', 'Product Add  successfully!');
        }
       // return redirect('/');
    }
    function myorders(){
        $userId=Session::get('user')['id'];
        $orders= DB::table('orders')
        
        ->join('products', 'orders.product_id', '=', 'products.u_id')
        ->where('orders.user_id', $userId)
        ->get();
      
    //    $orders=  DB::table('orders')
       
        //->get(); 
        return view('Customer',['orders'=>$orders]);
     
    }

    
}
