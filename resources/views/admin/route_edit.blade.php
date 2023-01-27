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
                    
                <form class="forms-sample" action="{{URL::to('/admin_route_edit', $route_description_profile->route_id)}}" method="POST" enctype="multipart/form-data">
                    {{ csrf_field() }}

                    <div class="form-group card-body">
                        <label for="exampleInputEmail1">Route ID</label>
                        <input type="number" class="form-control p-input" aria-describedby="" placeholder="The route ID cannot be changed" name="route_id" disabled
                        value="{{$route_description_profile->route_id}} You can't change your route ID">
                    </div>

                    <div class="form-group card-body">
                        <label for="exampleInputEmail1">Route Name</label>
                        <input type="text" class="form-control p-input" aria-describedby="" placeholder="Enter Route Name" name="route_name" 
                        value="{{$route_description_profile->route_name}}">
                    </div>
                    
                    <div class="form-group card-body">
                        <label for="exampleInputEmail1">Start Point</label>
                        <input type="text" class="form-control p-input" aria-describedby="" placeholder="Enter Start Point" name="start_point" 
                        value="{{$route_description_profile->start_point}}">
                    </div>
                    
                    <div class="form-group card-body">
                        <label for="exampleInputEmail1">End Point</label>
                        <input type="text" class="form-control p-input" aria-describedby="" placeholder="Enter End Point" name="end_point" 
                        value="{{$route_description_profile->end_point}}">
                    </div>
<!-- 
                    <div class="form-group card-body">
                        <label>Upload Image</label>
                        <div class="row pt-3">
                            <div class="col-sm-4 ">
                                <label for="exampleInputFile2" class="btn btn-outline-primary btn-block ">Browse</label>
                                <input style="display:none; visibility: none;" type="file" name="driver_picture" class="form-control-file" id="exampleInputFile2" aria-describedby="fileHelp">
                            </div>
                            <small id="fileHelp" class="form-text text-muted">Files above 210 kb will not be supported</small>
                        </div>
                    </div>
                     -->
                    <div class="col-sm-12 text-center card-body">
                        <button type="submit" class="btn btn_color btn-block">Update</button>
                    </div>
                </form>


                </div>
            </div>
            <div class="col-sm-3"></div>
        </div>
    </div>
</div>
@endsection