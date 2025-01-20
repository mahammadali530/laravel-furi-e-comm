<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\modern;

class modernController extends Controller
{
    public function modern(Request $request)
    {      
        $request->validate([
            'title'       => 'required|string|max:255',
            'description' => 'required|string|max:1000',
            'image'       => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'image_1'     => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'image_2'     => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $imagePath1 = $request->file('image')->store('uploads_8', 'public');
        $imagePath2 = $request->file('image_1')->store('uploads_8', 'public');
        $imagePath3 = $request->file('image_2')->store('uploads_8', 'public');
            
        $items = new modern();
        $items->title = $request->title;
        $items->description = $request->description;
        $items->image = $imagePath1; 
        $items->image_1 = $imagePath2; 
        $items->image_2 = $imagePath3; 
        $items->save();
        return redirect('modern')->with('success', 'User registered successfully!');
    }

    public function modern2()
    {
        $studentdata = modern::all();
        return view('modern', ['modern' => $studentdata]);
    }


    function morderndelete($id)
    {
        $isdeleted = modern::destroy(($id));
        if ($isdeleted) {
            return redirect('modern');
        } else {
            return 'no deleted record';
        }
    }

    public function mordernedit($id)
    {
        $student = modern::find($id);
        if ($student) {
            return response()->json(['data' => $student]);
        }
        return response()->json(['error' => 'Data not found'], 404);
    }


    public function editmordern(Request $request, $id)
{
    $student = modern::find($id);
    if ($student) {
        $student->title = $request->title;
        $student->description = $request->description;

        
        if ($request->hasFile('image')) {
            if ($student->image && file_exists(storage_path('app/public/' . $student->image))) {
                unlink(storage_path('app/public/' . $student->image));
            }
            $student->image = $request->file('image')->store('images', 'public');
        }

      
        if ($request->hasFile('image_1')) {
            if ($student->image_1 && file_exists(storage_path('app/public/' . $student->image_1))) {
                unlink(storage_path('app/public/' . $student->image_1));
            }
            $student->image_1 = $request->file('image_1')->store('images', 'public');
        }

        
        if ($request->hasFile('image_2')) {
            if ($student->image_2 && file_exists(storage_path('app/public/' . $student->image_2))) {
                unlink(storage_path('app/public/' . $student->image_2));
            }
            $student->image_2 = $request->file('image_2')->store('images', 'public');
        }

        if ($student->save()) {
            return response()->json(['success' => true, 'message' => 'Student updated successfully']);
        }
    }

    return response()->json(['success' => false, 'message' => 'Failed to update student']);
}

}
