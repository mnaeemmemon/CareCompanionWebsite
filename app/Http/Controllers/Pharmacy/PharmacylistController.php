<?php

namespace App\Http\Controllers\Pharmacy;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\ProductType;

class PharmacylistController extends Controller
{
    public function index(){
        // $products = Product::all();
        $products = Product::where('deleted','=',0)->get();
        // $product_types = ProductType::all();
        return view('pharmacy.list',['products' => $products]);
    }

    public function index_api(){
        // $products = Product::all();
        $products = Product::where('deleted','=',0)->get();
        // $product_types = ProductType::all();
        // dd(JSON.parse($products));
        // return response()->json;
        // return \Response::json(['success' => true,'products'=>$products]);
        return \Response::json(['products'=>$products]);
        // return $products;
    }
    
    // public function API_index()
    // {

    // }
}
