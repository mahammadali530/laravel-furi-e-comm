<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
//use App\Models\order;
use App\Models\order;
class ordersController extends Controller
{
        public function ordersall()
        {
            
            $orders = Order::all(); 
            return view('Customer', ['orders' => $orders]);
        }
        function orderdelete($id)
        {
            $isdeleted = order::destroy(($id));
            if ($isdeleted) {
                return redirect('Customer');
            } else {
                return 'no deleted record';
            }
        }

        public function orderedit($id)
        {
            $student = order::find($id);
            if ($student) {
                return response()->json(['data' => $student]);
            }
            return response()->json(['error' => 'Data not found'], 404);
        }


        public function editorder(Request $request, $id)
        {
        $student = order::find($id);
        if ($student) {
            $student->c_fname = $request->c_fname;
            $student->c_lname = $request->c_lname;
            $student->c_companyname = $request->c_companyname;
            $student->c_address = $request->c_address;
            $student->c_state_country = $request->c_state_country;
            $student->c_postal_zip = $request->c_postal_zip;
            $student->c_email_address = $request->c_email_address;
            $student->c_phone = $request->c_phone;
            
            }
            if ($student->save()) {
                return response()->json(['success' => true, 'message' => 'Student updated successfully']);
            }
        }

}
