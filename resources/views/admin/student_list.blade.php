@extends('admin.layout')
@section('content')

<div class="start_container">
    <div class="card">
        <div class="card-body">
            <h2 class="card-title">Data</h2>
            <div class="row">
                <div class="col-12">
                    <table id="order-listing" class="table table-striped" style="width:100%;">
                        <thead>
                            <tr>
                                <th>ID #</th>
                                <th>Name</th>
                                <th>Number</th>
                                <th>Email</th>
                                <th>Picture</th>
                            </tr>
                        </thead>
                        <tbody class="text-center">
                            @foreach($all_student_info as $v_student)
                            <tr>
                                <td>{{$v_student->id}}</td>
                                <td>{{$v_student->name}}</td>
                                <td>{{$v_student->phone}}</td>
                                <td>{{$v_student->email}}</td>
                                <td><img src="{{URL::to($v_student->image)}}" height="50" width="50" style="border-radius: 50%;"></td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div> 
</div>
 
@endsection