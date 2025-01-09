<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\login;
use Illuminate\Support\Facades\Hash;

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

    function add(Request $request)
    {
    $student = new login();
    $user= login::where(['email'=>$request->email])->first();
  
    if(!$user || !Hash::check($request->password,$user->password))
    {
       // return "username or password is not match";
        return back()->withErrors(['email' => 'username or password is not match.'])->withInput();
  
    }
    else{
        $request->session()->put('user',$user);
        return redirect('/');
    }
   
}
    

}