<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use APP\Http\Requests;
use DB;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Str;
use Carbon\Carbon;
use Session;
Session_start();

class adminController extends Controller
{

    public function authCheck($id, $password){
        return ($id === null && null === $password) ? 0 : 1;
    }
// _________________________________________________________________
                        // Student List IIUC
// _________________________________________________________________
    
    public function student_list(){
        $admin_id = Session::get('admin_id');
        $admin_password = Session::get('admin_password');

        if ($this->authCheck($admin_id, $admin_password)){
            $allStudnet_info=DB::table('student_list_tbl')->get();
            $manage_studnet=view('admin.student_list')->with('all_student_info', $allStudnet_info);
            return view('admin.layout')->with('student_list', $manage_studnet);
        }
        else {
            return Redirect::to('/');
        }
    }
     // _________________________________________________________________
                                // ADMIN LOGIN
    // _________________________________________________________________
    
        // Auth Checking student_info
    public function student_info()
    {
        $admin_id = Session::get('admin_id');
        $admin_password = Session::get('admin_password');

        if ($this->authCheck($admin_id, $admin_password)){
            $allstudent_info=DB::table('student_tbl')->get();
            $manage_student=view('admin.student_info')->with('all_student_info', $allstudent_info);
            return view('admin.layout')->with('student_info', $manage_student);

        }
        else {
            return Redirect::to('/');
        }
    }

    
    // Auth Checking report
    
    public function admin_dashboard()
    {
        $admin_id = Session::get('admin_id');
        $admin_password = Session::get('admin_password');

        if ($this->authCheck($admin_id, $admin_password)){
            $admin_info = DB::table('admin_info')->select('*')->where('admin_id', $admin_id)->first();
            $admin_details_info = view('admin.admin_dashboard')->with('admin_details_info', $admin_info);
            return view('admin.layout')->with('view', $admin_details_info);

            // echo "</pre>";
            // print_r($admin_info);
            // echo "</pre>";
        }
        else {
            return Redirect::to('/');
        }
    }

    public function admin_login_dashboard(Request $request){
        $id = $request->admin_id;
        $password = md5($request->admin_password);
        $result = DB::table('admin_info')
        ->where('admin_id', $id)
        ->where('admin_password', $password)
        ->first();
        // echo "</pre>";
        // print_r($result);
        if ($result) 
        {
            Session::put ('admin_id', $result->admin_id);
            Session::put('admin_password', $result->admin_password);
            return Redirect::to("/admin_dashboard");
            // echo "Welcome";
        }
        else
        {
            Session::put('exception','ID or Password Invalid');
            return Redirect::to('/admin_login');
        } 
    }
    public function admin_logout(){
        Session::put ('admin_id', null);
        Session::put('admin_password', null);
        return Redirect::to('admin_login');
    }
// _________________________________________________________________
//                         Driver INFO
// _________________________________________________________________

    public function driver_all_info()
    {
        $admin_id = Session::get('admin_id');
        $admin_password = Session::get('admin_password');

        if ($this->authCheck($admin_id, $admin_password)){
            $alldriver_info=DB::table('driver_info')->get();
            $manage_driver=view('admin.driver_info')->with('all_driver_info', $alldriver_info);
            return view('admin.layout')->with('driver_info', $manage_driver);
        }
        else {
            return Redirect::to('/');
        }

        //return view('/admin.allstudent');
    }
    // Auth Checking driver_info
    public function driver_info()
    {
        $admin_id = Session::get('admin_id');
        $admin_password = Session::get('admin_password');

        if ($this->authCheck($admin_id, $admin_password)){
            $alldriver_info=DB::table('driver_info')->get();

            $manage_driver=view('admin.driver_info')->with('all_driver_info', $alldriver_info);
    
            return view('admin.layout')->with('driver_info', $manage_driver);

            // return view('admin.driver_info');
        }
        else {
            return Redirect::to('/');
        }
    }
        
