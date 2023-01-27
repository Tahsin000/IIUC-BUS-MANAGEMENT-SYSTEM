<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Admin Login</title>
    <link rel="stylesheet" href="{{asset('bootstrap_style.css')}}" />
    <link rel="stylesheet" href="{{asset('style.css')}}" />
    <link rel="stylesheet" href="{{asset('main.css')}}" />

    <!-- font awesome  -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css"/>

    
    <style>
      .admin_bg{
        background-image: url("{{asset('admin_bg.gif')}}");
        height: 100vh;
        background-position: center;
        background-size: cover;
      }
      .card_bg{
        opacity: 0.90;
      }
    </style>
  </head>

  <body class="admin_bg">
    <!-- ______________________________________________________________ -->

    <div class="row m-5" style="height: 100vh">
        <div class="col-md-3"></div>
            <div class="col-md-6 p-3 my-auto">
            <div class="card card_bg">                
                <div class="row">
                    <div class="col-md-12 text-center mt-5">
                        <div>
                            <a href="{{url('/')}}"><img src="../IMG_2.png" alt="" height="160px" /></a>
                            </div>
                            <h2 >Admin Login</h2></div>
                </div>
                <form role="form" action="{{url('/adminLogin')}}" method="POST">
                  {{( csrf_field() )}}
                <div class="row">
                    <div class="col-md-3"></div>
                    <div class="col-md-6">
                        <div class="card-body">
                            <input
                            name="admin_id"
                            type="text"
                            id="form2Example1"
                            class="form-control"
                            placeholder="Admin ID"
                            required="true"
                            />
                        </div>
                        <div class="card-body input-group mb-3">
                            <input name="admin_password" type="password" value="" class="input form-control" id="password1" placeholder="Admin Password" required="true" aria-label="password1" aria-describedby="basic-addon1" />
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
                      if ($exception)
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
                    <div class="col-md-4"></div>
                    <div class="col-md-4">
                        <div class="card-body mb-3">
                            <button class="btn btn_color btn-block">Log In</button>
                        </div>
                    </div>
                </div>
                </form>
            </div>

        </div>
    </div>

    
    <script src="../jquery.js" crossorigin="anonymous"></script>
    <script src="../popper.js" crossorigin="anonymous"></script>
    <script src="../bootstrap.js" crossorigin="anonymous"></script>

    <!-- password visible eye icon Logic JS -->
    <script>
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
  </body>
</html>
