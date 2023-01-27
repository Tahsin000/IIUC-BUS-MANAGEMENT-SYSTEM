@extends('layout')
@section('content')
<style>
    .card{
        border-radius: 4px;
        background: #fff;
        box-shadow: 0 6px 10px rgba(0,0,0,.08), 0 0 6px rgba(0,0,0,.05);
        transition: .3s transform cubic-bezier(.155,1.105,.295,1.12),.3s box-shadow,.3s -webkit-transform cubic-bezier(.155,1.105,.295,1.12);
    padding: 14px 80px 18px 36px;
    cursor: pointer;
    }

    .card:hover{
        transform: scale(1.05);
    box-shadow: 0 10px 20px rgba(0,0,0,.12), 0 4px 8px rgba(0,0,0,.06);
    }

    .card h3{
    font-weight: 600;
    }

    .card img{
    position: absolute;
    top: 20px;
    right: 15px;
    max-height: 120px;
    }

    .card-1{
        background-repeat: no-repeat;
        background-position: right;
        background-size: 80px;
    }

    .card-2{
        background-repeat: no-repeat;
        background-position: right;
        background-size: 80px;
    }

    .card-3{
        background-repeat: no-repeat;
        background-position: right;
        background-size: 80px;
    }

    @media(max-width: 990px){
            .card{
            margin: 20px;
        }
    } 
    .container_1{
        margin: 0 0 5rem 0;
    }
    @media only screen and (max-width: 600px) {
        .card-title{
            font-size:1.35rem;
            font-weight:bold;
        }
        .container_1{
            margin: 0 0 10rem 0;
        }
    }
</style>

<div class="container-fluid pt-md-4 container_1">
    <div class="row justify-content-center card_1">
        @foreach($all_schedule_info as $v_schedule)
        <a href="{{URL::to('/schedule_to_user_login/'.$v_schedule->schedule_id)}}" class="col-sm-4 card p-3 m-3" style="color: #121212;
    text-decoration: none;">
            <div class="card-body">
                <h2 class="card-title">{{$v_schedule->bus_license}}</h2>
                <div class="row">
                    <div class="col-sm-3">
                        <span class="bi bi-clock"></span>
                        <span class="p-1">Departure Time</span>
                    </div>
                    <div class="col-sm-1">|</div>
                    <div class="col-sm-3">
                        <span>{{date('h:i A', strtotime($v_schedule->start_time))}}</span>
                    </div>
                    <div class="col-sm-3"></div>
                </div>

                <div class="row mt-2">
                    <div class="col-sm-3">
                        <span class="bi bi-geo-alt-fill"></span>
                        <span class="p-1">Route</span>
                    </div>
                    <div class="col-sm-1">|</div>
                    <div class="col-sm-3">
                        <span>
                            @foreach($all_route_info as $v_route)
                                @if($v_route->route_id == $v_schedule->route_id)
                                    {{$v_route->start_point}} - {{$v_route->end_point}}
                                @endif
                            @endforeach
                        </span>
                    </div>
                    <div class="col-sm-2"></div>
                    <div class="col-sm-3 container mt-4">
                        <div class="row">
                            <h5 class="text-center bg-success text-white p-2 my-auto col-sm-12">Capacity</h5>
                            <h5 class="text-center bg-dark text-white p-2 my-auto col-sm-12">
                                @foreach($all_bus_info as $v_bus)
                                    @if($v_bus->bus_license == $v_schedule->bus_license)
                                        {{$v_bus->student_capacity}}
                                    @endif
                                @endforeach
                            </h5>
                        </div>
                    </div>
                </div>

                <div class="row container mt-3">
                    <small>
                        @php
                            $i=0;$check=null;
                            foreach($all_stops_info as $v_stops){
                                if($v_stops->route_id == $v_schedule->route_id){
                                    if ($check == $v_stops->route_id) {
                                        if ($i > 0)echo(' - ');
                                    }
                                    else {
                                        $check = $v_stops->route_id;
                                        $i = 0;
                                    }
                                    echo($v_stops->stop_name);
                                }
                                $i++;   
                            }
                        @endphp
                    </small>
                </div>
            </div>
        </a>
        @endforeach
        
    </div>
</div>


@endsection