    public function save_driver_info(Request $request)
    {
        $data=array(); 
        $data['driver_name']=$request->driver_name;
        $data['driving_license']=$request->driving_license;
        $data['driver_phone']= ($request->driver_phone);
        $image=$request->file('driver_picture');
        if ($image) {
            $image_name=Str::random(20); 
            $ext=strtolower($image->getClientOriginalExtension());
            $image_full_name=$image_name.'.'.$ext;
            $upload_path='image/driver/'; 
            $image_url=$upload_path.$image_full_name;
            $success=$image->move($upload_path, $image_full_name);
            if ($success) {
                $data['driver_picture']=$image_url;
                DB::table('driver_info')->insert($data); 
                Session::put('exception', 'Congratulations, Your information has been saved !');
                return Redirect::to('/driver_info');
            }
        }
        $data['driver_picture']=$image_url;
        DB::table('driver_info')->insert($data);
        Session::put('exception', 'Congratulations, Your information has been saved !');
        return Redirect::to('/driver_info');
        
        DB::table('driver_info')->insert($data);
        Session::put("exception', 'Congratulations, Your information has been saved !"); 
        return view('/driver_info');
    }
    
    public function driver_view($driver_id)
    {
        $admin_id = Session::get('admin_id');
        $admin_password = Session::get('admin_password');

        if ($this->authCheck($admin_id, $admin_password)){
            $driver_description_view = DB::table('driver_info')->select('*')->where('driver_id', $driver_id)->first();
            $driver_description_view = view('admin.driver_view')->with('driver_description_profile', $driver_description_view);
            return view('admin.layout')->with('driver_info', $driver_description_view);
        }
        else{
            return Redirect::to('/');
        }
    }

    public function driver_edit($driver_id)
    { 
        $admin_id = Session::get('admin_id');
        $admin_password = Session::get('admin_password');

        if ($this->authCheck($admin_id, $admin_password)){
            $driver_description_view = DB::table('driver_info')->select('*')->where('driver_id', $driver_id)->first();
            
            $driver_description_view = view('admin.driver_edit')->with('driver_description_profile', $driver_description_view);
            return view('admin.layout')->with('driver_info', $driver_description_view);
        } else {
            return Redirect::to('/');
        }
    }
    
    public function admin_driver_edit(Request $request,$driver_id)
    {
        $admin_id = Session::get('admin_id');
        $admin_password = Session::get('admin_password');

        if ($this->authCheck($admin_id, $admin_password)){
            $data = array();
            $data['driver_name'] = $request->driver_name;
            $data['driving_license'] = $request->driving_license;
            $data['driver_phone'] = $request->driver_phone;

            // image updata code tik ache bt problem hoche je incremental redundancy  
            /*
            $image=$request->file('driver_picture');
            if ($image) {
                $image_name=Str::random(20); 
                $ext=strtolower($image->getClientOriginalExtension());
                $image_full_name=$image_name.'.'.$ext;
                $upload_path='image/driver/'; 
                $image_url=$upload_path.$image_full_name;
                $success=$image->move($upload_path, $image_full_name);
                if ($success) {
                    $data['driver_picture']=$image_url;
                    DB::table('driver_info')->where('driver_id', $driver_id)->update($data);
                    Session::put('exception', 'Congratulations, Your information has been update !');
                    return Redirect::to('/driver_info');
                }
                else {
                    Session::put('exception', 'database error');
                }
            }
            */
            
            Session::put('exception', 'Congratulations, Your information has been update !');
            DB::table('driver_info')->where('driver_id', $driver_id)->update($data);
            return Redirect::to('/driver_info');
        }
        else {
            return Redirect::to('/');
        }
    }
    public function driver_delete($driver_id)
    {
        $admin_id = Session::get('admin_id');
        $admin_password = Session::get('admin_password');

        if ($this->authCheck($admin_id, $admin_password)){
            DB::table('driver_info')->where('driver_id', $driver_id)->delete();
            return Redirect::to('/driver_info');
        }
        else {
            return Redirect::to('/');
        }
    }

// _________________________________________________________________
//                           BUS CONTROLLER
// _________________________________________________________________

