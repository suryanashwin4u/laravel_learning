<?php

use Illuminate\Support\Facades\Route;

// importing controller1
// use App\http\Controllers\controller1;

// importing userscontroller
// use App\http\Controllers\UsersController;

// importing usercontroller
// use App\http\Controllers\UserController;

// importing Customercontroller
// use App\http\Controllers\CustomerController;

// importing EmployeeController
// use App\http\Controllers\EmployeeController;

// importing httpController
// use App\http\Controllers\httpController;

// importing httpmethodsController
// use App\http\Controllers\httpmethodsController;

// importing user_authenticate
// use App\Http\Controllers\user_authenticate;

// importing Store_controller
// use App\Http\Controllers\Store_controller;

// importing upload
// use App\Http\Controllers\upload_controller;

// importing member_controller
// use App\Http\Controllers\member_controller;

// importing member_list_controller
// use App\Http\Controllers\member_list_controller;

// importing list_edit_delete controller
use App\Http\Controllers\list_edit_delete;

//access web pages inside views using name at url from view folder inside resources
// Route::get('/', function () {
//     return view('hello');
// });

// accessing hello.blade.php from view folder directly
// Route::view('hello',"hello");

// accessing hello.blade.php and showing passed parameters in view
// Route::get('/hello/{name}', function ($name) {
//     return view('hello',["name"=>$name]);
// });

// access show function of controller1 class inside controller folder
// Route::get('controller1',[controller1::class,'show']);

// access show function of controller1 class inside controller folder
// Route::get('controller1/{name}',[controller1::class,'show_name']);

// access hello1.blade.php and calling controller1 class function with dynamic parameters passed from url
// Route::get('hello1/{name}',[controller1::class,'show_view_with_parameters']);

// accessing users.blade.php from view folder directly
// Route::view('users',"users");

// accessing about.blade.php from view folder directly
// Route::view('about',"about");

// calling controller and its function directly from url
// Route::get("hello",[UsersController::class,'loadView']);

// accessing hello.blade.php from view folder directly
// Route::view('inner',"inner");

// accessing form page and posting data using form to controller method name getData
// Route::post("form_data",[UsersController::class,'getData']);
// Route::view("form","form");

// This middleware name:protectPage will work only for one page views
// Route::group(['middleware'=>['protectPage']],function(){
//     Route::view('welcome','welcome');
// });

//applying middle ware on pages which are accessing home,users and noaccess page
// Route::view('home','home')->middleware('protectedPage');;
// Route::view('users','users')->middleware('protectedPage');
// Route::view('noaccess','noaccess')->middleware('protectedPage');;

// calling controller class and its function
// Route::get('users',[UserController::class,'index']);

//calling controller class and its function for model
// Route::get('customers',[CustomerController::class,'getData']);

//calling controller class and its function for model
// Route::get('employee',[EmployeeController::class,'getData']);

// requesting http to fetch data from api link and show into view
// Route::get('/https_example',[httpController::class,'index']);

// submitting data to controller using get request
// Route::get('/https_methods',[httpmethodsController::class,'test_REQUESTS']);

// submitting data to controller using post request
// Route::post('/https_methods',[httpmethodsController::class,'test_REQUESTS']);

// submitting data to controller using put request
// Route::put('/https_methods',[httpmethodsController::class,'test_REQUESTS']);

// submitting data to controller using delete request
// Route::delete('/https_methods',[httpmethodsController::class,'test_REQUESTS']);

//show http_methods view page
// Route::view('login_form','http_methods');

// submitting session variables and logout
// Route::post('/check_login',[user_authenticate::class,'user_login']);
// Route::view('profile','profile');
// Route::get('/logout',function(){
//     if(session()->has('username')){
//         session()->pull('username',null);
//         session()->pull('password',null);
//     }
// });
// Route::get('/form',function(){
//     if(session()->has('username')){
//         return redirect('profile');
//     }
//     return view('form');
// });

// flash session example
// Route::view('store','store_user');
// Route::post('/storecontroller',[Store_controller::class,'storeM']);

// file upload
// Route::view('upload','upload');
// Route::post('/uploader',[upload_controller::class,'uploader']);

// languge translation localization
// Route::view('local','localization');
// or
// Route::get('/local/{lang}',function($lang){
//     App::setlocale($lang);    
//     return view('localization');
// });

// save data in database from the form in the view
// Route::view('add','addmember');
// Route::post('/addnow',[member_controller::class,'adddata']);


// pagination
// Route::get('/list',[member_list_controller::class,'show']);

// edit delete from the list
Route::get('/show_list_data',[list_edit_delete::class,'show_list_data']);
Route::get('/edit_list_item/{id}',[list_edit_delete::class,'edit_list_item_function']);
Route::get('/delete_list_item/{id}',[list_edit_delete::class,'delete_list_item_function']);

