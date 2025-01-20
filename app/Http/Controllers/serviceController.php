<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\service;


class serviceController extends Controller
{
    public function service(Request $request)
    {      
        $request->validate([
            'title'       => 'required|string|max:255',
            'description' => 'required|string|max:1000',
            'image'       => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);
        
            $imagePath = $request->file('image')->store('uploads_3', 'public');
            
        $items = new service();
        $items->title = $request->title;
        $items->description = $request->description;
        $items->image = $imagePath; 
        $items->save();
        return redirect('service')->with('success', 'User registered successfully!');
    }

    public function service2()
    {
        $studentdata = service::all();
        return view('service', ['service' => $studentdata]);
    }


    function servicedelete($id)
    {
        $isdeleted = service::destroy(($id));
        if ($isdeleted) {
            return redirect('service');
        } else {
            return 'no deleted record';
        }
    }

    public function serviceedit($id)
    {
        $student = service::find($id);
        if ($student) {
            return response()->json(['data' => $student]);
        }
        return response()->json(['error' => 'Data not found'], 404);
    }


    public function editservice(Request $request, $id)
    {
    $student = service::find($id);
    if ($student) {
        $student->title = $request->title;
        $student->description = $request->description;
        if ($request->hasFile('image')) {
            if ($student->image && file_exists(storage_path('app/public/' . $student->image))) {
                unlink(storage_path('app/public/' . $student->image));
            }
            $path = $request->file('image')->store('images', 'public');
            $student->image = $path;
        }
        if ($student->save()) {
            return response()->json(['success' => true, 'message' => 'Student updated successfully']);
        }
    }
    return response()->json(['success' => false, 'message' => 'Failed to update student']);
}
}
