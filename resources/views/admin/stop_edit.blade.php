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
                    
                <form lass="forms-sample" action="{{URL::to('/admin_stops_edit', $all_stops_info->stop_id)}}" method="POST" enctype="multipart/form-data">
                    {{ csrf_field() }}

                    <div class="form-group card-body">
                        <label for="exampleInputEmail1">Stop ID</label>
                        <input type="number" class="form-control p-input" aria-describedby="" placeholder="The Stop ID cannot be changed" name="stop_id  " disabled
                        value="{{$all_stops_info->stop_id}} You can't change your stop ID">
                    </div>
                    
                    <div class="form-group card-body">
                        <label for="exampleInputEmail1">Route ID</label>
                        <select class="form-select form-control" required="true" name="route_id">
                            @foreach($all_route_info as $v_route)
                                <option value="{{$v_route->route_id}}">{{$v_route->route_id }} - {{$v_route->route_name}}</option>
                            @endforeach
                        </select>  
                    </div>
                    
                    <div class="form-group card-body">
                        <label for="exampleInputEmail1">Stop Name</label>
                        <input type="text" class="form-control p-input" aria-describedby="" placeholder="Enter Start Point" name="stop_name" 
                        value="{{$all_stops_info->stop_name}}">
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