    public function save_bus_info(Request $request)
    {
        $admin_id = Session::get('admin_id');
        $admin_password = Session::get('admin_password');

        if ($this->authCheck($admin_id, $admin_password)){
            $data=array(); 
            $data['bus_license']=$request->bus_license;
            $data['student_capacity']=$request->student_capacity;
            
            DB::table('bus_info')->insert($data);
            Session::put("exception', 'Congratulations, Your information has been saved !"); 
            return Redirect::to('/bus_info');
        }
        else {
            return Redirect::to('/');
        }
    }
    public function bus_info()
    {
        $admin_id = Session::get('admin_id');
        $admin_password = Session::get('admin_password');

        if ($this->authCheck($admin_id, $admin_password)){
            $allbus_info=DB::table('bus_info')->get();
            $manage_bus=view('admin.bus_info')->with('all_bus_info', $allbus_info);
            return view('admin.layout')->with('bus_info', $manage_bus);
            return view('admin.bus_info');
        }
        else {
            return Redirect::to('/');
        }
    }
    public function bus_view($bus_license)
    {
        $admin_id = Session::get('admin_id');
        $admin_password = Session::get('admin_password');

        if ($this->authCheck($admin_id, $admin_password)){
            $bus_description_view = DB::table('bus_info')->select('*')->where('bus_license', $bus_license)->first();
            $bus_description_view = view('admin.bus_view')->with('all_bus_info', $bus_description_view);
            return view('admin.layout')->with('bus_view', $bus_description_view);
        }
        else {
            return Redirect::to('/');
        }
    }
    public function bus_edit($bus_license)
    {
        $admin_id = Session::get('admin_id');
        $admin_password = Session::get('admin_password');

        if ($this->authCheck($admin_id, $admin_password)){
            $bus_description_view = DB::table('bus_info')->select('*')->where('bus_license', $bus_license)->first();
            $bus_description_view = view('admin.bus_edit')->with('bus_description_profile', $bus_description_view);
            return view('admin.layout')->with('bus_edit', $bus_description_view);
        }
        else {
            return Redirect::to('/');
        }
    }    
    public function bus_delete($bus_license)
    {
        $admin_id = Session::get('admin_id');
        $admin_password = Session::get('admin_password');

        if ($this->authCheck($admin_id, $admin_password)){
            DB::table('bus_info')->where('bus_license', $bus_license)->delete();
            return Redirect::to('/bus_info');
        }
        else {
            return Redirect::to('/');
        }
    }
    public function admin_bus_edit(Request $request,$bus_license)
    {
        $admin_id = Session::get('admin_id');
        $admin_password = Session::get('admin_password');

        if ($this->authCheck($admin_id, $admin_password)){
            $data = array();
            $data['bus_license'] = $request->bus_license;
            $data['student_capacity'] = $request->student_capacity;

            Session::put('exception', 'Congratulations, Your information has been update !');
            DB::table('bus_info')->where('bus_license', $bus_license)->update($data);
            return Redirect::to('/bus_info');
        }
        else{
            return Redirect::to('/');
        }
    }
// _________________________________________________________________
//                           STUDENT CONTROLLER
// _________________________________________________________________

    public function student_view($student_id)
    {
        $admin_id = Session::get('admin_id');
        $admin_password = Session::get('admin_password');

        if ($this->authCheck($admin_id, $admin_password)){
            $student_description_view = DB::table('student_tbl')->select('*')->where('student_id', $student_id)->first();
            $student_description_view = view('admin.student_view')->with('student_description_profile', $student_description_view);
            return view('admin.layout')->with('student_view', $student_description_view);
        }
        else{
            return Redirect::to('/');
        }
    }
    public function student_edit($student_id)
    {
        $admin_id = Session::get('admin_id');
        $admin_password = Session::get('admin_password');

        if ($this->authCheck($admin_id, $admin_password)){
            $student_description_view = DB::table('student_tbl')->select('*')->where('student_id', $student_id)->first();
            $student_description_view = view('admin.student_edit')->with('student_description_profile', $student_description_view);
            return view('admin.layout')->with('student_edit', $student_description_view);
        } else{
            return Redirect::to('/');
        }
    }  
    public function admin_student_edit(Request $request,$student_id)
    {
        $admin_id = Session::get('admin_id');
        $admin_password = Session::get('admin_password');

        if ($this->authCheck($admin_id, $admin_password)){
            $data = array();
            $data['student_name'] = $request->student_name;
            $data['student_batch'] = $request->student_batch;
            $data['student_email'] = $request->student_email;
            $data['student_department'] = $request->student_department;
            $data['student_phone'] = $request->student_phone;
            Session::put('exception', 'Congratulations, Your information has been update !');
            DB::table('student_tbl')->where('student_id', $student_id)->update($data);
            return Redirect::to('/student_info');
        }
        else{
            return Redirect::to('/');
        }
    }
    public function student_delete($student_id)
    {
        $admin_id = Session::get('admin_id');
        $admin_password = Session::get('admin_password');

        if ($this->authCheck($admin_id, $admin_password)){
            DB::table('student_tbl')->where('student_id', $student_id)->delete();
            return Redirect::to('/student_info');
        }
        else{
            return Redirect::to('/');
        }
    }

// _________________________________________________________________
//                           ROUTE CONTROLLER
// _________________________________________________________________

