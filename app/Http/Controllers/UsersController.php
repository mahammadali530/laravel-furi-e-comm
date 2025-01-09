<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;


use App\Models\users;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Password;
use DataTables;

class UsersController extends Controller
{
    function add(Request $request)
    {
    $student = new users();
    $student->name = $request->name;
    $student->number = $request->number;
    $student->email = $request->email;
    $student->password = Hash::make( $request->password);
    $student->save();
    
    if ($student) {
        return redirect('pages-login')->with('success', 'User added successfully!');
    } else {
        return redirect('')->with('error', 'Failed to add user.');
    }
}
function addd()
{
    $studentdata = users::paginate(10);
    return view('pages-register', ['students' => $studentdata]);
}

public function login(Request $request)
{
   
   $creadential= $request->validate([
        'email' => 'required|email',
        'password' => 'required',
    ]);

    if(Auth::attempt($creadential)){
        return redirect()->route('index')->with('success', 'Login successful!');
    }else{
    return back()->withErrors(['email' => 'Invalid email or password.'])->withInput();
    }
}
public function logout(){
    Auth::logout();
    return redirect('/pages-login');
}



    }

        
    


