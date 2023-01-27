@extends('admin.layout')
@section('content')


<div class="start_container">
    <div class="row p-3 container-flex">
        <div class="col-sm-4"></div>
        <div class="col-sm-4 display-1 text-center">Bus info</div>
        <div class="col-sm-4"></div>
    </div>

    <!-- table show  -->
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
                            <th>Bus License #</th>
                            <th>Student Capacity</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody class="text-center">
                    @foreach($all_bus_info as $v_bus)
                        <tr>
                            <td>{{$v_bus->bus_license}}</td>
                            <td>{{$v_bus->student_capacity}}</td>
                            <td>
                                <a href="{{URL::to('/bus_view/'.$v_bus->bus_license)}}"><button class="btn btn-outline-primary">View</button></a> 
                                <a href="{{URL::to('/bus_edit/'.$v_bus->bus_license)}}"><button class="btn btn-outline-warning">Edit</button></a>
                                <a href="{{URL::to('/bus_delete/'.$v_bus->bus_license)}}" id="delete"><button class="btn btn-outline-danger">Delete</button></a>
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
    <div class="row pt-4 container-fluid">

        <div class="row p-4">

            <div class="col-sm-3"></div>
            <div class="col-sm-6 card">

                <!-- Title name  -->
                <div class="row text-center p-4">
                    <p class="display-5">Add Bus</p>
                </div>
                <form class="forms-sample" action="{{url('/save_bus_info')}}" method="POST" enctype="multipart/form-data">
                    {{ csrf_field() }}
                    
                    <div class="form-group card-body">
                        <input type="text" class="form-control p-input" aria-describedby="" placeholder="Enter Bus License" name="bus_license" 
                        value="">
                    </div>

                    <div class="form-group card-body">
                        <input type="number" class="form-control p-input" aria-describedby="" placeholder="Enter Student Capacity" name="student_capacity" 
                        value="">
                    </div>
                    <div class="col-md-12 text-center card-body">
                        <button type="submit" class="btn btn_color btn-block">Add</button>
                    </div>
                </form>
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
