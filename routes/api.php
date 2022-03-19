<?php

use Illuminate\Http\Request;
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

use App\Http\Controllers\CartController;


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
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});


//PRODUCT IN PHARMACY
// Route::post('/pharmacyaddmedicine', [PharmacyAddMedicineController::class, "add_product"]);
Route::post('/pharmacyaddmedicine', [PharmacyAddMedicineController::class, "add_product_API"]); // API


// Route::post('/pharmacyUPDATEproduct', [PharmacyupdatemedicineController::class, "update_product"]);
Route::post('/pharmacyUPDATEproduct/{id}', [PharmacyupdatemedicineController::class, "update_product_API"]); // API

// Route::get('/pharmacyDeletemedicine/{id}',[PharmacyAddMedicineController::class, "delete_product"]);
Route::get('/pharmacyDeletemedicine/{id}',[PharmacyAddMedicineController::class, "delete_product_API"]);    //API

// Route::get('/pharmacylist', [PharmacylistController::class, "index"]);  //PRODUCT READ
Route::get('/pharmacylist', [PharmacylistController::class, "index_api"]);  //API


//ADD CATEGORY
Route::post('/add_category', [PharmacyAddMedicineController::class, "add_category_API"]);


//ORDER IN PHARMACY
Route::get('/pharmacysales', [PharmacysalesController::class, "index_API"]);    //CRUD OF ORDER
Route::get('/orderdetails_of_order_id_/{id}', [Pharmacyorderdetails2Controller::class, "index_API"]); //API
Route::get('/deleteOrder/{id}', [PharmacysalesController::class, "delete_order_API"]); //API

//CART IN PHARMACY
Route::post('/add_to_cart',[CartController::class, 'add_to_cart']); //API
Route::get('delete_to_cart/{id}',[CartController::class, 'delete_to_cart']);    //API



//DELIVERY IN PHARMACY
Route::get('/pharmacydelivery', [PharmacyDeliveryController::class, "index_API"]);



// Route::get('/pharmacylist', [PharmacylistController::class, "API_index"]);

// Route::post('/pharmacyaddmedicine', [PharmacyAddMedicineController::class, "add_product"]);