    public function route_info()
    {
        $admin_id = Session::get('admin_id');
        $admin_password = Session::get('admin_password');

        if ($this->authCheck($admin_id, $admin_password)){
            // ROUTE Table
            $allroute_info=DB::table('route_info')->get();
            // STOPS Table
            $allstops_info=DB::table('stops_info')->get();
            
            $allstops_name=DB::table('stops_name')->get();
            
            $manage=view('admin.route_info')->with('all_route_info', $allroute_info)->with('all_stops_info', $allstops_info)->with('all_stops_name', $allstops_name);

            return view('admin.layout')->with('route_info1', $manage)->with('route_info2', $manage);
        }
        else {
            return Redirect::to('/');
        }
    }
    public function save_route_info(Request $request)
    {
        $admin_id = Session::get('admin_id');
        $admin_password = Session::get('admin_password');

        if ($this->authCheck($admin_id, $admin_password)){
            $data=array(); 
            $check = DB::table('route_info')->select('*')->where('route_id', $request->route_id)->first();
            if ($check == true){
                Session::put('exception', 'Warning! The route ID is stored in the database, provide another Road ID'); 
                return Redirect::to('/route_info');
            }
            else {
                    $data['route_id']=$request->route_id;
                    $data['route_name']=$request->route_name;
                    $data['start_point']=$request->start_point;
                    $data['end_point']=$request->end_point;
                    $data['created_at'] = Carbon::now('Asia/Dhaka');
                    $data['updated_at'] = Carbon::now('Asia/Dhaka');
                    DB::table('route_info')->insert($data);
                    Session::put('exception', 'Congratulations, Your information has been saved !'); 
                    return Redirect::to('/route_info');
            }
        }
        else {
            return Redirect::to('/');
        }
        
    }
    public function route_delete($route_id)
    {
        $admin_id = Session::get('admin_id');
        $admin_password = Session::get('admin_password');

        if ($this->authCheck($admin_id, $admin_password)){
            $DBcheck = DB::table('stops_info')->select('*')->where('route_id', $route_id )->first();
            if ($DBcheck == NULL){
                DB::table('route_info')->where('route_id', $route_id)->delete();
                return Redirect::to('/route_info');
            }
            else {
                Session::put('exception', 'Warning! You cannot delete this route');
                return Redirect::to('/route_info');
            }
        }
        else{
            return Redirect::to('/');
        }
       
    }
    public function route_edit($route_id)
    {
        $admin_id = Session::get('admin_id');
        $admin_password = Session::get('admin_password');

        if ($this->authCheck($admin_id, $admin_password)){
            $route_description_view = DB::table('route_info')->select('*')->where('route_id', $route_id)->first();
            $route_description_view = view('admin.route_edit')->with('route_description_profile', $route_description_view);
            return view('admin.layout')->with('route_edit', $route_description_view);
        }
        else{
            return Redirect::to('/');
        }
    }  
    public function admin_route_edit(Request $request,$route_id)
    {
        $admin_id = Session::get('admin_id');
        $admin_password = Session::get('admin_password');

        if ($this->authCheck($admin_id, $admin_password)){
            $data = array();
            $data['route_id'] = $request->route_id;
            $data['route_name'] = $request->route_name;
            $data['start_point'] = $request->start_point;
            $data['end_point'] = $request->end_point;
            $data['updated_at'] = Carbon::now();
            Session::put('exception', 'Congratulations, Your information has been update !');
            DB::table('route_info')->where('route_id', $route_id)->update($data);
            return Redirect::to('/route_info');
        }
        else {
            return Redirect::to('/');
        }
    }

// _________________________________________________________________
//                           STOPS CONTROLLER
// _________________________________________________________________

