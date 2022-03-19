<?php

namespace App\Http\Controllers\Pharmacy;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\ProductType;

class PharmacyAddMedicineController extends Controller
{

    public function index(){
        $types = ProductType::all();
        return view('pharmacy.addmedicine',['types'=>$types]);
    }

    public function add_product(Request $request)
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
                // dd('nullhere');
                // Session::flash('message', 'This is a message!'); 
            dd('something MISSED');
                return back()
            ->with('message','Fill up the form completely.');
        }

        $product = New Product();
        $product->name  = $request->name;
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
        // $product->Manufacture  = $request->Manufacture;
        // dd($product->product_id);
         //for image
         $request->validate([
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);
    
        $imageName = time().'.'.$request->image->extension();  
     
        // $request->image->move(public_path('images/product_images'), $imageName);
        $request->image->move(('images/product_images'), $imageName);

        /* Store $imageName name in DATABASE from HERE */
        $product->image = $imageName ;

        $product->timestamps = false;
        $product->save();
        // dd($product);
        return back()
        ->with('message_success','Variant Successfuly Updated');
        // dd('added');

    }

    public function add_product_API(Request $request)
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
                // dd('nullhere');
                // Session::flash('message', 'This is a message!'); 
                return 0;
            dd('something MISSED');
                return back()
            ->with('message','Fill up the form completely.');
        }

        $product = New Product();
        $product->name  = $request->name;
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
        // $product->Manufacture  = $request->Manufacture;
        // dd($product->product_id);
         //for image
         $request->validate([
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);
    
        $imageName = time().'.'.$request->image->extension();  
     
        // $request->image->move(public_path('images/product_images'), $imageName);
        $request->image->move(('images/product_images'), $imageName);

        /* Store $imageName name in DATABASE from HERE */
        $product->image = $imageName ;

        $product->timestamps = false;
        $product->save();
        // dd($product);
        return 1;
        // return back()
        // ->with('message_success','Variant Successfuly Updated');
        // // dd('added');

    }

    public function delete_product($id)
    {


        // try {

            // dd('hi');
            // $product = Product::find($id);
            $product = Product::where('id',$id)->first();
            // dd($product);    //GETTING PRODUCT
            $product->deleted = 1;
            // dd($product); 
            $product->timestamps = false;
            // $product->update();
            $product->save();
            return back()
            ->with('message_success','Variant Successfuly Updated');

        // } catch (Throwable $e) {
        //     report($e);
     
        //     return false;
        // }

    }

    public function delete_product_API($id)
    {


        // try {

            // dd('hi');
            // $product = Product::find($id);
            $product = Product::where('id',$id)->first();
            // dd($product);    //GETTING PRODUCT
            $product->deleted = 1;
            // dd($product); 
            $product->timestamps = false;
            // $product->update();
            $product->save();
            return \Response::json(['Success'=>'DELETED']);
            // return 1;
            // return back()
            // ->with('message_success','Variant Successfuly Updated');

        // } catch (Throwable $e) {
        //     report($e);
     
        //     return false;
        // }

    }

    public function add_category(Request $request)
    {
        // dd($request);
        $cat = new ProductType();
        $cat->name = $request->name;
        $cat->save();
        
        return back()
        ->with('message_success','Variant Successfuly Updated');

    }

    public function add_category_API(Request $request)
    {
        // dd('hi');
        dd($request);
        $cat = new ProductType();
        $cat->name = $request->name;
        $cat->save();
        
        return \Response::json(['Success'=>'ADDED']);

    }
    
}
