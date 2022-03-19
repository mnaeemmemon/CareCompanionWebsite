<?php

namespace App\Http\Controllers\Pharmacy;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Order;
use App\Models\Product;
use App\Models\OrderDetails;
// use App\Http\Facades\DB;
use Illuminate\Support\Facades\DB;

class PharmacysalesorController extends Controller
{
    public function index()
    {
        // dd(DB::table('orderdetails')
        // ->select('id')
        // ->groupBy('product_ID')
        // ->orderByRaw('COUNT(*) DESC')
        // ->limit(1)
        // ->get());
        // dd(DB::table('orderdetails')->count
        // );

        // $data = DB::table('orderdetails')
        // ->select('id', 'COUNT(product_ID) AS occurrences')
        // ->groupBy('product_ID')
        // ->orderBy('occurrences', 'DESC')
        // ->limit(10)
        // ->get();

        // dd(DB::table('orderdetails')
        // ->select('id', 'COUNT(product_ID) AS occurrences')
        // ->groupBy('product_ID')
        // ->orderBy('occurrences', 'DESC')
        // ->limit(10)
        // ->get());

        // $users = DB::select('select product_ID from orderdetails');
        $users = DB::select('select * from orderdetails');
        $array = array();
        // for($i=0; $i < 2;$i++)
        // {
        //     array_push($array,$users[$i]->product_ID);
        //     // $array = $users[$i]->product_ID;
        // }

        // dd($users);

        foreach($users as $U)
        {
            array_push($array,$U->product_ID);
        }
        // dd($array);
        
        $values = array_count_values($array);
        arsort($values);
        $popular = array_slice(array_keys($values), 0, 5, true);


        $prod0 = array();
        $prod1 = array();
        $prod2 = array();

        if(count($popular) == 1)
        {
            // dd('2');
            // dd(Product::find($popular[0]));
            $this->prod0 = Product::find($popular[0]);
           
            // $prod1 = Product::find($popular[1]);
        }
        // dd($this->prod0);
        if(count($popular) == 2)
        {
            // dd('2');
            // dd(Product::find($popular[0]));
            $prod0 = Product::find($popular[0]);
            $prod1 = Product::find($popular[1]);
            // dd($prod[0]);
        }

        if(count($popular) == 3)
        {
            // dd('2');
            // dd(Product::find($popular[0]));
            $prod0 = Product::find($popular[0]);
            $prod1 = Product::find($popular[1]);
            $prod2 = Product::find($popular[2]);
        }
        $prods = array();
        array_push($prods,$prod0,$prod1,$prod2);
        $count = count($popular);
        // dd(count($popular));
        // dd($prods[0]);
        


        // dd($popular);
        // dd($users);
        // dd($users[0]->product_ID);
        // dd(DB::select('select product_ID from orderdetails'));

        return view('pharmacy.salesor',['popular'=>$popular, 'prods' => $prods, 'count' => $count]);
    }
}
