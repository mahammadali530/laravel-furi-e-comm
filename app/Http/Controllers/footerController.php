<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\footer;


class footerController extends Controller
{
    public function footer(Request $request)
    {      
            $imagePath = $request->file('image')->store('uploads_7', 'public');
            
        $items = new footer();
        $items->image = $imagePath; 
        $items->save();
        return redirect('footerr')->with('success', 'User registered successfully!');
    }

    public function footer2()
    {
        $studentdata = footer::all();
        return view('footerr', ['footer' => $studentdata]);
    }


    function footerdelete($id)
    {
        $isdeleted = footer::destroy(($id));
        if ($isdeleted) {
            return redirect('footerr');
        } else {
            return 'no deleted record';
        }
    }

    public function footeredit($id)
    {
        $student = footer::find($id);
        if ($student) {
            return response()->json(['data' => $student]);
        }
        return response()->json(['error' => 'Data not found'], 404);
    }


    public function editfooter(Request $request, $id)
    {
    $student = footer::find($id);
    if ($student) {
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
