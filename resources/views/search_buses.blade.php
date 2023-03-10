<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>search buses</title>
    <link rel="stylesheet" href="{{asset('bootstrap_style.css')}}" />
    <link rel="stylesheet" href="{{asset('style.css')}}" />
    <link rel="stylesheet" href="{{asset('main.css')}}" />

    <!-- font awesome  -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css"/>
    
    <style>
      input[type="email"]::placeholder {
        /* Firefox, Chrome, Opera */
        text-align: center;
      }
  </style>
  </head>

  <body>

    
<body class="">
  <nav class="navbar navbar-expand-md navbar-light bg-light border-dark">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">
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
            <a href="#" class="nav-link">Home</a>
          </li>
          <li class="nav-item btn ">
              <a href="#" class="nav-link active">Schedule</a>
          </li>
          <li class="nav-item btn ">
            <a href="{{url('/about_me')}}" class="nav-link">About</a>
          </li>
          <li class="nav-item btn ">
            <a href="{{url('./userLogin')}}" class="nav-link">Login</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>


  <div class="container-fluid">
    <div class="row p-4" >
      <div class="col-sm-2"></div>
      <div class="col-sm-8 card ">
        <table>
          <tr>
            <h2 class="card-title text-center p-4">Chatto Metro Ha 122302</h2>
          </tr>
          <tr>
            <div class="row p-3">
              <span>
                  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-clock" viewBox="0 0 16 16">
                  <path d="M8 3.5a.5.5 0 0 0-1 0V9a.5.5 0 0 0 .252.434l3.5 2a.5.5 0 0 0 .496-.868L8 8.71V3.5z"/>
                  <path d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16zm7-8A7 7 0 1 1 1 8a7 7 0 0 1 14 0z"/>
                </svg>
                <span class="d-inline pl-2">Departure Time</span>
                <span class="d-inline pl-4">|</span>
                <span class="d-inline pl-4">08:30 PM</span>
              </span>
            </div>
          </tr>
          <tr>
            <div class="row p-3">
              <span>
                  <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="currentColor" class="bi bi-geo-alt" viewBox="0 0 16 16">
                  <path d="M12.166 8.94c-.524 1.062-1.234 2.12-1.96 3.07A31.493 31.493 0 0 1 8 14.58a31.481 31.481 0 0 1-2.206-2.57c-.726-.95-1.436-2.008-1.96-3.07C3.304 7.867 3 6.862 3 6a5 5 0 0 1 10 0c0 .862-.305 1.867-.834 2.94zM8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10z"/>
                  <path d="M8 8a2 2 0 1 1 0-4 2 2 0 0 1 0 4zm0 1a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"/>
                  </svg>
                <span class="d-inline pl-2">Route__________</span>
                <span class="d-inline pl-4">|</span>
                <span class="d-inline pl-4">Kotwali - IIUC</span>
              </span>
            </div>
          </tr>
          
          <tr>
            <div class="row p-3">
              <div class="col-sm-5"></div>
              <div class="col-sm-5"></div>
              <div class="col-sm-2 bg-dark border">
                <h6 class="text-center card-body p-1 text-white ">CAPACITY</h6>
                <h6 class="text-center card-body p-1 text-white">60</h6>
              </div>
            </div>
          </tr>
          
          <tr>
            <div class="row p-3">
              <span>
                <small class="d-inline p-2">Kotwali - Kadamtali - Dewanhat - Eidgah - Rupsha - Kacha Rasta - Alangker - IIUC</small>
              </span>
            </div>
          </tr>
        </table>
        
      </div>
      <div class="col-sm-2"></div>
    </div>
  </div>

<!-- <section>
  <div class="container p-3">
    <div class="row">
      <div class="col-sm-1"></div>
      <div class="col-sm-10 card p-3">
        <div class="card-title text-center"><h3>Chatto Metro Ha 122302</h3></div>
        <span>
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-clock" viewBox="0 0 16 16">
            <path d="M8 3.5a.5.5 0 0 0-1 0V9a.5.5 0 0 0 .252.434l3.5 2a.5.5 0 0 0 .496-.868L8 8.71V3.5z"/>
            <path d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16zm7-8A7 7 0 1 1 1 8a7 7 0 0 1 14 0z"/>
          </svg>
          <span class="d-inline pl-2">Departure Time</span>
          <span class="d-inline pl-4">|</span>
          <span class="d-inline pl-4">08:30 PM</span>
        </span>
        <span class="pt-3">
          <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-geo-alt" viewBox="0 0 16 16">
            <path d="M12.166 8.94c-.524 1.062-1.234 2.12-1.96 3.07A31.493 31.493 0 0 1 8 14.58a31.481 31.481 0 0 1-2.206-2.57c-.726-.95-1.436-2.008-1.96-3.07C3.304 7.867 3 6.862 3 6a5 5 0 0 1 10 0c0 .862-.305 1.867-.834 2.94zM8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10z"/>
            <path d="M8 8a2 2 0 1 1 0-4 2 2 0 0 1 0 4zm0 1a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"/>
          </svg>
          <span class="d-inline pl-2">Route__________</span>
          <span class="d-inline pl-4">|</span>
          <span class="d-inline pl-4">Kotwali - IIUC</span>
        </span>
      </div>
      <div class="col-sm-1"></div>
    </div>
  </div>
