<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Team;

class TeamController extends Controller
{
    public function team(Request $request)
    {      
         $imagePath = $request->file('image')->store('uploads_2', 'public');
            
        $items = new Team();
        $items->title = $request->title;
        $items->description = $request->description;
        $items->image = $imagePath; 
        $items->save();
        return redirect('Team')->with('success', 'User registered successfully!');
    }

    public function team2()
    {
        $student = Team::all();
        return view('Team', ['team' => $student]);
    }


    function teamdelete($id)
    {
        $isdeleted = Team::destroy(($id));
        if ($isdeleted) {
            return redirect('Team');
        } else {
            return 'no deleted record';
        }
    }

    public function teamedit($id)
    {
        $student = Team::find($id);
        if ($student) {
            return response()->json(['data' => $student]);
        }
        return response()->json(['error' => 'Data not found'], 404);
    }


    public function editteam(Request $request, $id)
    {
    $student = Team::find($id);
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
