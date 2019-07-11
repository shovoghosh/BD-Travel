<?php

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
    return redirect()->route('login');
});


//login

Route::get('/login','loginController@index')->name('login');
Route::post('/login','loginController@validation')->name('loginValidation');

//registration

Route::post('/registration','regController@store')->name('registration');

//checkSession

Route::group(['middleware'=>'checksession'],function(){

    //user

    Route::get('/userhome','userController@home')->name('user.home');
    Route::get('/about','userController@about')->name('user.about');
    Route::get('/blog','userController@blog')->name('user.blog');
    Route::get('/contact','userController@contact')->name('user.contact');
    Route::post('/contact','userController@sendmessage');
    Route::get('/elements','userController@elements')->name('user.elements');
    Route::get('/offers','userController@offers')->name('user.offer');

    Route::get('/mostsearched','userController@mostsearched')->name('user.msearched');
    Route::get('/profile','userController@profile')->name('user.profile');
    


    Route::get('/single_listing','userController@single_listing')->name('user.single_listing');
    Route::get('/placesearch','userController@placesearch')->name('user.placesearch');
    Route::get('/hotelsearch','userController@hotelsearch')->name('user.hotelsearch');
    Route::get('/placedetail/{id}','userController@placedetail')->name('user.placedetail');
    Route::get('/hoteldetail/{id}','userController@hoteldetail')->name('user.hoteldetail');
    Route::get('/searchPlacesAjax','userController@searchPlacesAjax');
    Route::get('/searchUploadAjax','userController@searchUploadAjax');
});
    //admin
Route::group(['middleware'=>'checksessionAdmin'],function(){
    Route::get('/adminhome','adminController@home')->name('admin.home');
    Route::get('/addnewplace','adminController@addnewplace')->name('admin.addnewplace');
    Route::get('/addnewuser','adminController@addnewuser')->name('admin.addnewuser');
    Route::post('/addnewuser','adminController@addnewuserDB');
    Route::get('/adduserimage','adminController@adduserimage')->name('admin.adduserimage');
    Route::get('/allmember','adminController@allmember')->name('admin.allmember');
    Route::post('/editmembersubmit','adminController@editmembersubmit')->name('editmembersubmit');
    Route::get('/allplaces','adminController@allplaces')->name('admin.allplaces');
    Route::get('/booked','adminController@booked')->name('admin.booked');
    Route::get('/bookinghistory','adminController@bookinghistory')->name('admin.bookinghistory');
    Route::get('/guides','adminController@guides')->name('admin.guides');
    Route::get('/hotelmanager','adminController@hotelmanager')->name('admin.hotelmanager');
    Route::get('/inbox','adminController@inbox')->name('admin.inbox');
    Route::get('/pendingbooking','adminController@pendingbooking')->name('admin.pendingbooking');
    Route::get('/transactionhistory','adminController@transactionhistory')->name('admin.transactionhistory');
    Route::get('/transportmanager','adminController@transportmanager')->name('admin.transportmanager');
    Route::get('/report','adminController@report')->name('admin.report');
    Route::post('/deletemember','adminController@deletemember')->name('deletemember');

});

//agent

Route::group(['middleware'=>'checksessionAgent'],function(){
    Route::get('/agenthome','agentController@home')->name('agent.home');
    Route::get('/agentallplaces','agentController@allplaces')->name('agent.allplaces');
    Route::get('/agentaddnewplace','agentController@addnewplace')->name('agent.addnewplace');
    Route::post('/agentaddnewplace','agentController@addnewplacedb')->name('agent.addnewplacedb');

});

Route::group(['middleware'=>'chechsessionHotel'],function(){
    Route::get('/hotelhome','hotelController@home')->name('hotel.home');
    Route::get('/allhotel','hotelController@allhotel')->name('hotel.allhotel');
    Route::get('/addhotel','hotelController@addhotel')->name('hotel.addhotel');
    Route::post('/addhotel','hotelController@addhoteldb')->name('hotel.addhoteldb');

});

//Ajax
Route::post('/uploadimage','adminController@uploadimage');
Route::get('/modalMessage','adminController@modalMessage');
Route::get('/insertMessageFromAdmin','adminController@insertMessageFromAdmin');
Route::get('/deleteMessage','adminController@deleteMessage');
Route::get('/searchUserAjax','adminController@searchUserAjax');
Route::get('/searchUserRegAjax','adminController@searchUserRegAjax');
Route::get('/searchUserForImageAjax','adminController@searchUserForImageAjax');
Route::get('/searchUserByLetterAjax','adminController@searchUserByLetterAjax');
    //logout

    Route::get('/logout','logoutController@index')->name('logout');
