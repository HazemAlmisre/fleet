<?php

use App\Events\Hazem;
use App\Events\PushOrder;
use App\Events\SendOrderToDriverToAccept;
use App\Http\Controllers\RequestEmployeeController;
use App\PositionEmployee;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Str;
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


Auth::routes(['register' => false]);
Route::get('/otp-test',function(){
//User=uom424&Pass=mar141214&From=Fleet
$otp_code = rand(0, 999999);


        $response = Http::get('https://services.mtnsyr.com:7443/General/MTNSERVICES/ConcatenatedSender.aspx?User=uom424&Pass=mar141214&From=Fleet App&Gsm=963958623817&Msg=06270628062a&Lang=1');
    	$jsonData = $response->body();
        dd($jsonData);
});
Route::get('/',"HomeController@welcome")->name('welcome');
Route::get('/privacy_policy',"HomeController@Privacy_Policy")->name('privacy_policy');
Route::get('/change_language/{locale}','HomeController@changeLocale')->name('change_language');
Route::group(['middleware'=>['auth','isAdmin'],'prefix'=>'admin'],function(){
    Route::get('/home', 'HomeController@index')->name('home');
    //request_employee
    Route::get('/request/employee/index','RequestEmployeeController@index')->name('request_employee');
    Route::get('/request/employee/delete/{id}','RequestEmployeeController@destroy')->name('request_employee_delete');
    //Position
    Route::get('/position','PositionEmployeeController@index')->name('position');
    Route::get('/position/create','PositionEmployeeController@create')->name('position_create');
    Route::post('/position/store','PositionEmployeeController@store')->name('posistion_store');
    Route::get('/position/delete/{id}','PositionEmployeeController@delete')->name('position_delete');
    //Office
    Route::get('/offices','AdminController@Offices')->name('offices');
    Route::get('/offices/create','AdminController@OfficeCreate')->name('office_create');
    Route::post('/offices/store','AdminController@OfficeStore')->name('office_store');
    Route::get('/offices/{office}','AdminController@OfficeShow')->name('office_show');
    Route::get('/offices/{office}/edit','AdminController@OfficeEdit')->name('office_edit');
    Route::post('/offices/{office}/update','AdminController@OfficeUpdate')->name('office_update');
    Route::get('/offices/{office}/delete','AdminController@OfficeDelete')->name('office_delete');
    Route::get('/offices/{office}/drivers','AdminController@OfficeDrivers')->name('office_drivers');
    Route::get('/offices/{office}/vehicles','AdminController@OfficeVehicles')->name('office_vehilces');
    Route::get('/offices/{office}/earnings','AdminController@OfficeEarnings')->name('office_earnings');
    Route::get('/offices/{office}/orders','AdminController@OfficeOrders')->name('office_orders');
    Route::get('/offices/{office}/logs','AdminController@OfficeLogs')->name('office_logs');
    Route::get('/offices/{office}/getDriversLocations','AdminController@OfficeGetDriversLocations')->name('office_drivers_locations');
    Route::get('/AllGetDriversLocations','AdminController@AllGetDriversLocations')->name('all_drivers_locations');
    Route::get('/offices/{office}/enable','AdminController@OfficeEnable')->name('office_enable');
    Route::get('/offices/{office}/resetLimit','AdminController@OfficeResetLimit')->name('office_reset');
    Route::post('/offices/{office}/resetLimit','AdminController@OfficeResetLimitUpdate')->name('office_reset_post');
    //Driver
    Route::get('/drivers','AdminController@Drivers')->name('drivers');
    Route::get('/drivers/create','AdminController@DriverCreate')->name('driver_create');
    Route::post('/drivers/store','AdminController@DriverStore')->name('driver_store');
    Route::get('/drivers/{driver}','AdminController@DriverShow')->name('driver_show');
    Route::get('/drivers/{driver}/vehicle','AdminController@DriverVehicle')->name('driver_vehicle');
    Route::get('/drivers/{driver}/orders','AdminController@DriverOrders')->name('driver_orders');
    Route::get('/drivers/{driver}/earnings','AdminController@DriverEarnings')->name('driver_earnings');
    Route::get('/drivers/{driver}/rates','AdminController@DriverRates')->name('driver_rates');
    Route::get('/drivers/{driver}/logs','AdminController@DriverLog')->name('driver_log');
    Route::get('/drivers/{driver}/edit','AdminController@DriverEdit')->name('driver_edit');
    Route::post('/drivers/{driver}/update','AdminController@DriverUpdate')->name('driver_update');
    Route::get('/drivers/{driver}/delete','AdminController@DriverDelete')->name('driver_delete');
    Route::get('/drivers/{driver}/assaignModalContent','AdminController@DriverAssaignToVehicleModalContent')->name('driver_a_modal_cont');
    Route::post('/drivers/{driver}/setVehicleToDriver','AdminController@DriverSetVehicle')->name('driver_set_vehicle');
    //Customer
    Route::get('customers','AdminController@Customers')->name('customers');
    Route::get('customers/create','AdminController@CustomerCreate')->name('customer_create');
    Route::post('customers/store','AdminController@CustomerStore')->name('customer_store');
    Route::get('customers/{customer}','AdminController@CustomerView')->name('customer_view');
    Route::get('customers/{office}/edit','AdminController@CustomerEdit')->name('customer_edit');
    Route::get('customers/{customer}/send','AdminController@CustomerSend')->name('customer_send');
    Route::post('customers/{customer}/send_action','AdminController@CustomerSendAction')->name('customer_send_action');
    //Vehicle
    Route::get('vehicles','VehicleController@index')->name('vehicles');
    Route::get('vehicles/create','VehicleController@create')->name('vehicle_create');
    Route::post('vehicles/store','VehicleController@store')->name('vehicle_store');
    Route::get('vehicles/{vehicle}','VehicleController@view')->name('vehicle_view');
    Route::get('vehicles/{vehicle}/edit','VehicleController@edit')->name('vehicle_edit');
    Route::post('vehicles/{vehicle}/update','VehicleController@update')->name('vehicle_update');
    //Vehicle Types
    Route::get('vehicle_types','VehicleTypeController@index')->name('vehicle_types');
    Route::get('vehicle_types/create','VehicleTypeController@create')->name('vehicle_types_create');
    Route::post('vehicle_types/store','VehicleTypeController@store')->name('vehicle_types_store');
    Route::get('vehicle_types/{vehicleType}','VehicleTypeController@view')->name('vehicle_types_view');
    Route::get('vehicle_types/{vehicleType}/edit','VehicleTypeController@edit')->name('vehicle_types_edit');
    Route::post('vehicle_types/{vehicleType}/update','VehicleTypeController@update')->name('vehicle_types_update');
    //Vehicle Brands
    Route::get('vehicle_brands','VehicleBrandController@index')->name('vehicle_brands');
    Route::get('vehicle_brands/create','VehicleBrandController@create')->name('vehicle_brands_create');
    Route::post('vehicle_brands/store','VehicleBrandController@store')->name('vehicle_brands_store');
    Route::get('vehicle_brands/{vehicleBrand}','VehicleBrandController@view')->name('vehicle_brands_view');
    Route::get('vehicle_brands/{vehicleBrand}/edit','VehicleBrandController@edit')->name('vehicle_brands_edit');
    Route::post('vehicle_brands/{vehicleBrand}/update','VehicleBrandController@update')->name('vehicle_brands_update');
    //Wallets
    Route::get('wallets','WalletController@index')->name('wallets');
    Route::get('wallets/{wallet}','WalletController@show')->name('wallet_show');

    //Order
    Route::get('orders','AdminController@Orders')->name('orders');
    Route::get('orders/manual','AdminController@OrderCreateManual')->name('order_manual');
    Route::get('orders/{order}/show','AdminController@OrderShow')->name('order_show');
    Route::get('orders/{order}/invoice','AdminController@OrderInvoice')->name('order_invoice');
    //Coupon
    Route::get('coupon','AdminController@Coupons')->name('coupons');
    Route::get('coupon/create','AdminController@CouponCreate')->name('coupon_create');
    Route::post('coupon/store','AdminController@CouponStore')->name('coupon_store');
    Route::get('coupon/edit/{coupon}','AdminController@CouponEdit')->name('coupon_edit');
    Route::post('coupon/update/{coupon}','AdminController@CouponUpdate')->name('coupon_update');
    Route::post('coupon/delete/{coupon}','AdminController@CouponDelete')->name('coupon_delete');
    //Travel Mode
    //General Settings
    Route::get('general_settings','GeneralSettingController@index')->name('general_settings');
    Route::post('general_settings/update','GeneralSettingController@update')->name('general_settings_update');
    //Website Settings
    Route::get('website_settings','WebsiteSettingController@index')->name('website_settings');
    Route::post('website_settings/update','WebsiteSettingController@update')->name('website_settings_update');

    Route::get('homepage_settings','HomePageSettingController@index')->name('homepage_settings');
    Route::get('fleet_earnings','AdminController@FleetEarnings')->name('fleet_earnings');

});

