<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use DB;
use Illuminate\Support\Facades\Redirect;
use Carbon\Carbon;
use Session;
Session_start();  

class studentController extends Controller
{   
    // _________________________________________________________________
                                // USER LOGIN
    // _________________________________________________________________

    public function user_dashboard()
    {
        $student_id = Session::get('student_id');
        $student_password = Session::get('student_password');

        if ($student_id === NULL && $student_password === NULL){
            return Redirect::to('/userLogin');
        }
        else{
            $student_id = Session::get('student_id');
             //student DB get Data
            $student_description_view = DB::table('student_tbl')->select('*')->where('student_id', $student_id )->first();
            return view('user.user_profile')->with('student_description_profile', $student_description_view);
        }
    }
    public function user_login_dashboard(Request $request){
        
        $id = $request->student_id;
        $password = md5($request->student_password);
        $result = DB::table('student_tbl')
        ->where('student_id', $id)
        ->where('student_password', $password)
        ->first();
        // echo "</pre>";
        // print_r($result);

        if ($result) 
        {
            Session::put ('student_id', $result->student_id);
            Session::put('student_password', $result->student_password);
            return Redirect::to("/user_dashboard");
            // echo "Welcome";
        }
        else
        {
            Session::put('exception','ID or Password Invalid');
            return Redirect::to('/userLogin');
        } 
    }
    public function user_Login_with_schedule(Request $request, $schedule_id){
        
        $id = $request->student_id;
        $password = md5($request->student_password);
        // $schedule_id = $request->schedule_id;
        $result = DB::table('student_tbl')
        ->where('student_id', $id)
        ->where('student_password', $password)
        ->first();
        if ($result) 
        {
            Session::put ('student_id', $result->student_id);
            Session::put('student_password', $result->student_password);
            $path = "user_schedule_view".'/'.$schedule_id;
            return Redirect::to($path);
        }
        else
        {
            $path = "schedule_to_user_login".'/'.$schedule_id;
            // dd($path);
            Session::put('exception','ID or Password Invalid');
            return Redirect::to($path);
        } 
    }
    
// _________________________________________________________________
//                          USER SIGNUP
// _________________________________________________________________
    public function user_signup_dashboard()
    {
        $student_id = Session::get('student_id');
        $student_password = Session::get('student_password');

        if ($student_id === NULL && $student_password === NULL){
            return Redirect::to('/userLogin');
        }
        else {
            return view('sign_up');
        }
    }
    public function saveUser(Request $request)
    {
        $data=array(); 
        $data['student_name']=$request->student_name;
        $data['student_id']=$request->student_id;
        $data['student_batch']= ($request->student_batch);
        $data['student_email']=$request->student_email;
        $data['student_department']=$request->student_department;
        $data['student_phone']=$request->student_phone;
        $data['student_id']=$request->student_id;
        $data['student_password']=md5($request->student_password);
        $data['created_at'] = Carbon::now('Asia/Dhaka');
        $data['updated_at'] = Carbon::now('Asia/Dhaka');

        $password_pin = $request->student_password;
        $confirm_pin = $request->student_password_confirm;

        //________________________________________________
        // CHECK ID IN DATDBASE
        $result = DB::table('student_tbl')
        ->where('student_id', $request->student_id)
        ->first();

        if ($result){
            Session::put('exception', 'This account already exists in the database'); 
            return Redirect::to('/sign_up');
        }
        else if ($password_pin != $confirm_pin){
            Session::put('exception', 'The password confirmation does not match'); 
            return Redirect::to('/sign_up');
        }
        else {
            DB::table('student_tbl')->insert($data);
            Session::put('exception', 'Congratulations, your account has been successfully created'); 
            return Redirect::to('/sign_up');
        }
        //     Session::put('exception_02', 'The password confirmation does not match.'); 
        //     return Redirect::to('/sign_up');
        // $image=$request->file('student_image'); 
        // if ($image) {
        //     $image_name=Str::random(20); 
        //     $ext=strtolower($image->getClientOriginalExtension());
        //     $image_full_name=$image_name.'.'.$ext;
        //     $upload_path='image/'; 
        //     $image_url=$upload_path.$image_full_name;
        //     $success=$image->move($upload_path, $image_full_name);
        //     if ($success) {
        //         $data['student_image']=$image_url;
        //         DB::table('student_tbl')->insert($data); 
        //         Session::put('exception', 'Student Added Successfully!!');
        //         return Redirect::to('/addstudent');
        //     }
        // }
        // $data['student_image']=$image_url;
        // DB::table('student_tbl')->insert($data);
        // Session::put('exception', 'Student Added Successfully!!');
        // return Redirect::to('/addstudent');
    }
    
// _________________________________________________________________
                        // USER LogOut
// _________________________________________________________________
    public function user_logout(){
        $student_id = Session::get('student_id');
        $student_password = Session::get('student_password');

        if ($student_id === NULL && $student_password === NULL){
            return Redirect::to('/userLogin');
        }
        else {
            Session::put ('student_id', null);
            Session::put('student_password', null);
            return Redirect::to('/userLogin');
        }
    }
    public function user_schedule()
    {
        $student_id = Session::get('student_id');
        $student_password = Session::get('student_password');

        if ($student_id === NULL && $student_password === NULL){
            return Redirect::to('/userLogin');
        }
        else {
                //Bus DB get Data
            $allbus_info=DB::table('bus_info')->get();
            //Schedule DB get Data
            $allschedule_info=DB::table('schedule')->get();
            //Route DB get Data
            $allroute_info=DB::table('route_info')->get();
            //stops DB get Data
            $allstops_info=DB::table('stops_info')->get();
            //stops name DB get Data
            $allstops_name=DB::table('stops_name')->orderBy('stop_name')->get();

            return view('user.user_schedule')->with('all_bus_info', $allbus_info)->with('all_route_info', $allroute_info)->with('all_schedule_info', $allschedule_info)->with('all_stops_info', $allstops_info)->with('all_stops_name', $allstops_name);
        }
    } 
    public function profile_update()
    {
        $student_id = Session::get('student_id');
        $student_password = Session::get('student_password');

        if ($student_id === NULL && $student_password === NULL){
            return Redirect::to('/userLogin');
        }
        else {

            $student_id = Session::get('student_id');
            //student DB get Data
            $student_description_view = DB::table('student_tbl')->select('*')->where('student_id', $student_id )->first();
            return view('user.profile_update')->with('student_description_profile', $student_description_view);
        }
    }
    public function user_student_edit(Request $request,$student_id)
    {
        $student_id = Session::get('student_id');
        $student_password = Session::get('student_password');

        if ($student_id === NULL && $student_password === NULL){
            
            return Redirect::to('/userLogin');
        }
        else{
            $data['student_name']=$request->student_name;
            $data['student_batch']= ($request->student_batch);
            $data['student_batch']=$request->student_batch;
            $data['student_email']=$request->student_email;
            $data['student_department']=$request->student_department;
            $data['student_phone']=$request->student_phone;
            $data['student_password']=md5($request->student_password);
            $data['updated_at'] = Carbon::now('Asia/Dhaka');
            $password_pin = $request->student_password;
            $confirm_pin = $request->student_password_confirm;
            //________________________________________________
            // CHECK ID IN DATDBASE
            $result = DB::table('student_tbl')
            ->where('student_id', $request->student_id)
            ->first();
            if ($password_pin != $confirm_pin){
                Session::put('exception', 'The password confirmation does not match'); 
                return Redirect::to('/profile_update');
            }
            else {
                
                DB::table('student_tbl')->where('student_id', $student_id)->update($data);
                Session::put('exception', 'Congratulations, successfully updated'); 
                return Redirect::to('/user_dashboard');
            }
        }
    }
    public function user_schedule_view(Request $request,$schedule_id){
        $student_id = Session::get('student_id');
        $student_password = Session::get('student_password');

        if ($student_id === NULL && $student_password === NULL){
            
            return Redirect::to('/userLogin');
        }
        else {
            $schedule_description_view = DB::table('schedule')->select('*')->where('schedule_id', $schedule_id )->first();
            // dd($schedule_description_view);
            //Bus DB get Data
            $allbus_info=DB::table('bus_info')->get();
            //Route DB get Data
            $allroute_info=DB::table('route_info')->get();
            //stops DB get Data
            $allstops_info=DB::table('stops_info')->get();
            
            return view('user.user_schedule_view')->with('all_bus_info', $allbus_info)->with('all_route_info', $allroute_info)->with('schedule_description_profile', $schedule_description_view)->with('all_stops_info', $allstops_info);
        }
    } 
    public function user_search_schedule(){
        $student_id = Session::get('student_id');
        $student_password = Session::get('student_password');
        
        if ($student_id === NULL && $student_password === NULL){
            return Redirect::to('/userLogin');
        }
        else{
            $bus_stop = $_GET['bus_stop'];
            $allbus_info=DB::table('bus_info')->get();
            //Schedule DB get Data
            $allschedule_info=DB::table('schedule')->get();
            //Route DB get Data
            $allroute_info=DB::table('route_info')->get();
            
            $allstops_info=DB::table('stops_info')->get();
            $products = DB::table('stops_info')->select('*')->where('stop_name',$bus_stop)->get();
            // dd($products);
            return view('user.user_search_schedule')->with('all_stop_info', $products)->with('all_schedule_info', $allschedule_info)->with('all_route_info', $allroute_info)->with('all_bus_info', $allbus_info)->with('all_stops_info', $allstops_info);
        }
    }
    public function user_take_bus($schedule_id){
        $student_id = Session::get('student_id');
        $student_password = Session::get('student_password');

        if ($student_id === NULL && $student_password === NULL){
            return Redirect::to('/userLogin');
        }
        else {
            $usertake_bus = DB::table('schedule')->select('*')->where('schedule_id', $schedule_id )->first();
    
            $allbus_info=DB::table('bus_info')->get();
            //Route DB get Data
            $allroute_info=DB::table('route_info')->get();
            //stops DB get Data
            $allstops_info=DB::table('stops_info')->get();
    
            return view('user.user_take_bus')->with('all_bus_info', $allbus_info)->with('all_route_info', $allroute_info)->with('schedule_description_profile', $usertake_bus)->with('all_stops_info', $allstops_info);
        }
    } 
    public function schedule_to_user_login($schedule_id){
        return view('schedule_to_user_login')->with('schedule_id', $schedule_id);
    } 
    public function user_notice()
    {
        $student_id = Session::get('student_id');
        $student_password = Session::get('student_password');

        if ($student_id === NULL && $student_password === NULL){
            return Redirect::to('/userLogin');
        }
        else {  
            $allnotice_info=DB::table('notice_info')->get();
            return view('user.user_notice')->with('all_notice_info', $allnotice_info);
        }
    } 
    public function user_notice_view($notice_id)
    {
        $student_id = Session::get('student_id');
        $student_password = Session::get('student_password');

        if ($student_id === NULL && $student_password === NULL){
            return Redirect::to('/userLogin');
        }
        else {  
            $notice_description_view = DB::table('notice_info')->select('*')->where('notice_id', $notice_id)->first();
            return view('user.user_notice_view')->with('notice_description_profile', $notice_description_view);
        }
    }
}
