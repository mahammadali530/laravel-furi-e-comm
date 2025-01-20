<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Contact;

class ContactController extends Controller
{
    public function Contact(Request $request)
    {      
        $request->validate([
            'location' => 'required|string|max:255',
            'gmail'    => 'required|email|max:255',
            'number'   => 'required|digits_between:10,15|numeric'
        ]);
            
        $items = new Contact();
        $items->location = $request->location;
        $items->gmail = $request->gmail;
        $items->number = $request->number;
        $items->save();
        return redirect('Contact')->with('success', 'User registered successfully!');
    }

    public function Contact2()
    {
        $studentdata = Contact::all();
        return view('Contact', ['Contact' => $studentdata]);
    }


    function Contactdelete($id)
    {
        $isdeleted = Contact::destroy(($id));
        if ($isdeleted) {
            return redirect('Contact');
        } else {
            return 'no deleted record';
        }
    }

    public function Contactedit($id)
    {
        $student = Contact::find($id);
        if ($student) {
            return response()->json(['data' => $student]);
        }
        return response()->json(['error' => 'Data not found'], 404);
    }


    public function editContact(Request $request, $id)
    {
    $student = Contact::find($id);
    if ($student) {
        $student->location = $request->location;
        $student->gmail = $request->gmail;
        $student->number = $request->number;
       
        if ($student->save()) {
            return response()->json(['success' => true, 'message' => 'Student updated successfully']);
        }
    }
    return response()->json(['success' => false, 'message' => 'Failed to update student']);
}
}
