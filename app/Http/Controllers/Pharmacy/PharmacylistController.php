<?php

namespace App\Http\Controllers\Pharmacy;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PharmacylistController extends Controller
{
    public function index(){
        return view('pharmacy.list');
    }
}
