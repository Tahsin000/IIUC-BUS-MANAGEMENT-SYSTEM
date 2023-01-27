<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use APP\Http\Requests;
use Illuminate\Support\Facades\Response;
use DB;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Str;
use Carbon\Carbon;
use Session;
Session_start();

class anonymousController extends Controller
{
    public function home_page()
    {
        $allstopd_info=DB::table('stops_name')->orderBy('stop_name')->get();
        return view('home_page')->with('all_stops_info', $allstopd_info);
    }
    public function schedule(){
         //Bus DB get Data
         $allbus_info=DB::table('bus_info')->get();
         //Schedule DB get Data
         $allschedule_info=DB::table('schedule')->get();
         //stops DB get Data
         $allstops_info=DB::table('stops_info')->get();
         //Route DB get Data
         $allroute_info=DB::table('route_info')->get();

         return view('schedule')->with('all_bus_info', $allbus_info)->with('all_route_info', $allroute_info)->with('all_schedule_info', $allschedule_info)->with('all_stops_info', $allstops_info);
    }
    public function search_schedule_anonymous(){
        $bus_stop = $_GET['bus_stop'];

        $allbus_info=DB::table('bus_info')->get();
        //Schedule DB get Data
        $allschedule_info=DB::table('schedule')->get();
        //Route DB get Data
        $allroute_info=DB::table('route_info')->get();

        $allstops_info=DB::table('stops_info')->get();
        
        $products = DB::table('stops_info')->select('*')->where('stop_name',$bus_stop)->get();
        // dd($products);
        return view('search_schedule_anonymous')->with('all_stop_info', $products)->with('all_schedule_info', $allschedule_info)->with('all_route_info', $allroute_info)->with('all_bus_info', $allbus_info)->with('all_stops_info', $allstops_info);
    }
}
