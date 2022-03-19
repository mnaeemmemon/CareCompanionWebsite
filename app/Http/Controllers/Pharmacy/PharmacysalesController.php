<?php

namespace App\Http\Controllers\Pharmacy;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Order;


class PharmacysalesController extends Controller
{
    public function index(){
        // $orders = Order::all();
        $orders = Order::where('deleted',0)->get();

        $delievered = Order::where('status', 'delivered')->get();
        $pending = Order::where('status', 'pending')->get();
        $cancelled = Order::where('status', 'cancelled')->get();
        // dd($orders);
        return view('pharmacy.sales',['orders'=>$orders,'delievered'=>$delievered, 'pending' => $pending, 'cancelled' =>$cancelled]);
    }

    public function index_API(){
        // $orders = Order::all();
        $orders = Order::where('deleted',0)->get();

        $delievered = Order::where('status', 'delivered')->get();
        $pending = Order::where('status', 'pending')->get();
        $cancelled = Order::where('status', 'cancelled')->get();
        // dd($orders);
        return \Response::json(['orders'=>$orders,
        'delievered'=>$delievered,
        'pending'=>$pending,
        'cancelled'=>$cancelled,
            ]);



        // return view('pharmacy.sales',['orders'=>$orders,'delievered'=>$delievered, 'pending' => $pending, 'cancelled' =>$cancelled]);
    }

    public function delete_order($id)
    {
        $order = Order::find($id);
        $order->deleted = 1;
        $order->save();

        return back()
        ->with('message_success','Variant Successfuly Updated');
    }

    public function delete_order_API($id)
    {
        $order = Order::find($id);
        $order->deleted = 1;
        $order->save();

        return \Response::json(['Success'=>'DELETED']);

    }


}
