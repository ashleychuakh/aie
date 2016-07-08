<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get("/", [
  "as"   => "main",
  "uses" => "MainController@getMain"
]);

Route::get("/about", [
  "as"   => "about",
  "uses" => "MainController@getAbout"
]);

Route::get("/services", [
  "as"   => "services",
  "uses" => "MainController@getServices"
]);

Route::get("/packages", [
  "as"   => "packages",
  "uses" => "MainController@getPackages"
]);

Route::get("/materials", [
  "as"   => "materials",
  "uses" => "MainController@getMaterials"
]);

Route::get("/productdetails", [
  "as"   => "products",
  "uses" => "MainController@getProductDetails"
]);

Route::get("/products", [
  "as"   => "products",
  "uses" => "MainController@getProducts"
]);

Route::get("/faq", [
  "as"   => "faq",
  "uses" => "MainController@getFAQ"
]);

Route::get("/contact", [
  "as"   => "contact",
  "uses" => "MainController@getContact"
]);

Route::get("/signin", [
  "as"   => "signin",
  "uses" => "AccountController@getAccountSignin"
]);

Route::post("/signin", [
  "as"   => "signin",
  "uses" => "AccountController@postAccountSignin"
]);

Route::get("/signup", [
  "as"   => "signup",
  "uses" => "AccountController@getAccountSignup"
]);

Route::post("/signup", [
  "as"   => "signup",
  "uses" => "AccountController@postAccountSignup"
]);

Route::get("/signupinfo",[
  "as"   => "signupinfo",
  "uses" => "AccountController@getAccountSignupInfo"
]);

Route::get("/signout", [
  "as"   => "signout",
  "uses" => "AccountController@getAccountSignout"
]);

Route::get("/book", [
  "as"   => "book",
  "uses" => "BookingController@getBookAppointment"
]);

Route::get("/book2", [
  "as"   => "book2",
  "uses" => "BookingController@getBookAppointmentStep2"
]);

Route::get("/book3", [
  "as"   => "book3",
  "uses" => "BookingController@getBookAppointmentStep3"
]);

/*Route::resource('accounts', 'Admin\AccountController');

Route::resource('aircons', 'Admin\AirconController');

Route::resource('appointments', 'Admin\AppointmentController');

Route::resource('companies', 'Admin\CompanyController');

Route::resource('locations', 'Admin\LocationController');

Route::resource('roles', 'Admin\RoleController');

Route::resource('transactions', 'Admin\TransactionController');*/

Route::get('admin/transactions', ['as'=> 'admin.transactions.index', 'uses' => 'Admin\TransactionController@index']);
Route::post('admin/transactions', ['as'=> 'admin.transactions.store', 'uses' => 'Admin\TransactionController@store']);
Route::get('admin/transactions/create', ['as'=> 'admin.transactions.create', 'uses' => 'Admin\TransactionController@create']);
Route::put('admin/transactions/{transactions}', ['as'=> 'admin.transactions.update', 'uses' => 'Admin\TransactionController@update']);
Route::patch('admin/transactions/{transactions}', ['as'=> 'admin.transactions.update', 'uses' => 'Admin\TransactionController@update']);
Route::delete('admin/transactions/{transactions}', ['as'=> 'admin.transactions.destroy', 'uses' => 'Admin\TransactionController@destroy']);
Route::get('admin/transactions/{transactions}', ['as'=> 'admin.transactions.show', 'uses' => 'Admin\TransactionController@show']);
Route::get('admin/transactions/{transactions}/edit', ['as'=> 'admin.transactions.edit', 'uses' => 'Admin\TransactionController@edit']);


Route::get('admin/accounts', ['as'=> 'admin.accounts.index', 'uses' => 'Admin\AccountController@index']);
Route::post('admin/accounts', ['as'=> 'admin.accounts.store', 'uses' => 'Admin\AccountController@store']);
Route::get('admin/accounts/create', ['as'=> 'admin.accounts.create', 'uses' => 'Admin\AccountController@create']);
Route::put('admin/accounts/{accounts}', ['as'=> 'admin.accounts.update', 'uses' => 'Admin\AccountController@update']);
Route::patch('admin/accounts/{accounts}', ['as'=> 'admin.accounts.update', 'uses' => 'Admin\AccountController@update']);
Route::delete('admin/accounts/{accounts}', ['as'=> 'admin.accounts.destroy', 'uses' => 'Admin\AccountController@destroy']);
Route::get('admin/accounts/{accounts}', ['as'=> 'admin.accounts.show', 'uses' => 'Admin\AccountController@show']);
Route::get('admin/accounts/{accounts}/edit', ['as'=> 'admin.accounts.edit', 'uses' => 'Admin\AccountController@edit']);


