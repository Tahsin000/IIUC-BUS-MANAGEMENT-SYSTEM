@extends('admin.layout')
@section('content')
<div class="start_container">

    <div class="container-fluid" >
        <div class="row" style="height:40rem">
        
            <div class="row">
                <p class="display-4 pt-4 text-center">Edit panel</p>
            </div>
            <div class="col-sm-3"></div>
            <div class="col-sm-6 my-auto">
                <div class="card">
                    
                <form role="form" class="forms-sample" action="{{URL::to('/admin_schedule_edit', $schedule_description_profile->schedule_id)}}" method="POST" enctype="multipart/form-data">
                        {{ csrf_field() }}
                            
                        <div class="row">
                            <div class="col-sm-2"></div>
                            <div class="col-sm-8 p-3">

                                <div class="card-body form-group">

                                    <label for="exampleInputEmail1">Bus License</label>
                                    <select class="form-select form-control" required="true" required="true" name="bus_license">
                                        @foreach($all_bus_info as $v_bus)
                                            <option value="{{$v_bus->bus_license}}">{{$v_bus->bus_license}} (capacity-{{$v_bus->student_capacity}})</option>
                                        @endforeach
                                    </select>
                                </div>

                                <div class="card-body form-group">
                                    <label for="exampleInputEmail1">Route ID</label>
                                    <select class="form-select form-control" required="true" required="true" name="route_id">
                                        @foreach($all_route_info as $v_route)
                                            <option value="{{$v_route->route_id }}">{{$v_route->route_id }} . {{$v_route->route_name}}</option>
                                        @endforeach
                                    </select>
                                </div>

                                <div class="card-body form-group">
                                    <label for="exampleInputEmail1">Driver ID</label>
                                    <select class="form-select form-control" required="true" required="true" name="driver_id">
                                        @foreach($all_driver_info as $v_driver)
                                            <option value="{{$v_driver->driver_id}}">{{$v_driver->driver_id }} . {{$v_driver->driver_name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                               
                                <div class="card-body form-group">
                                    <label for="exampleInputEmail1">Start Time</label>
                                    <input type="time" id="time" class="form-control p-input" required="true" aria-describedby="" placeholder="Enter Start Time" name="start_time" value="{{$schedule_description_profile->start_time}}">
                                </div>

                            </div>
                            <div class="col-sm-2"></div>
                        </div>
                        <div class="row m-4 form-group">
                            <div class="col-sm-3"></div>
                            <button class="col-sm-6 btn btn_color btn-block">Update</button>
                        </div>
                    </form>

                </div>
            </div>
            <div class="col-sm-3"></div>
        </div>
    </div>
</div>
@endsection