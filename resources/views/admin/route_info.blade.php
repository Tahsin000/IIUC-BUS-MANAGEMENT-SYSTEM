@extends('admin.layout')
@section('content')

<div class="start_container">
    <div class="row p-3 container-flex">
        <div class="col-sm-4"></div>
        <div class="col-sm-4 display-1 text-center">Route info</div>
        <div class="col-sm-4"></div>
    </div>

    <!-- table show  -->

    <div class="container-fluid ">
        <div class="row pt-4 justify-content-center">
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
        <p class="alert-warning text-center">
            <?php
                $exception = Session::get('exception');
                if ($exception === "Warning! The Stop ID is stored in the database, provide another Stop ID")
                {
                    echo $exception;
                    Session::put('exception', null);
                }
            ?>
        </p>
        <p class="alert-warning text-center">
            <?php
                $exception = Session::get('exception');
                if ($exception === "Warning! The Stop name is stored in the database, provide another Stop name")
                {
                    echo $exception;
                    Session::put('exception', null);
                }
            ?>
        </p>
        <p class="alert-warning text-center">
            <?php
                $exception = Session::get('exception');
                if ($exception === "Warning! You cannot delete this route")
                {
                    echo $exception;
                    Session::put('exception', null);
                }
            ?>
        </p>

        <p class="alert-warning text-center">
            <?php
                $exception = Session::get('exception');
                if ($exception === "Warning! The route ID is stored in the database, provide another Road ID")
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
            <div class="col-sm-5 card p-3">
                <div class="card">
                    <div class="card-body">
                        <h2 class="card-title">Route Data</h2>
                        <div class="row">
                            <div class="col-12">
                                <table id="" class="table table-striped" style="width:100%;">
                                    <thead>
                                        <tr>
                                            <th>Route ID #</th>
                                            <th>Route name</th>
                                            <th>Start point</th>
                                            <th>End point</th>
                                            <th>Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody class="text-center">
                                    @foreach($all_route_info as $v_route)
                                        <tr>
                                            <td>{{$v_route->route_id }}</td>
                                            <td>{{$v_route->route_name}}</td>
                                            <td>{{$v_route->start_point}}</td>
                                            <td>{{$v_route->end_point}}</td>
                                            <td>
                                                <a href="{{URL::to('/route_edit/'.$v_route->route_id)}}"><button class="btn btn-outline-warning">Edit</button></a> 
                                                <a href="{{URL::to('/route_delete/'.$v_route->route_id)}}" id="delete"><button class="btn btn-outline-danger">Delete</button></a> 
                                            </td>
                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div> 
            </div>
            <div class="col-sm-1"></div>
            <div class="col-sm-5 card p-3">
                <div class="card">
                    <div class="card-body">
                        <h2 class="card-title">Stops Data</h2>
                        <div class="row">
                            <div class="col-12">
                                <table id="" class="table table-striped" style="width:100%;">
                                    <thead>
                                        <tr>
                                            <th>Stop ID #</th>
                                            <th>Route ID ##</th>
                                            <th>Stop Name</th>
                                            <th>Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody class="text-center">
                                    @foreach($all_stops_info as $v_stops) 
                                        <tr>
                                            <td>{{$v_stops->stop_id  }}</td>
                                            <td>
                                                 
                                                @foreach($all_route_info as $v_route)
                                                    @if ($v_stops->route_id === $v_route->route_id)
                                                    
                                                        {{$v_route->route_id}}-{{$v_route->route_name}}
                                                        @break;
                                                    
                                                    @endif
                                                @endforeach
                                                
                                            </td>
                                            <td>{{$v_stops->stop_name }}</td>
                                            <td>
                                                <a href="{{URL::to('/stops_edit/'.$v_stops->stop_id)}}"><button class="btn btn-outline-warning">Edit</button></a>
                                                <a href="{{URL::to('/stops_delete/'.$v_stops->stop_id)}}" id="delete"><button class="btn btn-outline-danger">Delete</button></a>
                                            </td>
                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div> 
            </div>
        </div>
    </div>


    <!-- Form Start -->
    <div class="container-fluid ">

        <div class="row pt-4 justify-content-center">
            <div class="col-sm-5 card p-3">
                <div class="my-auto">
                    
                    <div class="row text-center p-4">
                        <p class="display-5">Add Route</p>
                    </div>
                    <form class="forms-sample" action="{{url('/save_route_info')}}" method="POST" enctype="multipart/form-data">
                        {{ csrf_field() }}
                        
                        <div class="form-group card-body">
                            <input type="number" class="form-control p-input" required="true" aria-describedby="" placeholder="Enter Route ID" name="route_id" 
                            value="">
                        </div>
    
    
                        <div class="form-group card-body">
                            <input type="text" class="form-control p-input" required="true" aria-describedby="" placeholder="Enter Route Name" name="route_name" 
                            value="">
                        </div>
                        
                        <div class="form-group card-body">
                            <input type="text" class="form-control p-input" required="true" aria-describedby="" placeholder="Enter Start Point" name="start_point" 
                            value="">
                        </div>
                        
                        <div class="form-group card-body">
                            <input type="text" class="form-control p-input" required="true" aria-describedby="" placeholder="Enter End Point" name="end_point" 
                            value="">
                        </div>
    
                        <div class="col-md-12 text-center card-body">
                            <button type="submit" class="btn btn_color btn-block">Add</button>
                        </div>
                    </form>
                </div>

                <!-- Title name  -->
            </div>
            <div class="col-sm-1"></div>
            <div class="col-sm-5 card">
                <div class="row">
                    <div class="col-sm-12    card-body">
                        <div class="row text-center p-4">
                            <p class="display-5">Stops Name</p>
                        </div>
                        <div class="row">
                            <form class="forms-sample col-sm-6" action="{{url('/save_stops_name')}}" method="POST" enctype="multipart/form-data">
                                {{ csrf_field() }}
                                
                                <div class="form-group card-body">
                                    <input type="text" class="form-control p-input" required="true" aria-describedby="" placeholder="Enter Stop name" name="stop_name">
                                </div>
                                <div class=" text-center ">
                                    <button type="submit" class="btn btn_color btn-block">Add</button>
                                </div>
                            </form>

                            <form class="forms-sample col-sm-6" action="{{url('/delete_stops_name')}}" method="POST" enctype="multipart/form-data">
                                {{ csrf_field() }}
                                
                                <div class="form-group card-body">
                                    <input type="text" class="form-control p-input" required="true" aria-describedby="" placeholder="Delete  Stop name" name="stop_delete">
                                </div>

                                <div class=" text-center ">
                                    <button type="submit" class="btn btn-outline-danger btn-block">Delete</button>
                                </div>
                            </form>                            
                        </div>

                    </div>

                    <div class="col-sm-12 card-body">
                            <!-- Title name  -->
                        <div class="row text-center p-4">
                            <p class="display-5">Add Stops</p>
                        </div>
                        <form class="forms-sample" action="{{url('/save_stops_info')}}" method="POST" enctype="multipart/form-data">
                            {{ csrf_field() }}
                            
                            <div class="form-group card-body">
                                <input type="number" class="form-control p-input" required="true" aria-describedby="" placeholder="Enter Stop ID" name="stop_id" 
                                value="">
                            </div>

                            <div class="form-group card-body">
                                <select class="form-select form-control" required="true" required="true" name="route_id">
                                    <option value="" disabled selected>Select Route ID</option>
                                    @foreach($all_route_info as $v_route)
                                    <option value="{{$v_route->route_id }}">{{$v_route->route_id }} - {{$v_route->route_name}}</option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="form-group card-body">
                                <select class="form-select form-control" required="true" required="true" name="stop_name">
                                    <option value="" disabled selected>Enter Stop Name</option>
                                    @foreach($all_stops_name as $v_stops_name)
                                        <option value="{{$v_stops_name->stop_name}}">{{$v_stops_name->stop_name}}</option>
                                    @endforeach
                                </select>

                                <!-- <input type="text" class="form-control p-input" required="true" aria-describedby="" placeholder="Enter Stop Name" name="stop_name" 
                                value=""> -->
                            </div>

                            <div class="col-md-12 text-center card-body">
                                <button type="submit" class="btn btn_color btn-block">Add</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
<!--     
    Bus Schedule
    Bus info
    Student info
    Route info
    Driver info
    report -->

</div>
@endsection
