<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\blog;


class blogController extends Controller
{
    public function blog(Request $request)
    {      
        $request->validate([
            'description' => 'required|string|max:1000',
            'image'       => 'required|image|mimes:jpeg,png,jpg,gif|max:2048'
        ]);
        
            $imagePath = $request->file('image')->store('uploads_4', 'public');
            
        $items = new blog();
        $items->description = $request->description;
        $items->image = $imagePath; 
        $items->save();
        return redirect('blogg')->with('success', 'User registered successfully!');
    }

    public function blog2()
    {
        $studentdata = blog::all();
        return view('blogg', ['blog' => $studentdata]);
    }


    function blogdelete($id)
    {
        $isdeleted = blog::destroy(($id));
        if ($isdeleted) {
            return redirect('blogg');
        } else {
            return 'no deleted record';
        }
    }

    public function blogedit($id)
    {
        $student = blog::find($id);
        if ($student) {
            return response()->json(['data' => $student]);
        }
        return response()->json(['error' => 'Data not found'], 404);
    }


    public function editblog(Request $request, $id)
    {
    $student = blog::find($id);
    if ($student) {
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
