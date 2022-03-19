<?php

namespace App\Http\Controllers\Pharmacy;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\ProductType;

class PharmacyupdatemedicineController extends Controller
{
    public function index($id)
    {
        // dd($id);
        $product = Product::find($id);
        $types = ProductType::all();
        return view('pharmacy.updatemedicine', ['product'=>$product,'types'=>$types]);
    }
    
    public function update_product(Request $request)
    {
        // dd($request->image);
        // dd($request->request);

        if($request->name == NULL
        || $request->productType_ID  == NULL
        || $request->gram == NULL
        || $request->Manufacture == NULL
        || $request->Formula == NULL
        || $request->Manufacturing_date == NULL
        || $request->Expiry_date == NULL
        || $request->Price == NULL
        || $request->SideEffects == NULL
        // || $request->image == NULL
        || $request->prescription_needed == NULL )
        {

            dd('something MISSED');
            //     return back()
            // ->with('message','Fill up the form completely.');
        }

        // $product = New Product();
        // dd($request->id);
        $product = Product::find($request->id);
        // dd($product);
        $product->name  = $request->name;
        // dd($product);
        // $product->timestamps = false;
        // $product->save();

        $product->productType_ID  = $request->productType_ID;
        $product->gram  = $request->gram;
        // dd($request->product_id);
        $product->Manufacture  = $request->Manufacture;

        $product->Formula  = $request->Formula;
        $product->Manufacturing_date  = $request->Manufacturing_date;
        $product->Expiry_date  = $request->Expiry_date;
        $product->Price  = $request->Price;
        $product->SideEffects  = $request->SideEffects;
        $product->prescription_needed  = $request->prescription_needed;

         //for image
        if($request->image)
        {
            $request->validate([
                'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            ]);
        
            $imageName = time().'.'.$request->image->extension();  
         
            // $request->image->move(public_path('images/product_images'), $imageName);
            $request->image->move(('images/product_images'), $imageName);
    
            /* Store $imageName name in DATABASE from HERE */
            $product->image = $imageName ;
        }

        $product->timestamps = false;
        $product->save();
        // dd($product);
        return back()
        ->with('message_success','Variant Successfuly Updated');
        // dd('updated');

    }

    public function update_product_API(Request $request, $id)
    {
        // dd($id);
        // dd($request->image);
        // dd($request->name);

        // if($request->name == NULL
        // || $request->productType_ID  == NULL
        // || $request->gram == NULL
        // || $request->Manufacture == NULL
        // || $request->Formula == NULL
        // || $request->Manufacturing_date == NULL
        // || $request->Expiry_date == NULL
        // || $request->Price == NULL
        // || $request->SideEffects == NULL
        // // || $request->image == NULL
        // || $request->prescription_needed == NULL )
        // {

        //     dd('something MISSED');
        //     //     return back()
        //     // ->with('message','Fill up the form completely.');
        // }

        // $product = New Product();
        // dd($request->id);
        // $product = Product::find($request->id);
        $product = Product::find($id);
        if($product == NULL)
        {
            // return 0;
            return \Response::json(['error'=>'No such product with this ID']);
        }
        // dd($product);

        if($request->productType_ID )
        {
            $product->productType_ID  = $request->productType_ID;
        }

        if($request->gram)
        {
            $product->gram  = $request->gram;
        }

        if($request->Manufacture)
        {
            $product->Manufacture  = $request->Manufacture;
        }


        
       
        
        
        
        

        if($request->Formula)
        {
            $product->Formula  = $request->Formula;
        }

        if($request->Manufacturing_date)
        {
            $product->Manufacturing_date  = $request->Manufacturing_date;
        }

        if($request->Expiry_date)
        {
            $product->Expiry_date  = $request->Expiry_date;
        }

        if($request->Price)
        {
            $product->Price  = $request->Price;
        }

        if($request->SideEffects)
        {
            $product->SideEffects  = $request->SideEffects;
        }

        if($request->prescription_needed)
        {
            $product->prescription_needed  = $request->prescription_needed;
        }

        if($request->name)
        {
            $product->name  = $request->name;
        }

        
        // dd($product);
        // $product->timestamps = false;
        // $product->save();

        
        
        // dd($request->product_id);
        

        

         //for image
        if($request->image)
        {
            $request->validate([
                'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            ]);
        
            $imageName = time().'.'.$request->image->extension();  
         
            // $request->image->move(public_path('images/product_images'), $imageName);
            $request->image->move(('images/product_images'), $imageName);
    
            /* Store $imageName name in DATABASE from HERE */
            $product->image = $imageName ;
        }

        $product->timestamps = false;
        // dd($product->name);
        $product->save();
        // dd($product);
        return \Response::json(['Success'=>'UPDATED']);
        // return $product;
        // return back()
        // ->with('message_success','Variant Successfuly Updated');
        // dd('updated');

    }
}
