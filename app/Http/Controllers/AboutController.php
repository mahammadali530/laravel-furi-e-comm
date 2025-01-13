<?php

namespace App\Http\Controllers;

use App\Http\Controllers\AboutController;
use Illuminate\Http\Request;
use App\Models\About;

class AboutController extends Controller
{
        public function about(Request $request)
        {      
            $imagePath = $request->file('image')->store('uploads_1', 'public');
                
            $items = new About();
            $items->title = $request->title;
            $items->description = $request->description;
            $items->description_1 = $request->description_1;
            $items->description_2 = $request->description_3;
            $items->description_3 = $request->description_3;
            $items->description_4 = $request->description_4;
            $items->image = $imagePath; 
            $items->save();
            return redirect('aboutt')->with('success', 'User registered successfully!');
        }

            public function about2()
            {
                $studentdata = About::all();
                return view('aboutt', ['about' => $studentdata]);
            }


            function aboutdelete($id)
            {
                $isdeleted = About::destroy(($id));
                if ($isdeleted) {
                    return redirect('aboutt');
                } else {
                    return 'no deleted record';
                }
            }

            public function aboutedit($id)
            {
                $student = About::find($id);
                if ($student) {
                    return response()->json(['data' => $student]);
                }
                return response()->json(['error' => 'Data not found'], 404);
            }


                    public function editabout(Request $request, $id)
                    {
                    $student = About::find($id);
                    if ($student) {
                        $student->title = $request->title;
                        $student->description = $request->description;
                        $student->description_1 = $request->description_1;
                        $student->description_2 = $request->description_2;
                        $student->description_3 = $request->description_3;
                        $student->description_4 = $request->description_4;

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
