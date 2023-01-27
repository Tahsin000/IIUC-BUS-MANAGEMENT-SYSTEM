<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>IIUCBMS</title>
    <link rel="icon" type="image/x-icon" href="{{asset('icon_1.ico')}}">
    <link rel="stylesheet" href="{{asset('bootstrap_style.css')}}" />
    <link rel="stylesheet" href="{{asset('style.css')}}" />
    <link rel="stylesheet" href="{{asset('main.css')}}" />
    
    <!-- font awesome  -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css"/>
    <!-- Bootstrap Icons v1.3.0 -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
    <!--Html Logos -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <style>
    @import url("https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css");
    .admin_bg{
    background-image: url("{{asset('home_bg.gif')}}");
    height: 100vh;
    background-position: center;
    background-size: cover;
    }
    .card_bg{
    opacity: 0.90;
    }
    
    .ifti_info{
    background-image: url("{{asset('IMG_1.png')}}");
    background-position: center;
    /* background-size: cover; */
    }
    .card_bg{
    opacity: 0.90;
    }
    
    #footer {
    padding: 20px;
    position: fixed;
    left: 0;
    bottom: 0;
    width: 100%;
    background-color: #384997;
    color: white;
    text-align: center;
  }

  #footer a {
    color: white;
  }
  .fa {
  padding: .5rem;
  font-size: 1.2rem;
  width: 3rem;
  text-align: center;
  text-decoration: none;
}
  </style>
</head>
<body>
  <nav class="navbar navbar-expand-md navbar-light bg-light border-dark">
    <div class="container-fluid">
      <a class="navbar-brand" href="{{url('/')}}">
        <img src="{{asset('IMG.png')}}" alt="" width="40" />
      </a>
      <button
        class="navbar-toggler"
        data-toggle="collapse"
        data-target="#navbarMenu"
      >
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarMenu">
        <div class="mx-auto"></div>
        <ul class="navbar-nav">
          <li class="nav-item btn" aria-pressed="true">
            <a href="{{url('/')}}" class="nav-link nav_link text-decoration-none {{('/' == request()->path()) || ('search_schedule_anonymous' == request()->path()) ? 'active': ''}}">Home</a>
          </li>
          <li class="nav-item btn">
            <a href="{{URL::to('/schedule')}}" class="nav-link text-decoration-none {{('schedule' == request()->path())  ? 'active': ''}}">Schedule</a>
          </li>
          <li class="nav-item btn">
            <a href="{{URL::to('/about_me')}}" class="nav-link text-decoration-none {{'about_me' == request()->path() ? 'active': ''}}">About us</a>
          </li>
          <li class="nav-item btn ">
                <a href="{{URL::to('/userLogin')}}" class="nav-link text-decoration-none {{'userLogin' == request()->path() ? 'active': ''}}">
                    <div class="row justify content center">
                      <div class="col-sm-5">
                        Login
                      </div>
                        <div class="col-sm-1">
                          <i class="bi bi-power"></i>
                        </div>
                    </div>    
                </a>
            </li>
        </ul>
      </div>
    </div>
  </nav>
<!-- ______________________________________________________________ -->
    @yield('content')

<!-- ______________________________________________________________ -->
<div id="footer">
  <div style="float: left;">
    <!-- Add links to your social media profiles here -->
    <a href="https://www.facebook.com/iiuc.ac.bd" class="fa fa-facebook"></a>
    <a href="https://www.iiuc.ac.bd/" class="fa fa-dribbble"></a>
  </div>
  <div style="float: right;">
    <!-- Add links to your privacy policy, terms and conditions, contact us, and FAQs pages here -->
    <a href="#">Privacy Policy</a> |
    <a href="#">Terms and Conditions</a> |
    <a href="#">Contact Us</a>
  </div>
</div>


  <script src="../jquery.js" crossorigin="anonymous"></script>
  <script src="../popper.js" crossorigin="anonymous"></script>
  <script src="../bootstrap.js" crossorigin="anonymous"></script>
</body>
</html>

