<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
//use App\Models\order;
use App\Models\order;
use Symfony\Component\HttpFoundation\StreamedResponse;

class ordersController extends Controller
{
        public function ordersall()
        {
            
            $orders = Order::all(); 
            return view('Customer', ['orders' => $orders]);
        }
        
        public function filter(Request $request){
            $start_date = $request->start_date;
            $end_date = $request->end_date;

            $order = Order::wheredate('created_at','>=',$start_date)
                ->whereDate('created_at','<=',$end_date)
                ->get();
                
            return view('Customer', ['orders' => $order]);

        }
        public function exportCSV(Request $request)
    {
        $start_date = $request->start_date;
        $end_date = $request->end_date;

        $orders = Order::whereDate('created_at', '>=', $start_date)
                    ->whereDate('created_at', '<=', $end_date)
                    ->get();

        $response = new StreamedResponse(function () use ($orders) {
            $handle = fopen('php://output', 'w');
            fputcsv($handle, ['ID', 'product_id', ' user_id', 'quantity','total_price',
            'payment_method','c_fname','c_lname','c_companyname','c_address','c_state_country',
            'c_postal_zip','c_email_address','c_phone','created_at',]);

            foreach ($orders as $order) {
                fputcsv($handle, [$order->id, $order->product_id, $order-> user_id, $order->quantity,  
                $order-> total_price, $order-> payment_method, $order-> c_fname, $order-> c_lname, $order-> c_companyname,
                 $order-> c_address, $order-> c_state_country, $order-> c_postal_zip, $order-> c_email_address, $order-> c_phone, 
                 $order-> created_at]);
            }

            fclose($handle);
        });

        $response->headers->set('Content-Type', 'text/csv');
        $response->headers->set('Content-Disposition', 'attachment; filename="filtered_orders.csv"');

        return $response;
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
