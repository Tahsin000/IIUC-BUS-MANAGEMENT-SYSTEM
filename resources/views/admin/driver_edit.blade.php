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
                    
                <form class="forms-sample" action="{{URL::to('/admin_driver_edit', $driver_description_profile->driver_id)}}" method="POST" enctype="multipart/form-data">
                    {{ csrf_field() }}
                    <div class="form-group card-body text-center" >
                        <img src="{{URL::to($driver_description_profile->driver_picture)}}" alt="" height="120rem" style="border-radius: 50%;">
                    </div>
                    <div class="form-group card-body">
                        <label for="exampleInputEmail1">Driver Name</label>
                        <input type="text" class="form-control p-input" aria-describedby="" placeholder="Enter Driver Name" name="driver_name" 
                        value="{{$driver_description_profile->driver_name}}">
                    </div>

                    <div class="form-group card-body">
                        <label for="exampleInputEmail1">License</label>
                        <input type="text" class="form-control p-input" aria-describedby="" placeholder="Enter Driver License" name="driving_license" 
                        value="{{$driver_description_profile->driving_license}}">
                    </div>
                    
                    <div class="form-group card-body">
                        <label for="exampleInputEmail1">Phone Number</label>
                        <input type="text" class="form-control p-input" aria-describedby="" placeholder="Enter Phone Number" name="driver_phone" 
                        value="{{$driver_description_profile->driver_phone}}">
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