Route::group(['middleware'=>'auth','as'=>'office.','prefix'=>'office'],function(){
    Route::get('/dashboard','OfficeController@dashboard')->name('office_dashboard');
    Route::get('/profile','OfficeController@profile')->name('profile');
    Route::post('/profile/update','OfficeController@ProfileUpdate')->name('profile_update');
    Route::get('/drivers','OfficeController@Drivers')->name('drivers');
    Route::get('/drivers/create','OfficeController@DriverCreate')->name('driver_create');
    Route::post('/drivers/store','OfficeController@DriverStore')->name('driver_store');
    Route::get('/drivers/{id}','OfficeController@DriverView')->name('driver_view');
    Route::get('/drivers/{id}/edit','OfficeController@DriverEdit')->name('driver_edit');
    Route::post('/drivers/{id}/update','OfficeController@DriverUpdate')->name('driver_update');
    Route::get('/drivers/{id}/vehicle','OfficeController@DriverVehicle')->name('driver_vehicle');
    Route::get('/drivers/{id}/orders','OfficeController@DriverOrders')->name('driver_orders');
    Route::get('/drivers/{id}/rates','OfficeController@DriverRates')->name('driver_rates');
    Route::get('/drivers/{id}/delete','OfficeController@DriverDelete')->name('driver_delete');
    Route::get('/drivers/{id}/locate_on_map','OfficeController@LocateOnMap')->name('locate_on_map');
    Route::get('/drivers/{id}/logs','OfficeController@DriverLog')->name('driver_log');
    Route::get('/drivers/{id}/assaignModalContent','OfficeController@DriverAssaignToVehicleModalContent')->name('driver_a_modal_cont');
    Route::post('/drivers/{id}/setVehicleToDriver','OfficeController@DriverSetVehicle')->name('driver_set_vehicle');
    Route::get('/getDriversLocations','OfficeController@GetDriversLocations')->name('drivers_locations');

    //Vehicles
    Route::get('/vehicles','OfficeController@Vehicles')->name('vehicles');
    Route::get('vehicles/create','OfficeController@VehicleCreate')->name('vehicle_create');
    Route::post('vehicles/store','OfficeController@VehcileStore')->name('vehicle_store');
    Route::get('vehicles/{id}','OfficeController@VehicleView')->name('vehicle_view');
    Route::get('vehicles/{id}/edit','OfficeController@VehicleEdit')->name('vehicle_edit');
    Route::post('vehicles/{id}/update','OfficeController@VehicleUpdate')->name('vehicle_update');

    //Orders
    Route::get('orders','OfficeController@Orders')->name('orders');
    Route::get('orders/manual','OfficeController@OrderCreateManual')->name('order_manual');
    Route::get('orders/{id}/show','OfficeController@OrderShow')->name('order_show');
    Route::post('orders/manual/step/1','OrderController@CreateOrderStep1')->name('order_step_1');
    Route::post('orders/manual/step/2','OrderController@CreateOrderStep2')->name('order_step_2');
    Route::post('orders/manual/step/3','OrderController@CreateOrderStep3')->name('order_step_3');
    Route::post('orders/manual/step/store','OrderController@StoreOrderStep')->name('order_step_store');
    Route::get('orders/{order}/invoice','AdminController@OrderInvoice')->name('order_invoice');
    //Travel Mode
    Route::get('travelMode','TravelModeController@index')->name('travel_modes');
    Route::get('travelMode/create','TravelModeController@create')->name('travel_mode_create');
    Route::post('travelMode/store','TravelModeController@store')->name('travel_mode_store');
    Route::get('travelMode/edit/{id}','TravelModeController@edit')->name('travel_mode_edit');
    Route::post('travelMode/update/{id}','TravelModeController@update')->name('travel_mode_update');
    Route::post('travelMode/delete/{id}','TravelModeController@delete')->name('travel_mode_delete');

    //Coupon
    Route::get('coupon','CouponController@index')->name('coupons');
    Route::get('coupon/create','CouponController@create')->name('coupon_create');
    Route::post('coupon/store','CouponController@store')->name('coupon_store');
    Route::get('coupon/edit/{id}','CouponController@edit')->name('coupon_edit');
    Route::post('coupon/update/{id}','CouponController@update')->name('coupon_update');
    Route::post('coupon/delete/{id}','CouponController@delete')->name('coupon_delete');
    // Wallet
    Route::get('wallet/','OfficeController@Wallet')->name('wallet');
    Route::get('log/','OfficeController@Log')->name('log');




});

// Route::prefix('landing')->group(function () {
//     Route::get('/aboutapp',function () { return view('landing-final.aboutapp'); })->name('aboutapp');
//     Route::get('/Safety',function () { return view('landing-final.Safety'); })->name('safety');
//     Route::get('/policy',function () { return view('landing-final.policy'); })->name('policy');
//     Route::get('/classic',function () { return view('landing-final.classic'); })->name('classic');
//     Route::get('/apply',function () {

//         $positions=PositionEmployee::query()->get();
//         return view('landing-final.apply')->with("positions",$positions);
//     })->name('apply');
// });

// Route::group(["prefix" => "request_employee"],function () {
//     Route::post('store',[RequestEmployeeController::class, "store"])->name('request_employee.store');

// });
// Route::get("test",function(){
//     event(new SendOrderToDriverToAccept([[
//         "orderId" => "346",
//         "model" => "Order",
//         "action" => "U",
//         "orderStatus" => 0,
//         "meta" => [
//             "driver_id" => (int)null,
//             "customer_id" => (int)null
//         ]
//         ],6]));
// });
