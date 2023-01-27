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
                    
                <form class="forms-sample" action="{{URL::to('/admin_bus_edit', $bus_description_profile->bus_license)}}" method="POST" enctype="multipart/form-data">
                    {{ csrf_field() }}
                    <div class="form-group card-body">
                        <label for="exampleInputEmail1">License</label>
                        <input type="text" class="form-control p-input" aria-describedby="" placeholder="Enter Driver Name" name="bus_license" 
                        value="{{$bus_description_profile->bus_license}}">
                    </div>

                    <div class="form-group card-body">
                        <label for="exampleInputEmail1">Capacity</label>
                        <input type="number" class="form-control p-input" aria-describedby="" placeholder="Enter Driver License" name="student_capacity" 
                        value="{{$bus_description_profile->student_capacity}}">
                    </div>

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