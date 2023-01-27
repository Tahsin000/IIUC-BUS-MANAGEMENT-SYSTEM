@extends('admin.layout')
@section('content')


<div class="start_container">
<div class="row p-3 container-fluid">
<p class="alert-success text-center">
    <?php
        $exception = Session::get('exception');
        if ($exception === "Congratulations, Your information has been saved !")
        {
            echo $exception;
            Session::put('exception', null);
        }
    ?>
</p>
<p class="alert-success text-center">
    <?php
        $exception = Session::get('exception');
        if ($exception === "Congratulations, Your information has been update !")
        {
            echo $exception;
            Session::put('exception', null);
        }
    ?>
</p>
<p class="alert-info text-center">
    <?php
        $exception = Session::get('exception');
        if ($exception === "successfully deleted")
        {
            echo $exception;
            Session::put('exception', null);
        }
    ?>
</p>
        <div class="col-sm-4"></div>
        <div class="col-sm-4 display-1 text-center">Schedule</div>
        <div class="col-sm-4"></div>
    </div>

    <!-- table View -->
    <div class="card">
        <div class="card-body">
            <h2 class="card-title">Data</h2>
            <div class="row">
                <div class="col-12">
                    <table id="order-listing" class="table table-striped" style="width:100%;">
                        <thead>
                            <tr>
                                <th>Bus License</th>
                                <th>Route ID</th>
                                <th>Driver ID</th>
                                <th>Start Time</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody class="text-center">
                            @foreach($all_schedule_info as $v_schedule)
                                <tr>
                                    <td>{{$v_schedule->bus_license }}</td>
                                    <td>{{$v_schedule->route_id }}</td>
                                    <td>{{$v_schedule->driver_id }}</td>
                                    <td>{{date('h:i A', strtotime($v_schedule->start_time))}}</td>
                                    <td>
                                        <a href="{{URL::to('/schedule_view/'.$v_schedule->schedule_id)}}"><button class="btn btn-outline-primary">View</button></a> 
                                        <a href="{{URL::to('/schedule_edit/'.$v_schedule->schedule_id)}}"><button class="btn btn-outline-warning">Edit</button></a>
                                        <a href="{{URL::to('/schedule_delete/'.$v_schedule->schedule_id)}}"><button class="btn btn-outline-danger" >Delete</button></a> 
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div> 

    <!-- form view -->
    <div class="row p-3 container-fluid">

        <div class="row">

            <div class="col-sm-2"></div>
            <div class="col-sm-8 card p-5">
                <!-- Form Start -->
                <div class="container-fluid">
                    
                    <div class="row text-center">
                        <p class="display-5">Add Schedule</p>
                    </div>
                    <form role="form" class="forms-sample" action="{{url('/save_schedule_info')}}" method="POST" enctype="multipart/form-data">
                        {{ csrf_field() }}
                            
                        <div class="row">
                            <div class="col-sm-2"></div>
                            <div class="col-sm-8">

                                <div class="card-body form-group">
                                    <select class="form-select form-control" required="true" required="true" name="bus_license">
                                        <option value="" disabled selected>Select Bus License</option>
                                        @foreach($all_bus_info as $v_bus)
                                            <option value="{{$v_bus->bus_license}}">{{$v_bus->bus_license}} (capacity-{{$v_bus->student_capacity}})</option>
                                        @endforeach
                                    </select>
                                </div>

                                <div class="card-body form-group">
                                    <select class="form-select form-control" required="true" required="true" name="route_id">
                                        <option value="" disabled selected>Select Route ID</option>
                                        @foreach($all_route_info as $v_route)
                                            <option value="{{$v_route->route_id }}">{{$v_route->route_id }} . {{$v_route->route_name}}</option>
                                        @endforeach
                                    </select>
                                </div>

                                <div class="card-body form-group">
                                    <select class="form-select form-control" required="true" required="true" name="driver_id">
                                        <option value="" disabled selected>Select Driver ID</option>
                                        @foreach($all_driver_info as $v_driver)
                                            <option value="{{$v_driver->driver_id}}">{{$v_driver->driver_id }} . {{$v_driver->driver_name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                               
                                <div class="card-body form-group">
                                    <input type="time" id="time" class="form-control p-input" required="true" aria-describedby="" placeholder="Enter Start Time" name="start_time" value="">
                                </div>

                            </div>
                            <div class="col-sm-2"></div>
                        </div>
                        <div class="row m-4 form-group">
                            <div class="col-sm-3"></div>
                            <button class="col-sm-6 btn btn_color btn-block">Add</button>
                        </div>
                    </form>
                </div>

                
            </div>
            <div class="col-sm-2"></div>
        </div>
    </div>

</div>
@endsection
