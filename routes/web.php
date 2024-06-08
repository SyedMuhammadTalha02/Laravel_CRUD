<?php

use App\Http\Controllers\Customer_Controller;
use App\Http\Controllers\register;
use App\Models\Customer;
use Illuminate\Support\Facades\Route;
use Symfony\Component\HttpKernel\DependencyInjection\RegisterControllerArgumentLocatorsPass;

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

Route::get('/', function () {
    return view('welcome');
});
Route::get('/customer/create', [Customer_Controller::class, 'create'] );
// Route::get('/customer/create',function(){
//     return view('Customer');
//     // $customer = Customer::all();
//     // echo '<pre>';
//     // print_r($customer->toArray());
// });


Route::group(['prefix'=>'/customer'], function () {
    Route::get('view',[Customer_Controller::class, 'view'] );
    Route::get('trash',[Customer_Controller::class, 'trash'] );
    Route::post('/', [Customer_Controller::class, 'store']);
    Route::get('delete/{id}', [Customer_Controller::class, 'delete']);
    Route::get('force_delete/{id}', [Customer_Controller::class, 'force_delete']);
    Route::get('restore/{id}', [Customer_Controller::class, 'restore']);
    Route::get('edit/{id}', [Customer_Controller::class, 'edit']);
    Route::post( 'update/{id}', [Customer_Controller::class, 'update']);
    
});

Route::get('/register', [register::class, 'index']);
    Route::post('/register', [register::class, 'register']);