Route::get('admin/aircons', ['as'=> 'admin.aircons.index', 'uses' => 'Admin\AirconController@index']);
Route::post('admin/aircons', ['as'=> 'admin.aircons.store', 'uses' => 'Admin\AirconController@store']);
Route::get('admin/aircons/create', ['as'=> 'admin.aircons.create', 'uses' => 'Admin\AirconController@create']);
Route::put('admin/aircons/{aircons}', ['as'=> 'admin.aircons.update', 'uses' => 'Admin\AirconController@update']);
Route::patch('admin/aircons/{aircons}', ['as'=> 'admin.aircons.update', 'uses' => 'Admin\AirconController@update']);
Route::delete('admin/aircons/{aircons}', ['as'=> 'admin.aircons.destroy', 'uses' => 'Admin\AirconController@destroy']);
Route::get('admin/aircons/{aircons}', ['as'=> 'admin.aircons.show', 'uses' => 'Admin\AirconController@show']);
Route::get('admin/aircons/{aircons}/edit', ['as'=> 'admin.aircons.edit', 'uses' => 'Admin\AirconController@edit']);


Route::get('admin/appointments', ['as'=> 'admin.appointments.index', 'uses' => 'Admin\AppointmentController@index']);
Route::post('admin/appointments', ['as'=> 'admin.appointments.store', 'uses' => 'Admin\AppointmentController@store']);
Route::get('admin/appointments/create', ['as'=> 'admin.appointments.create', 'uses' => 'Admin\AppointmentController@create']);
Route::put('admin/appointments/{appointments}', ['as'=> 'admin.appointments.update', 'uses' => 'Admin\AppointmentController@update']);
Route::patch('admin/appointments/{appointments}', ['as'=> 'admin.appointments.update', 'uses' => 'Admin\AppointmentController@update']);
Route::delete('admin/appointments/{appointments}', ['as'=> 'admin.appointments.destroy', 'uses' => 'Admin\AppointmentController@destroy']);
Route::get('admin/appointments/{appointments}', ['as'=> 'admin.appointments.show', 'uses' => 'Admin\AppointmentController@show']);
Route::get('admin/appointments/{appointments}/edit', ['as'=> 'admin.appointments.edit', 'uses' => 'Admin\AppointmentController@edit']);


Route::get('admin/companies', ['as'=> 'admin.companies.index', 'uses' => 'Admin\CompanyController@index']);
Route::post('admin/companies', ['as'=> 'admin.companies.store', 'uses' => 'Admin\CompanyController@store']);
Route::get('admin/companies/create', ['as'=> 'admin.companies.create', 'uses' => 'Admin\CompanyController@create']);
Route::put('admin/companies/{companies}', ['as'=> 'admin.companies.update', 'uses' => 'Admin\CompanyController@update']);
Route::patch('admin/companies/{companies}', ['as'=> 'admin.companies.update', 'uses' => 'Admin\CompanyController@update']);
Route::delete('admin/companies/{companies}', ['as'=> 'admin.companies.destroy', 'uses' => 'Admin\CompanyController@destroy']);
Route::get('admin/companies/{companies}', ['as'=> 'admin.companies.show', 'uses' => 'Admin\CompanyController@show']);
Route::get('admin/companies/{companies}/edit', ['as'=> 'admin.companies.edit', 'uses' => 'Admin\CompanyController@edit']);


Route::get('admin/locations', ['as'=> 'admin.locations.index', 'uses' => 'Admin\LocationController@index']);
Route::post('admin/locations', ['as'=> 'admin.locations.store', 'uses' => 'Admin\LocationController@store']);
Route::get('admin/locations/create', ['as'=> 'admin.locations.create', 'uses' => 'Admin\LocationController@create']);
Route::put('admin/locations/{locations}', ['as'=> 'admin.locations.update', 'uses' => 'Admin\LocationController@update']);
Route::patch('admin/locations/{locations}', ['as'=> 'admin.locations.update', 'uses' => 'Admin\LocationController@update']);
Route::delete('admin/locations/{locations}', ['as'=> 'admin.locations.destroy', 'uses' => 'Admin\LocationController@destroy']);
Route::get('admin/locations/{locations}', ['as'=> 'admin.locations.show', 'uses' => 'Admin\LocationController@show']);
Route::get('admin/locations/{locations}/edit', ['as'=> 'admin.locations.edit', 'uses' => 'Admin\LocationController@edit']);


Route::get('admin/roles', ['as'=> 'admin.roles.index', 'uses' => 'Admin\RoleController@index']);
Route::post('admin/roles', ['as'=> 'admin.roles.store', 'uses' => 'Admin\RoleController@store']);
Route::get('admin/roles/create', ['as'=> 'admin.roles.create', 'uses' => 'Admin\RoleController@create']);
Route::put('admin/roles/{roles}', ['as'=> 'admin.roles.update', 'uses' => 'Admin\RoleController@update']);
Route::patch('admin/roles/{roles}', ['as'=> 'admin.roles.update', 'uses' => 'Admin\RoleController@update']);
Route::delete('admin/roles/{roles}', ['as'=> 'admin.roles.destroy', 'uses' => 'Admin\RoleController@destroy']);
Route::get('admin/roles/{roles}', ['as'=> 'admin.roles.show', 'uses' => 'Admin\RoleController@show']);
Route::get('admin/roles/{roles}/edit', ['as'=> 'admin.roles.edit', 'uses' => 'Admin\RoleController@edit']);
