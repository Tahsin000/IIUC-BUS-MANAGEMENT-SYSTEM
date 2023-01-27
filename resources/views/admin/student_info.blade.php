@extends('admin.layout')
@php
    function convert_deparment($value){
        $values=[
            1=>'Quranic Sciences and Islamic Studies',
            2=>'Dawah and Islamic Studies',
            3=>'Science of Hadith and Islamic Studies',
            4=>'Computer Science and Engineering',
            5=>'Computer and Communication Engineering',
            6=>'Electrical and Electronic Engineering',
            7=>'Electronic and Telecommunication Engineering',
            8=>'Civil Engineering',
            9=>'Pharmacy',
            10=>'Business Administration',
            11=>'Economics & Banking',
            12=>'English Language and Literature',
            13=>'Department of Law',
            14=>'Arabic Language and Literature',
            15=>'Library and Information Science',
            16=>'Shariah and Islamic Studies',
            17=>'Institute of Modern Languages',
            18=>'Center for General Education',
            19=>'Morality Development Program',
        ];
        return $values[$value];
    }
@endphp
@section('content')


<div class="start_container">
    <div class="row p-3 container-flex">
        <div class="col-sm-4"></div>
        <div class="col-sm-4 display-1 text-center">Student info</div>
        <div class="col-sm-4"></div>
    </div>


    <div class="card">
        <div class="card-body">
            <h2 class="card-title">Data</h2>
            <div class="row">
                <div class="col-12">
                    <table id="order-listing" class="table table-striped" style="width:100%;">
                        <thead>
                            <tr>
                                <th>Student ID</th>
                                <th>Student Name</th>
                                <th>Batch</th>
                                <th>Department</th>
                                <th>Phone Number</th>
                                <th>Email</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody class="text-center">
                        @foreach($all_student_info as $v_student)
                            <tr>
                                <td>{{$v_student->student_id}}</td>
                                <td>{{$v_student->student_name}}</td>
                                <td>{{$v_student->student_batch}}</td>
                                <td>{{convert_deparment($v_student->student_department)}}</td>
                                <td>{{$v_student->student_email}}</td>
                                <td>{{$v_student->student_phone}}</td>
                                <td>
                                    <a href="{{URL::to('/student_view/'.$v_student->student_id)}}"><button class="btn btn-outline-primary">View</button></a> 
                                    <a href="{{URL::to('/student_edit/'.$v_student->student_id)}}"><button class="btn btn-outline-warning">Edit</button></a>
                                    <a href="{{URL::to('/student_delete/'.$v_student->student_id)}}"><button class="btn btn-outline-danger">Delete</button></a>
                                </td>
                            </tr>
                            
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
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
