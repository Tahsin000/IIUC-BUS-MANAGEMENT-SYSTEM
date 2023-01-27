@extends('admin.layout')
@section('content')


 <div class="start_container">

    <div class="row p-3">
        <div class="col-sm-4"></div>
        <div class="col-sm-4 display-1 text-center">Driver info</div>
        <div class="col-sm-4"></div>
    </div>

<div class="card">
    <div class="card-body">
        <h2 class="card-title">Data</h2>
        <div class="row">
            <div class="col-12">
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
                <table id="order-listing" class="table table-striped" style="width:100%;">
                    <thead>
                        <tr>
                            <th>Driver ID #</th>
                            <th>Driver Name</th>
                            <th>Driving License</th>
                            <th>Driver Phone</th>
                            <th>Driver Picture</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody class="text-center">
                    @foreach($all_driver_info as $v_driver)
                        <tr>
                            <td>dID_{{$v_driver->driver_id}}</td>
                            <td>{{$v_driver->driver_name}}</td>
                            <td>{{$v_driver->driving_license}}</td>
                            <td>{{$v_driver->driver_phone}}</td>
                            <td><img src="{{URL::to($v_driver->driver_picture)}}" height="50" width="50" style="border-radius: 50%;"></td>
                            <td>
                                <a href="{{URL::to('/driver_view/'.$v_driver->driver_id)}}"><button class="btn btn-outline-primary">View</button></a> 
                                <a href="{{URL::to('/driver_edit/'.$v_driver->driver_id)}}"><button class="btn btn-outline-warning">Edit</button></a>
                                <a href="{{URL::to('/driver_delete/'.$v_driver->driver_id)}}" id="delete"><button class="btn btn-outline-danger">Delete</button></a>
                            </td>
                        </tr>
                        
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div> 
 
<!-- Form Start -->
<div class="row p-3 container-flex">

    <div class="row">

        <div class="col-sm-2"></div>
        <div class="col-sm-8 card p-5">
            <!-- Form Start -->
            <div class="container-fluid">
                
                <div class="row text-center">
                    <p class="display-5">Add Driver</p>
                </div>
                <form role="form" class="forms-sample" action="{{url('/save_driver_info')}}" method="POST" enctype="multipart/form-data">
                {{ csrf_field() }}
                        
                    <div class="row">
                        <div class="col-sm-2"></div>
                        <div class="col-sm-8">

                            <div class="card-body form-group">
                                <input
                                name="driver_name"
                                type="text"
                                id="form2Example1"
                                class="form-control"
                                placeholder="Enter Driver Name"
                                required="true"
                                />
                            </div>

                            <div class="card-body form-group">
                                <input
                                name="driving_license"
                                type="text"
                                id="form2Example2"
                                class="form-control"
                                placeholder="Enter Driving License"
                                required="true"
                                />
                            </div>

                            <div class="card-body form-group">
                                <input
                                name="driver_phone"
                                type="number"
                                id="form2Example3"
                                class="form-control"
                                placeholder="Enter Phone Number"
                                required="true"
                                />
                            </div>

                            <div class="form-group card-body">
                                <label>Upload Image</label>
                                <div class="row pt-3">
                                    <div class="col-sm-4 ">
                                        <input style="" type="file" name="driver_picture" class="form-control-file" id="exampleInputFile2" aria-describedby="fileHelp" required="true">
                                    </div>
                                    <small id="fileHelp" class="form-text text-muted">Files above 210 kb will not be supported</small>
                                </div>
                            </div>

                           
                            <!-- This is IMG portion -->
                            <!-- Enter picture Code here  -->
                        </div>
                        <div class="col-sm-2"></div>
                    </div>
                    <div class="row m-4 form-group">
                        <div class="col-sm-3"></div>
                        <button class="col-sm-6 btn btn_color btn-block">Add Driver</button>
                    </div>
                </form>
            </div>

            
        </div>
        <div class="col-sm-2"></div>
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
