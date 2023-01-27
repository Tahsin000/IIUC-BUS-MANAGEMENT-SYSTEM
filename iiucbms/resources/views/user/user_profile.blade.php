@extends('user.user_layout')
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
<div class="container-fluid">
    <div class="row p-3">  
        <div class="col-sm-4"></div>
        <div class="col-sm-4 pt-3 display-4 text-center">Profile</div>
        <div class="col-sm-4"></div>
    </div>
</div>

<div class="container-fluid" >
    <div class="row p-4 my-auto" style="height:35rem">
        <div class="col-sm-3"></div>
        <div class="col-sm-6">
            <div class="card text-center p-3">
                <p class="alert-success text-center">
                    <?php
                        $exception = Session::get('exception');
                        if ($exception === "Congratulations, successfully updated")
                        {
                            echo $exception;
                            Session::put('exception', null);
                        }
                    ?>
                </p>
                <p class="alert-danger text-center">
                    <?php
                        $exception = Session::get('exception');
                        if ($exception === "The password confirmation does not match")
                        {
                            echo $exception;
                            Session::put('exception', null);
                        }
                    ?>
                </p>

                <div class="card-title "><img src="{{asset('user.png')}}" alt="" height="120" class="rounded-circle">
                </div>
                
                <div class="card-body"><h2>{{$student_description_profile->student_name}}</h2></div>
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-sm-6 text-left">
                            <p><b>ID: </b>{{$student_description_profile->student_id}}</p>
                            <p><b>Batch: </b>{{$student_description_profile->student_batch}}</p>
                            <p><b>Email: </b>{{$student_description_profile->student_email}}</p>
                        </div>
                        <div class="col-sm-6 text-left">
                            <p><b>Department: </b>{{convert_deparment($student_description_profile->student_department)}}</p>
                            <p><b>Phone: </b>{{$student_description_profile->student_phone}}</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="">
                <a href="{{url('/profile_update')}}" class="btn btn-block btn-warning">
                    <h5>Update Your Profile</h5>
                </a>
            </div>
        </div>
        <div class="col-sm-3"></div>
    </div>
</div>

@endsection
