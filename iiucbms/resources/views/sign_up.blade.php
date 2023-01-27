@extends('layout')
@section('content')


<style>
  .row_1{
    margin: 1rem 0 5rem 0;
    /* height:52rem; */

  }
@media only screen and (max-width: 600px) {
  #footer {
      /* position: static;
  position: relative;
  position: absolute;
  position: fixed;
  position: sticky; */

  /* Global values */
  /* position: inherit; */
  /* position: initial;
  position: revert; */
  /* position: revert-layer; */
  }
    .row_1{
      margin: 1rem 0;
      height:72rem;
    }
  }
}
</style>

<div class="container-fluid ">
  <div class="row row_1 justify-content-center">
              <div class="col-sm-8 my-md-auto" >
              <div class="card p-3">                
                  <div class="row">
                      <div class="col-sm-12 text-center">
                          <div>
                              <img src="../IMG_2.png" alt="" height="160px" />
                              </div>
                              <h2 >
                                Sign UP
                              </h2>
                            </div>
                          </div>
                <form role="form" action="{{url('/saveUser')}}" method="POST" enctype="multipart/form-data">
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
                      />
                      </div>

                      <div class="card-body">
                      <input
                        name="student_id"
                        type="text"
                        id="form2Example1"
                        class="form-control"
                        placeholder="Enter Your Student ID"
                        required="true"
                      />
                      </div>

                      
                      <div class="card-body">
                      <input
                        name="student_phone"
                        type="number"
                        id="form2Example1"
                        class="form-control"
                        placeholder="Enter Phone Number"
                        required="true"
                      />
                      </div>
                      <div class="card-body">
                      <input
                        name="student_email"
                        type="email"
                        id="form2Example1"
                        class="form-control"
                        placeholder="Enter Email Address"
                        required="true"
                      />
                      </div>

                  
                      </div>
                      <div class="col-md-6">
                         <div class="card-body">
                            <input
                              name="student_batch"
                              type="number"
                              id="form2Example1"
                              class="form-control"
                              placeholder="Enter Batch Number"
                              required="true"
                            />
                          </div>
                         
                        <div class="card-body">
                          <select class="form-select form-control" required="true" name="student_department">
                            <option value="" disabled selected>Select Your Department</option>
                            <option value="1">Qur'anic Sciences and Islamic Studies</option>
                            <option value="2">Da'wah and Islamic Studies</option>
                            <option value="3">Science of Hadith and Islamic Studies</option>
                            <option value="4">Computer Science and Engineering</option>
                            <option value="5">Computer and Communication Engineering</option>
                            <option value="6">Electrical and Electronic Engineering</option>
                            <option value="7">Electronic and Telecommunication Engineering</option>
                            <option value="8">Civil Engineering</option>
                            <option value="9">Pharmacy</option>
                            <option value="10">Business Administration</option>
                            <option value="11">Economics & Banking</option>
                            <option value="12">English Language and Literature</option>
                            <option value="13">Department of Law</option>
                            <option value="14">Arabic Language and Literature</option>
                            <option value="15">Library and Information Science</option>
                            <option value="16">Shariah and Islamic Studies</option>
                            <option value="17">Institute of Modern Languages</option>
                            <option value="18">Center for General Education</option>
                            <option value="19">Morality Development Program</option>
                          </select>
                        </div>
  
                          <div class="card-body input-group mb-3">
                            <input name="student_password" type="password" value="" class="input form-control" id="password" placeholder="Enter The Password" required="true" aria-label="password" aria-describedby="basic-addon1" />
                            <div class="input-group-append">
                                <span class="input-group-text" onclick="password_show_hide();">
                                <i class="fas fa-eye" id="show_eye"></i>
                                <i class="fas fa-eye-slash d-none" id="hide_eye"></i>
                                </span>
                            </div>
                          </div>

                          <div class="card-body input-group">
                              <input name="student_password_confirm" type="password" value="" class="input form-control" id="password1" placeholder="Enter Confirm Password" required="true" aria-label="password1" aria-describedby="basic-addon1" />
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
                          <div class="card-body">
                              <button class="btn btn_color btn-block">Sign Up</button>
                          </div>
                      </div>
                      <div class="col-md-2"></div>
                  </div>
                </form>
                  <div class="row">
                      <div class="col-md-2"></div>
                  </div>
                  <p class="text-center">Already have an account?   <a href="{{url('/userLogin')}}">Log in</a></p>
                  
            </div>
  
        </div>
  </div>
</div>

<script>
  function password_show_hide() {
  var x = document.getElementById("password");
  var show_eye = document.getElementById("show_eye");
  var hide_eye = document.getElementById("hide_eye");
  hide_eye.classList.remove("d-none");
  if (x.type === "password") {
          x.type = "text";
          show_eye.style.display = "none";
          hide_eye.style.display = "block";
      } else {
          x.type = "password";
          show_eye.style.display = "block";
          hide_eye.style.display = "none";
      }
  }
  function password_show_hide1() {
  var x = document.getElementById("password1");
  var show_eye = document.getElementById("show_eye1");
  var hide_eye = document.getElementById("hide_eye1");
  hide_eye.classList.remove("d-none");
  if (x.type === "password") {
          x.type = "text";
          show_eye.style.display = "none";
          hide_eye.style.display = "block";
      } else {
          x.type = "password";
          show_eye.style.display = "block";
          hide_eye.style.display = "none";
      }
  }
</script>
@endsection