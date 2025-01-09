<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\reveuse;

class reveuseController extends Controller
{
    public function reveuse(Request $request)
    {      
            $imagePath = $request->file('image')->store('uploads_9', 'public');
            
        $items = new reveuse();
        $items->title = $request->title;
        $items->description = $request->description;
        $items->image = $imagePath; 
        $items->save();
        return redirect('reveuse')->with('success', 'User registered successfully!');
    }

    public function reveuse2()
    {
        $studentdata = reveuse::all();
        return view('reveuse', ['reveuse' => $studentdata]);
    }


    function reveusendelete($id)
    {
        $isdeleted = reveuse::destroy(($id));
        if ($isdeleted) {
            return redirect('reveuse');
        } else {
            return 'no deleted record';
        }
    }

    public function reveusernedit($id)
    {
        $student = reveuse::find($id);
        if ($student) {
            return response()->json(['data' => $student]);
        }
        return response()->json(['error' => 'Data not found'], 404);
    }


    public function editreveuse(Request $request, $id)
    {
    $student = reveuse::find($id);
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