    public function save_stops_info(Request $request)
    {
        $admin_id = Session::get('admin_id');
        $admin_password = Session::get('admin_password');

        if ($this->authCheck($admin_id, $admin_password)){
            $data=array(); 
            $check = DB::table('stops_info')->select('*')->where('stop_id', $request->stop_id )->first();
            if ($check == NULL){
                $data['stop_id']=$request->stop_id;
                $data['route_id']=$request->route_id;
                $data['stop_name']=$request->stop_name;
                $data['created_at'] = Carbon::now('Asia/Dhaka');
                $data['updated_at'] = Carbon::now('Asia/Dhaka');
                DB::table('stops_info')->insert($data);
                Session::put('exception', 'Congratulations, Your information has been saved !'); 
                return Redirect::to('/route_info');
            }
            else {
                    Session::put('exception', 'Warning! The Stop ID is stored in the database, provide another Stop ID'); 
                    return Redirect::to('/route_info');
            }
        }
        else {
            return Redirect::to('/');
        }
       
    }
    
    public function save_stops_name(Request $request)
    {
        $admin_id = Session::get('admin_id');
        $admin_password = Session::get('admin_password');

        if ($this->authCheck($admin_id, $admin_password)){
            $data=array(); 
            $check = DB::table('stops_name')->select('*')->where('stop_name', $request->stop_name)->first();
            if ($check == NULL){
                $data['stop_name']=$request->stop_name;
                $data['created_at'] = Carbon::now('Asia/Dhaka');
                $data['updated_at'] = Carbon::now('Asia/Dhaka');
                DB::table('stops_name')->insert($data);
                Session::put('exception', 'Congratulations, Your information has been saved !'); 
                return Redirect::to('/route_info');
            }
            else {
                    Session::put('exception', 'Warning! The Stop name is stored in the database, provide another Stop name'); 
                    return Redirect::to('/route_info');
            }
        }
        else {
            return Redirect::to('/');
        }
       
    }
    public function stops_delete($stop_id )
    {
        $admin_id = Session::get('admin_id');
        $admin_password = Session::get('admin_password');

        if ($this->authCheck($admin_id, $admin_password)){
            DB::table('stops_info')->where('stop_id', $stop_id)->delete();
            return Redirect::to('/route_info');
        }
        else {
            return Redirect::to('/');
        }
    }
    public function delete_stops_name(Request $request)
    {
        $admin_id = Session::get('admin_id');
        $admin_password = Session::get('admin_password');

        if ($this->authCheck($admin_id, $admin_password)){
            $stop_delete = $request->stop_delete;
            // dd($stop_delete);
            DB::table('stops_name')->where('stop_name', $stop_delete)->delete();
            return Redirect::to('/route_info');
        }
        else {
            return Redirect::to('/');
        }
    }
    public function stops_edit($stop_id)
    {
        $admin_id = Session::get('admin_id');
        $admin_password = Session::get('admin_password');

        if ($this->authCheck($admin_id, $admin_password)){
            // ROUTE Table
            $allroute_info=DB::table('route_info')->get();
            // STOPS Table
            $allstops_info=DB::table('stops_info')->select('*')->where('stop_id', $stop_id)->first();
            
            $manage=view('admin.stop_edit')->with('all_route_info', $allroute_info)->with('all_stops_info', $allstops_info);

            return view('admin.layout')->with('route_info', $manage);
        }
        else {
            return Redirect::to('/');
        }
    } 
    public function admin_stops_edit(Request $request,$stop_id)
    {
        $admin_id = Session::get('admin_id');
        $admin_password = Session::get('admin_password');

        if ($this->authCheck($admin_id, $admin_password)){
            $data = array();
            // $data['route_id '] = $request->route_id ;
            $data['route_id'] = $request->route_id;
            $data['stop_name'] = $request->stop_name;
            $data['updated_at'] = Carbon::now();
            // dd($request->route_id);
            Session::put('exception', 'Congratulations, Your information has been update !');
            DB::table('stops_info')->where('stop_id', $stop_id)->update($data);
            return Redirect::to('/route_info');
        }
        else{
            return Redirect::to('/');
        }
    }
// _________________________________________________________________
//                           Schedule CONTROLLER
// _________________________________________________________________

public function bus_schedule()
    {
        
        $admin_id = Session::get('admin_id');
        $admin_password = Session::get('admin_password');
        
        if ($this->authCheck($admin_id, $admin_password)){
            //Bus DB get Data
            $allbus_info=DB::table('bus_info')->get();
            //Schedule DB get Data
            $allschedule_info=DB::table('schedule')->get();
            //Route DB get Data
            $allroute_info=DB::table('route_info')->get();
            //Driver DB get Data
            $alldriver_info=DB::table('driver_info')->get();

            $manage=view('admin.bus_schedule')->with('all_bus_info', $allbus_info)->with('all_route_info', $allroute_info)->with('all_driver_info', $alldriver_info)->with('all_schedule_info', $allschedule_info);

            return view('admin.layout')->with('bus_schedule', $manage);
        }
        else {
            return Redirect::to('/');
        }
    }
    public function save_schedule_info(Request $request)
    {
        $admin_id = Session::get('admin_id');
        $admin_password = Session::get('admin_password');

        if ($this->authCheck($admin_id, $admin_password)){
            $data=array(); 
            $check = DB::table('stops_info')->select('*')->where('stop_id', $request->stop_id )->first();
            if ($check == NULL){
                $data['bus_license']=$request->bus_license;
                $data['route_id']=$request->route_id;
                $data['driver_id']=$request->driver_id;
                $data['start_time']=$request->start_time;
                $data['created_at'] = Carbon::now('Asia/Dhaka');
                $data['updated_at'] = Carbon::now('Asia/Dhaka');
                DB::table('schedule')->insert($data);
                Session::put('exception', 'Congratulations, Your information has been saved !'); 
                return Redirect::to('/bus_schedule');
            }
            else {
                    Session::put('exception', 'Warning! The schedule is stored in the database'); 
                    return Redirect::to('/bus_schedule');
            }
        }  
        else {
            return Redirect::to('/');
        }

    }
    public function schedule_view ($schedule_id)
    {
        $admin_id = Session::get('admin_id');
        $admin_password = Session::get('admin_password');

        if ($this->authCheck($admin_id, $admin_password)){
            $schedule_description_view = DB::table('schedule')->select('*')->where('schedule_id', $schedule_id )->first();
            $allbus_info=DB::table('bus_info')->get();
            $manage=view('admin.schedule_view')->with('all_bus_info', $allbus_info)->with('schedule_description_profile', $schedule_description_view);
            return view('admin.layout')->with('bus_schedule', $manage);
        }
        else{
            return Redirect::to('/');
        }
    }
    public function schedule_delete($schedule_id )
    {
        $admin_id = Session::get('admin_id');
        $admin_password = Session::get('admin_password');

        if ($this->authCheck($admin_id, $admin_password)){
            DB::table('schedule')->where('schedule_id', $schedule_id)->delete();
            Session::put('exception', 'successfully deleted');
        }
        else{
            return Redirect::to('/');
        }
            return Redirect::to('/bus_schedule');
    }
    public function schedule_edit($schedule_id)
    {
        $admin_id = Session::get('admin_id');
        $admin_password = Session::get('admin_password');

        if ($this->authCheck($admin_id, $admin_password)){
            $schedule_description_view = DB::table('schedule')->select('*')->where('schedule_id', $schedule_id )->first();
            //Bus DB get Data
            $allbus_info=DB::table('bus_info')->get();
            //Schedule DB get Data
            $allschedule_info=DB::table('schedule')->get();
            //Route DB get Data
            $allroute_info=DB::table('route_info')->get();
            //Driver DB get Data
            $alldriver_info=DB::table('driver_info')->get();

            $manage=view('admin.schedule_edit')->with('all_bus_info', $allbus_info)->with('all_route_info', $allroute_info)->with('all_driver_info', $alldriver_info)->with('all_schedule_info', $allschedule_info)->with('schedule_description_profile', $schedule_description_view);
            
            return view('admin.layout')->with('schedule_edit', $manage);
        }
        else {
            return Redirect::to('/');
        }
    } 
    public function admin_schedule_edit(Request $request,$schedule_id)
    {
        $admin_id = Session::get('admin_id');
        $admin_password = Session::get('admin_password');

        if ($this->authCheck($admin_id, $admin_password)){
            $data = array();
            $data['bus_license'] = $request->bus_license;
            $data['route_id'] = $request->route_id;
            $data['driver_id'] = $request->driver_id;
            $data['start_time'] = $request->start_time;
            $data['updated_at'] = Carbon::now();
            // dd($request->route_id);
            Session::put('exception', 'Congratulations, Your information has been update !');
            DB::table('schedule')->where('schedule_id', $schedule_id)->update($data);
            return Redirect::to('/bus_schedule');
        }
        else{
            return Redirect::to('/');
        }
    }
    
// _________________________________________________________________
//                           Notice CONTROLLER
// _________________________________________________________________
    public function notice()
    {
        $admin_id = Session::get('admin_id');
        $admin_password = Session::get('admin_password');

        if ($this->authCheck($admin_id, $admin_password)){
            $allnotice_info=DB::table('notice_info')->get();
            $manage_notice=view('admin.notice')->with('all_notice_info', $allnotice_info);
            return view('admin.layout')->with('notice', $manage_notice);
        }
        else {
            return Redirect::to('/');
        }
    }
    public function save_notice_info(Request $request)
    {
        $data=array(); 
        $data['notice_title']=$request->notice_title;
        $data['notice_thumbnail']=$request->notice_thumbnail;
        $data['notice_description']= ($request->notice_description);
        $data['created_at'] = Carbon::now('Asia/Dhaka');
        $data['updated_at'] = Carbon::now('Asia/Dhaka');
        DB::table('notice_info')->insert($data);
        Session::put("exception', 'Congratulations, Your information has been saved !"); 
        return Redirect::to('/notice');
    } 
    public function notice_delete($notice_id)
    {
        $admin_id = Session::get('admin_id');
        $admin_password = Session::get('admin_password');

        if ($this->authCheck($admin_id, $admin_password)){
            DB::table('notice_info')->where('notice_id', $notice_id)->delete();
            return Redirect::to('/notice');
        }
        else {
            return Redirect::to('/');
        }
    }
    public function notice_view($notice_id)
    {
        $admin_id = Session::get('admin_id');
        $admin_password = Session::get('admin_password');

        if ($this->authCheck($admin_id, $admin_password)){
            $notice_description_view = DB::table('notice_info')->select('*')->where('notice_id', $notice_id)->first();
            $manage=view('admin.notice_view')->with('notice_description_profile', $notice_description_view);
            return view('admin.layout')->with('notice_view', $manage);
        }
        else{
            return Redirect::to('/');
        }
    }
    public function notice_edit($notice_id)
    {
        $admin_id = Session::get('admin_id');
        $admin_password = Session::get('admin_password');

        if ($this->authCheck($admin_id, $admin_password)){
            $notice_description_view = DB::table('notice_info')->select('*')->where('notice_id', $notice_id )->first();
            $manage=view('admin.notice_edit')->with('notice_description_profile', $notice_description_view);
            return view('admin.layout')->with('notice_edit', $manage);
        }
        else {
            return Redirect::to('/');
        }
    } 
    public function notice_schedule_edit(Request $request,$notice_id)
    {
        $admin_id = Session::get('admin_id');
        $admin_password = Session::get('admin_password');

        if ($this->authCheck($admin_id, $admin_password)){
            $data = array();
            $data['notice_title'] = $request->notice_title;
            $data['notice_thumbnail'] = $request->notice_thumbnail;
            $data['notice_description'] = $request->notice_description;
            $data['updated_at'] = Carbon::now('Asia/Dhaka');
            // dd($data);
            Session::put('exception', 'Congratulations, Your information has been update !');
            DB::table('notice_info')->where('notice_id', $notice_id)->update($data);
            return Redirect::to('/notice');
        }
        else{
            return Redirect::to('/');
        }
    }
}
