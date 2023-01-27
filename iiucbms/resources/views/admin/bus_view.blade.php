@extends('admin.layout')
@section('content')
<div class="start_container">

    <div class="container-fluid" >
        <div class="row p-4 my-auto" style="height:30rem">
            <div class="row">
                <p class="display-4 p-3 text-center">Bus profile</p>
            </div>
                <div class="col-sm-3"></div>
                <div class="col-sm-6">
                    <div class="card text-center">
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="card-body p-4"><span class="display-4">License</span><h5 class="p-3">{{$all_bus_info->bus_license}}</h5></div>
                            </div>
                            <div class="col-sm-6">
                                <div class="card-body p-4"><span class="display-4">Capacity</span><h5 class="p-3">{{$all_bus_info->student_capacity}}</h5></div>
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