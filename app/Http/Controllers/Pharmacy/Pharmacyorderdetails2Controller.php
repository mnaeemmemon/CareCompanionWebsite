<?php

namespace App\Http\Controllers\Pharmacy;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Order;
use App\Models\OrderDetails;

class Pharmacyorderdetails2Controller extends Controller
{
    public function index($id)
    {
        // dd($id);
        $orderDetails = OrderDetails::where('Order_ID',$id)->get();
        // dd($orderDetails);
        return view('pharmacy.orderdetails2',['orderDetails'=>$orderDetails]);
    }

    public function index_API($id)
    {
        // dd($id);
        $orderDetails = OrderDetails::where('Order_ID',$id)->get();
        // dd(OrderDetails::all());
        // dd($orderDetails);
        return \Response::json(['orderDetails'=>$orderDetails]);
        // return view('pharmacy.orderdetails2',['orderDetails'=>$orderDetails]);
    }
}
