<?php

use Illuminate\Support\Facades\Route;

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

// _________________________________________________________________
//                            Anonymous  
// _________________________________________________________________

Route::get('/', 'App\Http\Controllers\anonymousController@home_page');
Route::get('schedule', 'App\Http\Controllers\anonymousController@schedule');
Route::get('search_schedule_anonymous', 'App\Http\Controllers\anonymousController@search_schedule_anonymous');

// _________________________________________________________________
// USER LOGIN
// _________________________________________________________________

Route::get('/userLogin', function () { return view('log_in');}) ;
Route::post('/user_Login_with_schedule/{schedule_id}', 'App\Http\Controllers\studentController@user_Login_with_schedule');
Route::post('/userLogin', 'App\Http\Controllers\studentController@user_login_dashboard');
Route::get('/user_dashboard', 'App\Http\Controllers\studentController@user_dashboard');




    // _________________________________________________________________
                                // USER SIGNUP
    // _________________________________________________________________

Route::get('/sign_up', function () {return view('sign_up');});
Route::get('/userSignup', 'App\Http\Controllers\studentController@user_signup_dashboard');
Route::post('/saveUser', 'App\Http\Controllers\studentController@saveUser');

    
    // _________________________________________________________________
                                // ADMIN LOGIN
    // _________________________________________________________________
    
Route::get('/admin_login', function () {return view('admin.admin_login');});
Route::get('/admin_dashboard', 'App\Http\Controllers\adminController@admin_dashboard');
Route::post('/adminLogin', 'App\Http\Controllers\adminController@admin_login_dashboard');
// _________________________________________________________________

Route::get('/bus_schedule', 'App\Http\Controllers\adminController@bus_schedule');


Route::get('/student_info', 'App\Http\Controllers\adminController@student_info');

Route::get('/route_info', 'App\Http\Controllers\adminController@route_info');

Route::get('/driver_info', 'App\Http\Controllers\adminController@driver_info');

Route::post('/save_driver_info', 'App\Http\Controllers\adminController@save_driver_info');

// _______________________________________________________________
//                          Driver View
// _______________________________________________________________
Route::get('/driver_view/{driver_id}', 'App\Http\Controllers\adminController@driver_view');

Route::get('/driver_edit/{driver_id}', 'App\Http\Controllers\adminController@driver_edit');

Route::POST('/admin_driver_edit/{driver_id}', 'App\Http\Controllers\adminController@admin_driver_edit');

Route::get('/driver_delete/{driver_id}', 'App\Http\Controllers\adminController@driver_delete');

// _______________________________________________________________
//                          Bus View
// _______________________________________________________________
Route::get('/bus_info', 'App\Http\Controllers\adminController@bus_info');

Route::post('/save_bus_info', 'App\Http\Controllers\adminController@save_bus_info');

Route::get('/bus_view/{bus_license}', 'App\Http\Controllers\adminController@bus_view');

Route::get('/bus_edit/{bus_license}', 'App\Http\Controllers\adminController@bus_edit');

Route::get('/bus_delete/{bus_license}', 'App\Http\Controllers\adminController@bus_delete');

Route::POST('/admin_bus_edit/{bus_license}', 'App\Http\Controllers\adminController@admin_bus_edit');

// _______________________________________________________________
//                          Studnet View
// _______________________________________________________________
Route::get('/student_view/{student_id}', 'App\Http\Controllers\adminController@student_view');

Route::POST('/admin_student_edit/{student_id}', 'App\Http\Controllers\adminController@admin_student_edit');

Route::get('/student_edit/{student_id}', 'App\Http\Controllers\adminController@student_edit');

Route::get('/student_delete/{bus_license}', 'App\Http\Controllers\adminController@student_delete');



Route::get('/confirm_buses', function () {return view('confirm_buses');});

Route::get('/live_view', function () {return view('live_view');});

Route::get('/about_me', function () {return view('about_me');});

Route::get('/search_buses', function () {return view('search_buses');});

