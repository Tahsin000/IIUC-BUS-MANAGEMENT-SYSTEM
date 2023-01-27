@extends('admin.layout')
@section('content')
<div class="start_container">

    <div class="container-fluid" >
        <div class="row p-4 my-auto" style="height:45rem">
            <div class="row">
                <p class="display-4 p-3 text-center">Driver profile</p>
            </div>
            <div class="col-sm-3"></div>
            <div class="col-sm-6 my-auto">
                <div class="card ">
                    <div class="col-sm-12 text-center p-5">
                        <div class="card-title ">
                            <img src="{{URL::to($driver_description_profile->driver_picture)}}" alt="" height="120" class="rounded-circle">
                        </div>
                        <div class="card-body"><h2>{{$driver_description_profile->driver_name}}</h2></div>
                    </div>
                    <div class="text-right p-3">
                        <div class="row mx-auto">
                                <div class="col-sm-6">
                                    <div class="card text-center">
                                        <p class="card-body"><b>Driver ID: </b> dID_{{$driver_description_profile->driver_id}}</p>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="card text-center">
                                        <p class="card-body"><b>License: </b>{{$driver_description_profile->driving_license}}</p>
                                    </div>
                                </div>
                                <div class="col-sm-12 pt-3">
                                    <div class="card text-center">
                                        <p class="card-body"><b>Phone: </b>{{$driver_description_profile->driver_phone}}</p>
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