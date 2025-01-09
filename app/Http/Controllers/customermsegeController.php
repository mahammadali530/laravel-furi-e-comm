<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\messge;
class customermsegeController extends Controller
{
    public function messgeall()
{
    
    $orders = messge::all(); 
    return view('customer_masge', ['messge' => $orders]);
}
function massgedelete($id)
{
    $isdeleted = messge::destroy(($id));
    if ($isdeleted) {
        return redirect('customer_masge');
    } else {
        return 'no deleted record';
    }
}

public function massgeedit($id)
{
    $student = messge::find($id);
    if ($student) {
        return response()->json(['data' => $student]);
    }
    return response()->json(['error' => 'Data not found'], 404);
}


public function editmssage(Request $request, $id)
{
$student = messge::find($id);
if ($student) {
    $student->name = $request->name;
    $student->l_name = $request->l_name;
    $student->email = $request->email;
    $student->messge = $request->messge;
    
    }
    if ($student->save()) {
        return response()->json(['success' => true, 'message' => 'Message Add successfully']);
    }
}


}
