@extends('admin.layout')
@section('content')

<div class="start_container">

    <div class="row p-3">
        <div class="col-sm-4"></div>
        <div class="col-sm-4 display-1 text-center">Notice info</div>
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
                                <th>ID#</th>
                                <th>Title</th>
                                <th>Thumbnail</th>
                                <th>Description</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody class="text-justify">
                            @foreach($all_notice_info as $v_notice)
                                <tr>
                                    <td>{{$v_notice->notice_id}}</td>
                                    <td>{{$v_notice->notice_title}}</td>
                                    <td>{{$v_notice->notice_thumbnail}}</td>
                                    <td>{{$v_notice->notice_description}}</td>
                                    <td>
                                        <a href="{{URL::to('/notice_view/'.$v_notice->notice_id)}}"><button class="btn btn-outline-primary">View</button></a> 
                                        <a href="{{URL::to('/notice_edit/'.$v_notice->notice_id)}}"><button class="btn btn-outline-warning">Edit</button></a>
                                        <a href="{{URL::to('/notice_delete/'.$v_notice->notice_id)}}" id="delete"><button class="btn btn-outline-danger">Delete</button></a>
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
                        <p class="display-5">Add Notice</p>
                    </div>
                    <form role="form" class="forms-sample" action="{{url('/save_notice_info')}}" method="POST" enctype="multipart/form-data">
                    {{ csrf_field() }}
                            
                        <div class="row">
                            <div class="col-sm-2"></div>
                            <div class="col-sm-8">

                                <div class="card-body form-group">
                                    <input
                                    name="notice_title"
                                    type="text"
                                    id="form2Example1"
                                    class="form-control"
                                    placeholder="Enter Title"
                                    required="true"
                                    />
                                </div>

                                <div class="card-body form-group">
                                    <input
                                    name="notice_thumbnail"
                                    type="notice_thumbnail"
                                    id="form2Example2"
                                    class="form-control"
                                    placeholder="Enter Text Thumbnail"
                                    required="true"
                                    />
                                </div>

                                <div class="card-body form-group">
                                    <textarea
                                        name="notice_description"
                                        id="form2Example3"
                                        class="form-control"
                                        placeholder="Enter Description"
                                        required="true"
                                        class="form-control" id="exampleFormControlTextarea1" rows="3">
                                    </textarea>
                                </div>

                                <!-- This is IMG portion -->
                                <!-- Enter picture Code here  -->
                            </div>
                            <div class="col-sm-2"></div>
                        </div>
                        <div class="row m-4 form-group">
                            <div class="col-sm-3"></div>
                            <button class="col-sm-6 btn btn_color btn-block">Add</button>
                        </div>
                    </form>
                </div>

                
            </div>
            <div class="col-sm-2"></div>
        </div>
    </div>

</div>
@endsection
