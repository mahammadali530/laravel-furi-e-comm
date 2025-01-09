<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\messge;

class messgeController extends Controller
{
    public function messge(Request $request)
    {
       
        $validatedData = $request->validate([
            'name' => 'required',
            'l_name' => 'required',
            'email' => 'required|email',
            'messge' => 'required|min:5',
        ], [
            'name.required' => 'First name is required.',
            'l_name.required' => 'Last name is required.',
            'email.required' => 'Email address is required.',
            'email.email' => 'Please provide a valid email address.',
            'messge.required' => 'Message is required.',
            'messge.min' => 'Message must be at least 5 characters long.',
        ]);
    
       
        $items = new Messge();
        $items->name = $request->name;
        $items->l_name = $request->l_name;
        $items->email = $request->email;
        $items->messge = $request->messge;
    
        if ($items->save()) {
            return redirect()->back()->with('success', 'Message added successfully!');
        }
    
        return redirect()->back()->with('error', 'Failed to add the message.');
    }
    
}