Route::get('/logout', 'App\Http\Controllers\adminController@admin_logout');


// _________________________________________________________________
//                                 USER PANEL
// _________________________________________________________________

Route::get('/user_schedule', 'App\Http\Controllers\studentController@user_schedule');
Route::get('/profile_update', 'App\Http\Controllers\studentController@profile_update');
Route::get('/user_logout', 'App\Http\Controllers\studentController@user_logout');
Route::POST('/user_student_edit/{student_id}', 'App\Http\Controllers\studentController@user_student_edit');
Route::get('/user_schedule_view/{schedule_id}', 'App\Http\Controllers\studentController@user_schedule_view');
Route::get('/user_take_bus/{schedule_id}', 'App\Http\Controllers\studentController@user_take_bus');
Route::get('user_search_schedule', 'App\Http\Controllers\studentController@user_search_schedule');
Route::get('user_notice', 'App\Http\Controllers\studentController@user_notice');
Route::get('/user_notice_view/{notice_id}', 'App\Http\Controllers\studentController@user_notice_view');
Route::get('/schedule_to_user_login/{schedule_id}', 'App\Http\Controllers\studentController@schedule_to_user_login');


// _________________________________________________________________
//                                 Route PANEL
// _________________________________________________________________

Route::post('/save_route_info', 'App\Http\Controllers\adminController@save_route_info');
Route::get('/route_delete/{route_id}', 'App\Http\Controllers\adminController@route_delete');
Route::get('/route_edit/{route_id}', 'App\Http\Controllers\adminController@route_edit');
Route::POST('/admin_route_edit/{route_id}', 'App\Http\Controllers\adminController@admin_route_edit');

// _________________________________________________________________
//                                 Stops PANEL
// _________________________________________________________________

Route::post('/save_stops_info', 'App\Http\Controllers\adminController@save_stops_info');
Route::get('/stops_delete/{stop_id}', 'App\Http\Controllers\adminController@stops_delete');
Route::get('/stops_edit/{stop_id}', 'App\Http\Controllers\adminController@stops_edit');
Route::POST('/admin_stops_edit/{stop_id}', 'App\Http\Controllers\adminController@admin_stops_edit');
Route::post('/save_stops_name', 'App\Http\Controllers\adminController@save_stops_name');
Route::post('/delete_stops_name', 'App\Http\Controllers\adminController@delete_stops_name');

// _________________________________________________________________
//                                 Notice PANEL
// _________________________________________________________________
Route::get('/notice', 'App\Http\Controllers\adminController@notice');
Route::post('/save_notice_info', 'App\Http\Controllers\adminController@save_notice_info');
Route::get('/notice_delete/{notice_id}', 'App\Http\Controllers\adminController@notice_delete');
Route::get('/notice_view/{notice_id}', 'App\Http\Controllers\adminController@notice_view');
Route::get('/notice_edit/{notice_id}', 'App\Http\Controllers\adminController@notice_edit');
Route::POST('/notice_schedule_edit/{notice_id}', 'App\Http\Controllers\adminController@notice_schedule_edit');



// _________________________________________________________________
//                           Schedule CONTROLLER
// _________________________________________________________________

Route::post('/save_schedule_info', 'App\Http\Controllers\adminController@save_schedule_info');
Route::get('/schedule_view/{schedule_id}', 'App\Http\Controllers\adminController@schedule_view');
Route::get('/schedule_delete/{schedule_id}', 'App\Http\Controllers\adminController@schedule_delete');
Route::get('/schedule_edit/{schedule_id}', 'App\Http\Controllers\adminController@schedule_edit');
Route::POST('/admin_schedule_edit/{schedule_id}', 'App\Http\Controllers\adminController@admin_schedule_edit');



// _________________________________________________________________
//                          STUDENT LIST IN IIUC
// _________________________________________________________________
Route::get('/student_list', 'App\Http\Controllers\adminController@student_list');


// Bus Schedule
// Bus info
// Student info
// Route info
// Driver info
// report