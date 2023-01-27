@extends('admin.layout')
@section('content')
<div class="start_container">

    <div class="container-fluid" >
        <div class="row p-4 my-auto" style="height:35rem">
            <div class="row">
                <p class="display-4 p-3 text-center">VIEW</p>
            </div>
            <div class="col-sm-3"></div>
            <div class="col-sm-6 my-auto">
                <div class="card ">
                    
                    <div class="text-right p-3">
                        <div class="row mx-auto">
                                <div class="col-sm-12 p-3">
                                    <div class="card text-center p-4">
                                        <h4 class="card-body"><b>Bus License: </b>{{$schedule_description_profile->bus_license}}</h4>
                                        <h5 class=""><b>capacity: </b>
                                        @foreach($all_bus_info as $v_bus)
                                            @if($v_bus->bus_license == $schedule_description_profile->bus_license)
                                                {{$v_bus->student_capacity}}
                                            @endif
                                        @endforeach
                                        </h5>
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="card text-center">
                                        <p class="card-body"><b>Route ID: </b>{{$schedule_description_profile->route_id}}</p>
                                    </div>
                                </div>

                                <div class="col-sm-4">
                                    <div class="card text-center">
                                        <p class="card-body"><b>Driver ID: </b>{{$schedule_description_profile->driver_id}}</p>
                                    </div>
                                </div>
                                
                                <div class="col-sm-4">
                                    <div class="card text-center">
                                        <p class="card-body"><b>Start Time: </b>{{date('h:i A', strtotime($schedule_description_profile->start_time))}}</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-3"></div>
        </div>
    </div>

</div>
@endsection