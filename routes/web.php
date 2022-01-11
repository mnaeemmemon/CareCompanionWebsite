<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Admin\AdminchatController;
use App\Http\Controllers\Admin\AdmindeliveryController;
use App\Http\Controllers\Admin\AdmindetailsController;
use App\Http\Controllers\Admin\AdminhomeController;
use App\Http\Controllers\Admin\AdminuserController;
use App\Http\Controllers\Admin\AdminloginController;
use App\Http\Controllers\Admin\AdminnotificationsController;
use App\Http\Controllers\Admin\AdminordersController;
use App\Http\Controllers\Admin\AdminorderdetailsController;
use App\Http\Controllers\Admin\AdminpharmacyController;
use App\Http\Controllers\Admin\AdminproductsController;
use App\Http\Controllers\Admin\AdminresetpasswordController;
use App\Http\Controllers\Admin\AdminsettingsController;
use App\Http\Controllers\Admin\AdminsignupController;

use App\Http\Controllers\Pharmacy\PharmacyaccsetController;
use App\Http\Controllers\Pharmacy\PharmacyAddCategoryController;
use App\Http\Controllers\Pharmacy\PharmacyAddMedicineController;
use App\Http\Controllers\Pharmacy\PharmacyChatController;
use App\Http\Controllers\Pharmacy\PharmacyDeliveryController;
use App\Http\Controllers\Pharmacy\PharmacyHomeController;
use App\Http\Controllers\Pharmacy\PharmacyinvoiceController;
use App\Http\Controllers\Pharmacy\PharmacylistController;
use App\Http\Controllers\Pharmacy\PharmacyslipController;
use App\Http\Controllers\Pharmacy\Pharmacyorderdetails2Controller;
use App\Http\Controllers\Pharmacy\PharmacynotificationsController;
use App\Http\Controllers\Pharmacy\PharmacyresetpasswordController;
use App\Http\Controllers\Pharmacy\PharmacysalesController;
use App\Http\Controllers\Pharmacy\PharmacysalesorController;
use App\Http\Controllers\Pharmacy\PharmacysignupController;
use App\Http\Controllers\Pharmacy\PharmacyupdatemedicineController;



/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [AdminloginController::class, "index"]);
Route::get('/adminchat', [AdminchatController::class, "index"]);
Route::get('/admindelivery', [AdmindeliveryController::class, "index"]);
Route::get('/admindetails', [AdmindetailsController::class, "index"]);
Route::get('/adminhome', [AdminhomeController::class, "index"]);
Route::get('/adminnotifications', [AdminnotificationsController::class, "index"]);
Route::get('/adminorders', [AdminordersController::class, "index"]);
Route::get('/orderdetails', [AdminorderdetailsController::class, "index"]);
Route::get('/adminpharmacy', [AdminpharmacyController::class, "index"]);
Route::get('/adminproducts', [AdminproductsController::class, "index"]);
Route::get('/adminresetpassword', [AdminresetpasswordController::class, "index"]);
Route::get('/adminsettings', [AdminsettingsController::class, "index"]);
Route::get('/adminsignup', [AdminsignupController::class, "index"]);
Route::get('/adminuser', [AdminuserController::class, "index"]);


Route::get('/pharmacyaccset', [PharmacyaccsetController::class, "index"]);
Route::get('/pharmacyaddcategory', [PharmacyAddCategoryController::class, "index"]);
Route::get('/pharmacyaddmedicine', [PharmacyAddMedicineController::class, "index"]);
Route::get('/pharmacychat', [PharmacyChatController::class, "index"]);
Route::get('/pharmacydelivery', [PharmacyDeliveryController::class, "index"]);
Route::get('/pharmacyhome', [PharmacyHomeController::class, "index"]);
Route::get('/pharmacyinvoice', [PharmacyinvoiceController::class, "index"]);
Route::get('/pharmacynotifications', [PharmacynotificationsController::class, "index"]);
Route::get('/pharmacyresetpassword', [PharmacyresetpasswordController::class, "index"]);
Route::get('/pharmacysales', [PharmacysalesController::class, "index"]);
Route::get('/pharmacysalesor', [PharmacysalesorController::class, "index"]);
Route::get('/pharmacysignup', [PharmacysignupController::class, "index"]);
Route::get('/pharmacylist', [PharmacylistController::class, "index"]);
Route::get('/pharmacyslip', [PharmacyslipController::class, "index"]);
Route::get('/orderdetails2', [Pharmacyorderdetails2Controller::class, "index"]);
Route::get('/pharmacyupdatemedicine', [PharmacyupdatemedicineController::class, "index"]);