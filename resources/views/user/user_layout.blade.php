<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Dashboard</title>
    <link rel="icon" type="image/x-icon" href="{{asset('icon_1.ico')}}">
    
    <link rel="stylesheet" href="{{asset('bootstrap_style.css')}}" />
    <link rel="stylesheet" href="{{asset('style.css')}}" />
    <link rel="stylesheet" href="{{asset('main.css')}}" />

    <!-- font awesome  -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css"/>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css"/>
    <!-- Bootstrap Icons v1.3.0 -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
  
    
    <style>
        @import url("https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css");
      .bg-colour{
        color: white;
        background-color: #384997;
      }
      .footer_bg_1{
        position: flex;
        bottom: 0;
        left: 0;
        right: 0;
      }
    </style>

</head>
<body>
    <nav class="navbar navbar-expand-md navbar-dark bg-colour border-dark">
        <div class="container-fluid">
        <a class="navbar-brand" href="{{url('/user_schedule')}}">
            <img src="../IMG.png" alt="" width="40" />
        </a>
        <button
            class="navbar-toggler" data-toggle="collapse" data-target="#navbarMenu">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarMenu">
            <div class="mx-auto"></div>
            <ul class="navbar-nav">
            <li class="nav-item btn " aria-pressed="true">
                <a href="{{url('/user_dashboard')}}" class="nav-link
                {{('user_dashboard' == request()->path()) || ('profile_update' == request()->path()) ? 'active': ''}}
                ">Profile</a>
            </li>
            <li class="nav-item btn">
                <a href="{{url('/user_schedule')}}" class="nav-link {{('user_schedule') == request()->path() ? 'active': ''}}">Schedule</a>
            </li>

            <li class="nav-item btn">
                <a href="{{url('/user_notice')}}" class="nav-link {{('user_notice') == request()->path() ? 'active': ''}}">Notice</a>
            </li>

            <li class="nav-item btn ">
                <a href="{{url('/user_logout')}}" class="nav-link">
                    <div class="row justify content center">
                        <div class="col-sm-2">
                            <i class="bi bi-box-arrow-right"></i>
                        </div>
                        <div class="col-sm-4">
                            logout
                        </div>
                    </div>    
                </a>
            </li>
            </ul>
        </div>
        </div>
    </nav>
<!-- ______________________________________________________ -->

    @yield('content')
<!-- ______________________________________________________ -->
    

    <script src="{{asset('jquery.js')}}" crossorigin="anonymous"></script>
    <script src="{{asset('popper.js')}}" crossorigin="anonymous"></script>
    <script src="{{asset('bootstrap.js')}}" crossorigin="anonymous"></script>
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
</body>
</html>