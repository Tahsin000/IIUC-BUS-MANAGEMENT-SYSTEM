@extends('admin.layout')
@section('content')

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
<div class="start_container">

    <div class="container-fluid" >
        <div class="row p-4 my-auto" style="height:45rem">
            <div class="row">
                <p class="display-4 p-3 text-center">Student profile</p>
            </div>
            <div class="col-sm-3"></div>
            <div class="col-sm-6 my-auto">
                <div class="card">
                    <div class="col-sm-12 text-center p-5">
                    <div class="card-body"><h2>{{$student_description_profile->student_name}}</h2></div>
                    </div>
                    <div class="text-right p-3">
                        <div class="row mx-auto">
                            <div class="col-sm-3"></div>
                            <div class="col-sm-6">
                                <p><b>Student id: </b>{{$student_description_profile->student_id}}</p>
                                <p><b>Student Batch: </b>{{$student_description_profile->student_batch}}</p>
                                <p><b>Email: </b>{{$student_description_profile->student_email}}</p>
                                <p><b>Department: </b>{{convert_deparment($student_description_profile->student_department)}}</p>
                                <p><b>Phone: </b>{{$student_description_profile->student_phone}}</p>
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