<?php
namespace App\Http\Middleware;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Providers\RouteServiceProvider;



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

Route::get('/', "HomeController@index");
Route::get('/signin', "HomeController@signin");
Route::get('/signup', "HomeController@signup");
Route::get('/jobpost', "HomeController@jobpost");
Route::get('/jobdetails/{id}', "HomeController@jobdetails");
Route::get('/joblisting', "HomeController@joblisting");
Route::get('/employeeprofile', "HomeController@employeeprofile");
Route::get('/employerprofile', "HomeController@employerprofile");
Route::get('/viewresume', "HomeController@viewresume");
Route::get('/viewcompany', "HomeController@viewcompany");
Route::get('/contact', "HomeController@contact");
Route::get('/pricing', "HomeController@pricing");
Route::get('/notification', "HomeController@notification");
Route::get('/comingsoon', "HomeController@comingsoon");





/**new web for login and signup */
Route::get('/', "PagesController@index");
Route::get('/logins', "PagesController@logins");
Route::get('/signups', "PagesController@signups");


Auth::routes();
Route::group(['middleware' => ['web', 'auth']], function(){
    Route::get('/home', function(){
        if(Auth::user()->role == "superadmin"){
            //dd(Auth::user());
            return view('Admin/superadmin');
        }elseif(Auth::user()->role == "employee"){
            //dd(Auth::user());
            return view('employee.employeeindex');
        }elseif(Auth::user()->role == "employer"){
            //dd(Auth::user());
            return view('employer.employerindex');
        }else{
            //dd(Auth::user());
            return view('/');
        }
    });
});

/** Dashboard  */
Route::resource('/superadmin', "superadmincontroller");
Route::resource('/employer', "employerController");
Route::resource('job', "jobController");
Route::resource('staff', "staffcontroller");
Route::get('/employerdash', "employercontroller@employerdash");
Route::resource('employee', "EmployeeController");


Route::put('employer.update/{id}', "employerController@update");