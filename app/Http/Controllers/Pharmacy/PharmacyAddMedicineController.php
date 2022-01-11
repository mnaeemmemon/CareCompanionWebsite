<?php

namespace App\Http\Controllers\Pharmacy;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PharmacyAddMedicineController extends Controller
{
    public function index(){
        return view('pharmacy.addmedicine');
    }
}
