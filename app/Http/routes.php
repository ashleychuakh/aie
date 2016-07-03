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

Route::get("/signout", [
  "as"   => "signout",
  "uses" => "AccountController@getAccountSignout"
]);