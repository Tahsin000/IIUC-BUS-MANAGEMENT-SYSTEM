@extends('user.user_layout')
@section('content')

<div class="row container-fluid">
    <div class="col-md-2"></div>
        <div class="col-md-8 pt-5 pb-5">
        <div class="card">                
            <div class="row">
                <div class="col-md-12 text-center mt-4">
                    <div>
                        <img src="../IMG_2.png" alt="" height="160px" />
                        </div>
                        <h2 >Profile Update</h2></div>
            </div>
            <form role="forms-sample" action="{{URL::to('/user_student_edit', $student_description_profile->student_id )}}" method="POST" enctype="multipart/form-data">
                {{( csrf_field() )}}
            <div class="row">
                <div class="col-md-6">
                    <div class="card-body">
                    <input
                        name="student_name"
                        type="text"
                        id="form2Example1"
                        class="form-control"
                        placeholder="Enter Full  Name"
                        required="true"
                        value="{{$student_description_profile->student_name}}"
                    />
                    </div>
                    <div class="card-body">
                    <input
                        name="student_batch"
                        type="number"
                        id="form2Example1"
                        class="form-control"
                        placeholder="Enter Batch Number"
                        required="true"
                        value="{{$student_description_profile->student_batch}}"
                    />
                    </div>

                    
                    <div class="card-body">
                    <input
                        name="student_phone"
                        type="number"
                        id="form2Example1"
                        class="form-control"
                        placeholder="Enter Phone Number"
                        value="{{$student_description_profile->student_phone}}"
                    />
                    </div>

                <div class="card-body input-group mb-3">
                    <input name="student_password" 
                        required="true" type="password" class="input form-control" id="password" placeholder="Enter New Password" aria-label="password" aria-describedby="basic-addon1" />
                    <div class="input-group-append">
                        <span class="input-group-text" onclick="password_show_hide();">
                        <i class="fas fa-eye" id="show_eye"></i>
                        <i class="fas fa-eye-slash d-none" id="hide_eye"></i>
                        </span>
                    </div>
                </div>

                </div>
                <div class="col-md-6">
                    <div class="card-body">
                    <input
                        name="student_id"
                        type="text"
                        id="form2Example1"
                        class="form-control"
                        placeholder="You can't change your student ID"
                        disabled
                    />
                    </div>
                    <div class="card-body">
                    <input
                        name="student_email"
                        type="email"
                        id="form2Example1"
                        class="form-control"
                        placeholder="Enter Email Address"
                        value="{{$student_description_profile->student_email}}"
                    />
                    </div>
                    <div class="card-body">
                    <!-- <input
                        type="text"
                        id="form2Example1"
                        class="form-control"
                        placeholder="Enter Your Department"
                        required="true"
                    /> -->
                    <select class="form-select form-control" value="{{$student_description_profile->student_department}}" name="student_department">
                        <option {{1 == $student_description_profile->student_department ? 'selected': ''}} value="1">Qur'anic Sciences and Islamic Studies</option>
                        <option {{2 == $student_description_profile->student_department ? 'selected': ''}} value="2">Da'wah and Islamic Studies</option>
                        <option {{3 == $student_description_profile->student_department ? 'selected': ''}} value="3">Science of Hadith and Islamic Studies</option>
                        <option {{4 == $student_description_profile->student_department ? 'selected': ''}} value="4">Computer Science and Engineering</option>
                        <option {{5 == $student_description_profile->student_department ? 'selected': ''}} value="5">Computer and Communication Engineering</option>
                        <option {{6 == $student_description_profile->student_department ? 'selected': ''}} value="6">Electrical and Electronic Engineering</option>
                        <option {{7 == $student_description_profile->student_department ? 'selected': ''}} value="7">Electronic and Telecommunication Engineering</option>
                        <option {{8 == $student_description_profile->student_department ? 'selected': ''}} value="8">Civil Engineering</option>
                        <option {{9 == $student_description_profile->student_department ? 'selected': ''}} value="9">Pharmacy</option>
                        <option {{10 == $student_description_profile->student_department ? 'selected': ''}} value="10">Business Administration</option>
                        <option {{11 == $student_description_profile->student_department ? 'selected': ''}} value="11">Economics & Banking</option>
                        <option {{12 == $student_description_profile->student_department ? 'selected': ''}} value="12">English Language and Literature</option>
                        <option {{13 == $student_description_profile->student_department ? 'selected': ''}} value="13">Department of Law</option>
                        <option {{14 == $student_description_profile->student_department ? 'selected': ''}} value="14">Arabic Language and Literature</option>
                        <option {{15 == $student_description_profile->student_department ? 'selected': ''}} value="15">Library and Information Science</option>
                        <option {{16 == $student_description_profile->student_department ? 'selected': ''}} value="16">Shariah and Islamic Studies</option>
                        <option {{17 == $student_description_profile->student_department ? 'selected': ''}} value="17">Institute of Modern Languages</option>
                        <option {{18 == $student_description_profile->student_department ? 'selected': ''}} value="18">Center for General Education</option>
                        <option {{19 == $student_description_profile->student_department ? 'selected': ''}} value="19">Morality Development Program</option>
                    </select>
                    </div>

                    <div class="card-body input-group mb-3">
                        <input name="student_password_confirm" type="password" value="" class="input form-control" id="password1" required="true" placeholder="Enter Confirm Password" aria-label="password1" aria-describedby="basic-addon1" />
                        <div class="input-group-append">
                            <span class="input-group-text" onclick="password_show_hide1();">
                            <i class="fas fa-eye" id="show_eye1"></i>
                            <i class="fas fa-eye-slash d-none" id="hide_eye1"></i>
                            </span>
                        </div>
                    </div>
                    

                </div>
            </div>
            <p class="alert-danger text-center">
                <?php
                $exception = Session::get('exception');
                if (($exception === "This account already exists in the database") || ($exception === "The password confirmation does not match"))
                {
                    echo $exception;
                    Session::put('exception', null);
                }
                ?>
            </p> 
            <p class="alert-success text-center">
                <?php
                $exception = Session::get('exception');
                if ($exception === "Congratulations, your account has been successfully created")
                {
                    echo $exception;
                    Session::put('exception', null);
                }
                ?>
            </p>  
            <div class="row">
                <div class="col-md-2"></div>
                <div class="col-md-8">
                    <div class="card-body mb-3 mt-3">
                        <button class="btn btn_color btn-block">Update</button>
                    </div>
                </div>
                <div class="col-md-2"></div>
            </div>
            </form>
        </div>

    </div>
</div>
@endsection