@extends('admin.layout')
@section('content')
<style>
    .card_sfx{
        border-radius: 4px;
        background: #fff;
        box-shadow: 0 6px 10px rgba(0,0,0,.08), 0 0 6px rgba(0,0,0,.05);
        transition: .3s transform cubic-bezier(.155,1.105,.295,1.12),.3s box-shadow,.3s -webkit-transform cubic-bezier(.155,1.105,.295,1.12);
    padding: 14px 80px 18px 36px;
    cursor: pointer;
    }

    .card_sfx:hover{
        transform: scale(1.05);
    box-shadow: 0 10px 20px rgba(0,0,0,.12), 0 4px 8px rgba(0,0,0,.06);
    }

    .card_sfx h3{
    font-weight: 600;
    }

    .card_sfx img{
    position: absolute;
    top: 20px;
    right: 15px;
    max-height: 120px;
    }

    @media(max-width: 990px){
            .card{
            margin: 20px;
        }
    } 
</style>

<div class="start_container">
<div class="row p-3 container-fluid">
    <div class="col-sm-4"></div>
    <div class="col-sm-4 display-1 text-center">Dashboard</div>
    <div class="col-sm-4"></div>
</div>

<div class="row p-3 container-flex">
    <div class="col-sm-4"></div>
    <div class="col-sm-4">
        <div class="card text-center p-3">
            <div class="card-title ">
                <svg xmlns="http://www.w3.org/2000/svg" width="120" height="120" fill="currentColor" class="bi bi-person-fill" viewBox="0 0 16 16">
                <path d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H3Zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6Z"/>
                </svg>
            </div>
            
            <div class="card-body"><h4>Admin ID: {{ $admin_details_info->admin_id }}</h4></div>
        </div>
    </div>
    <div class="col-sm-4"></div>
</div>

<div class="row p-3 container-flex">
    <a href="{{URL::to('bus_info')}}" class="col-sm-4 text-decoration-none" style="color: #191919;
    text-decoration: none;">
        <div class="card card_sfx">
            <div class="p-4">
                <div class="card-title text-center pt-3">
                    <i class="bi bi-bus-front" style="font-size:4vh;"></i>
                </div>
                <div class="card-title display-4 text-center">Buses</div>
                <div class="card-body text-center">
                    <h2>
                        @php
                            $buses=DB::table('bus_info')->count('bus_license');
                        @endphp
                        {{$buses}}
                    </h2>
                </div>
            </div>
        </div>
    </a>
    <a href="{{URL::to('student_info')}}" class="col-sm-4 text-decoration-none" style="color: #191919;
    text-decoration: none;">
        <div class="card card_sfx">
            <div class="p-4">
                
                <div class="card-title display-4 text-center">
                    <i class="bi bi-person" style="font-size:4vh;"></i>
                </div>
                <div class="card-title display-4 text-center">Students</div>
                <div class="card-body text-center">
                    <h2>
                        @php
                            $students=DB::table('student_tbl')->count('student_id');
                        @endphp
                        {{$students}}
                    </h2>
                </div>
            </div>
        </div>
    </a>
    <a href="{{URL::to('driver_info')}}" class="col-sm-4 text-decoration-none" style="color: #191919;
    text-decoration: none;">
        <div class="card card_sfx">
            <div class="p-4">
            <div class="card-title display-4 text-center">
            <i class="bi bi-send-plus-fill"  style="font-size:4vh"></i>
                </div>
                <div class="card-title display-4 text-center">Drivers</div>
                <div class="card-body text-center">
                    <h2>
                        @php
                            $driver=DB::table('driver_info')->count('driver_id');
                        @endphp
                        {{$driver}}
                    </h2>
                </div>
            </div>
        </div>
    </a>
<!-- 
Bus Schedule
Bus info
Student info
Route info
Driver info
report
    -->
</div>
</div>
@endsection