</section> -->

    
<!-- ______________________________________________________________ -->
<footer class="footer_bg_1 text-white text-center">
  <!-- Grid container -->
  <div class="pt-3 container-fluid">
    <!--Grid row-->
    <div class="row ml-2">
      <!--Grid column-->
      <div class="col-md-3 col-sm-12 pt-5">
        <div class="row">
          <div class="col-md-4 col-sm-4 ">
            <h5 class="text-uppercase">
              <svg
                xmlns="http://www.w3.org/2000/svg"
                width="32"
                height="32"
                fill="currentColor"
                class="bi bi-facebook"
                viewBox="0 0 16 16"
              >
                <path
                  d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951z"
                />
              </svg>
            </h5>
          </div>
          
          <!--Grid column-->
          <div class="col-md-4 col-sm-4 ">
            <h5 class="text-uppercase">
                <svg
              xmlns="http://www.w3.org/2000/svg"
              width="32"
              height="32"
              fill="currentColor"
              class="bi bi-twitter"
              viewBox="0 0 16 16"
            >
              <path
                d="M5.026 15c6.038 0 9.341-5.003 9.341-9.334 0-.14 0-.282-.006-.422A6.685 6.685 0 0 0 16 3.542a6.658 6.658 0 0 1-1.889.518 3.301 3.301 0 0 0 1.447-1.817 6.533 6.533 0 0 1-2.087.793A3.286 3.286 0 0 0 7.875 6.03a9.325 9.325 0 0 1-6.767-3.429 3.289 3.289 0 0 0 1.018 4.382A3.323 3.323 0 0 1 .64 6.575v.045a3.288 3.288 0 0 0 2.632 3.218 3.203 3.203 0 0 1-.865.115 3.23 3.23 0 0 1-.614-.057 3.283 3.283 0 0 0 3.067 2.277A6.588 6.588 0 0 1 .78 13.58a6.32 6.32 0 0 1-.78-.045A9.344 9.344 0 0 0 5.026 15z"
              />
            </svg>
            </h5>
          </div>
          
            <!--Grid column-->
          <div class="col-md-4 col-sm-4 ">
            <h5 class="text-uppercase">
              <svg
              xmlns="http://www.w3.org/2000/svg"
              width="32"
              height="32"
              fill="currentColor"
              class="bi bi-instagram"
              viewBox="0 0 16 16"
            >
              <path
                d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.917 3.917 0 0 0-1.417.923A3.927 3.927 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.916 3.916 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.926 3.926 0 0 0-.923-1.417A3.911 3.911 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0h.003zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599.28.28.453.546.598.92.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.47 2.47 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.478 2.478 0 0 1-.92-.598 2.48 2.48 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233 0-2.136.008-2.388.046-3.231.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92.28-.28.546-.453.92-.598.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045v.002zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92zm-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217zm0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334z"
              />
            </svg>
            </h5>
          </div>

        </div>
      </div>
     
            <!--Grid column-->
      <div class="col-md-6"></div>
      <div class="col-md-3">
        <div class="row">
          <div class="col-md-3 col-sm-4  p-5">
            <small class="text-uppercase">Privacy Policy Terms & Conditions</small>
          </div>
          
          <div class="col-md-3 col-sm-4 p-5">
            <small class="text-uppercase mb-0">Need Help?</small>
            <small class="text-uppercase mb-0">FAQs</small>
          </div>
          
          <div class="col-md-3 col-sm-4 p-5">
            <small class="text-uppercase mb-0">About</small>
            <small class="text-uppercase mb-0">Contact Us</small>
          </div>
        </div>
      </div>
      
      <!--Grid column-->
    </div>
    <!--Grid row-->
  </div>
  <!-- Grid container -->

  <!-- Copyright -->
  <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2)">
    ?? 2022 Copyright:
    <a class="text-white" href="https://github.com/TEAM-OF-HHJN">HHJN</a>
  </div>
  <!-- Copyright -->
</footer>
    <script src="{{asset('jquery.js')}}" crossorigin="anonymous"></script>
    <script src="{{asset('popper.js')}}" crossorigin="anonymous"></script>
    <script src="{{asset('bootstrap.js')}}" crossorigin="anonymous"></script>
  </body>
  
</html>
