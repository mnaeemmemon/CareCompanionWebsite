<?php

namespace App\Http\Controllers\Pharmacy;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Order;
use App\Models\OrderDetails;

class PharmacyDeliveryController extends Controller
{
    public function index()
    {
        $orders = Order::where('deleted',0)->get();

        $delivered = Order::where('delivery_status', 'delivered')->get();
        $initiated = Order::where('delivery_status', 'initiated')->get();
        $cancelled = Order::where('delivery_status', 'cancelled')->get();
        // dd($orders);
        return view('pharmacy.delivery',['orders'=>$orders,'delivered'=>$delivered, 'initiated' => $initiated, 'cancelled' =>$cancelled]);
        
        // return view('pharmacy.delivery');
    }

    public function index_API()
    {
        $orders = Order::where('deleted',0)->get();

        $delivered = Order::where('delivery_status', 'delivered')->get();
        $initiated = Order::where('delivery_status', 'initiated')->get();
        $cancelled = Order::where('delivery_status', 'cancelled')->get();


        return \Response::json(['orders'=>$orders,
                    'delivered'=>$delivered,
                    'initiated'=>$initiated,
                    'cancelled'=>$cancelled]);
        // dd($orders);
        // return view('pharmacy.delivery',['orders'=>$orders,'delivered'=>$delivered, 'initiated' => $initiated, 'cancelled' =>$cancelled]);
        
        // return view('pharmacy.delivery');
    }
}
