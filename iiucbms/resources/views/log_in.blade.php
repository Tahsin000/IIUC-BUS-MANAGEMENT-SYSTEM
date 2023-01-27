@extends('layout')
@section('content')    


<div class="container fluid">
    <div class="row mt-2 justify-content-center" style="height:45rem">
      <div class="col-md-6 card text-center my-md-auto">
        <form role="form" action="{{url('/userLogin')}}" method="POST">
          {{ csrf_field() }}
          <div class="card-body">
            <img src="../IMG_2.png" alt="" height="160px"/>
            <h2 >Login</h2>
          </div>
          <div class="card-body">
            <input
              name="student_id"
              type="text"
              class="form-control"
              placeholder="Student ID"
              required
            />
          </div>
          <div class="card-body input-group">
              <input name="student_password" type="password" value="" class="input form-control" id="password" placeholder="Password" required="true" aria-label="password1" aria-describedby="basic-addon1" />
              <div class="input-group-append">
                  <span class="input-group-text" onclick="password_show_hide();">
                  <i class="fas fa-eye" id="show_eye"></i>
                  <i class="fas fa-eye-slash d-none" id="hide_eye"></i>
                  </span>
              </div>
          </div>
          <p class="alert-danger">
            <?php
              $exception = Session::get('exception');
              if ($exception)
              {
                echo $exception;
                Session::put('exception', null);
              }
            ?>
          </p>
          <div class="card-body mb-3">
            <button class="btn btn_color btn-block" >Login</button>
          </div>
          <p>Don’t have an account? <a href="{{url('/sign_up')}}">Sign up</a></p>
        </form>
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
    </script> 
@endsection
