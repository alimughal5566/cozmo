<?php

use Illuminate\Http\Request;

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
header('Access-Control-Allow-Origin:  *');
header('Access-Control-Allow-Methods:  POST, GET, OPTIONS, PUT, DELETE , ANY');
header('Access-Control-Allow-Headers:  Content-Type, X-Auth-Token, Origin, Authorization , accept');
header('Access-Control-Allow-Credentials: true');


Route::group(['middleware' => 'auth:api'], function () {
   
    /// Messages 
    Route::post("messages" , "api\MessageController@messages");
    Route::post("message/send" , "api\MessageController@store");

    /// Friends 
  

    /// Partners 
    Route::post("partners" , "api\PartnerController@partners");

   
    // Rate Plan
    Route::post("plan/ratePlan" , "api\PlanController@ratePlan");

    /// Update Password 
    Route::post("user/update_password", "api\UserController@updatePassword");
    //Get credit cards
    Route::post("user/cards", "api\PackageController@getUserCards");
    // Make Payment 
    Route::post("user/makePayment", "api\PackageController@makePayment");
    Route::post("user/savePrivacy" , "api\PlanController@savePrivacy");
    Route::post("user/getPrivacy" , "api\PlanController@getPrivacy");
    Route::post("user/update_hint" , "api\UserController@update_hint");
    Route::post("user/removeProfilePhoto" , "api\UserController@removeProfilePhoto");
    Route::post("set_partners" , "api\PartnerController@set_partners");
    Route::get("get_partners" , "api\PartnerController@get_partners");
    // Cards
    Route::post("user/getCards" , "api\UserController@getCards");
    Route::post("user/deleteCard" , "api\UserController@deleteCard");
    //block or unblock friends
    Route::post("user/blockFriend" , "api\UserController@blockFriend");
    Route::post("user/unBlockFriend" , "api\UserController@unBlockFriend");

});

//// POst Payment 
Route::post("payment", "api\PackageController@PackagePayment");

 //// Packages 

Route::get("packages", "api\PackageController@getPackages");

	
///// User profile update
Route::post("user/get", "api\UserController@get");
Route::post("user/update", "api\UserController@update");

///// Forgot Password
Route::post('sendcode' , "api\UserController@varificationCode");
Route::post('varify_code' , "api\UserController@varifyCode");
Route::post('change_password' , "api\UserController@changePassword");
Route::post('upload_photo' , "api\UserController@uploadPhoto");

///// Email Testing
Route::get("testmail" , "api\UserController@testmail");

///// User login and register
Route::get("users", "api\UserController@index");
Route::post("login", "api\UserController@login");
Route::post("users", "api\UserController@store");

///// getting cities and airports list 
Route::post('cities' , 'api\CityController@cities');
Route::post('airports' , 'api\CityController@cityAirports');

//// User Plan Request  

Route::post("user/send_plan" , "api\PlanController@sendPlanRequest");
Route::post("user/accept_plan" , "api\PlanController@acceptRequest");
Route::post("user/plan_status" , "api\PlanController@changePlanStatus");
Route::post("user/plan_notifications" , "api\PlanController@PlanNotifications");
Route::post("user/plan_last" , "api\PlanController@PlanAcceptedRejected");

///// Friend and Guest Requests 
Route::post("user/friends", "api\FriendController@friends");
Route::post("user/search" , "api\FriendController@search");
Route::post("user/friend_request" , "api\FriendController@sendFriendRequest");

Route::post("user/friend_notifications" , "api\FriendController@friendNotifications");
Route::post("user/friendNotificationsSent" , "api\FriendController@friendNotificationsSent");
Route::post("user/accept_friend_request" , "api\FriendController@accepFriendRequest");
Route::post("user/unfriend" , "api\FriendController@unFriend");

/// Create Plan
Route::post("plan/create" , "api\PlanController@create");
Route::post("user/saved_plans" , "api\PlanController@saved_plans");
Route::post("user/recent_trips" , "api\PlanController@recent_trips");

Route::post("user/plans", "api\PlanController@getPlans");
 /// Get Plan
Route::post("plan/get", "api\PlanController@getPlan");

//// Get Invitation Email 
Route::post("user/invite" , "api\UserController@inviteEmail");

/// Get Hotels 
Route::post("city/hotels" , "api\WhatController@cityHotels");


//// Get Car List 
Route::post("cars/list" , "api\CarController@getCars");
Route::get("cars/categories" , "api\CarController@getCategories");