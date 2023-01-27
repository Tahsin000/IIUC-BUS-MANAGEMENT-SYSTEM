
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Admin Dashboard</title>
    <link rel="icon" type="image/x-icon" href="{{asset('icon_1.ico')}}">
    <link rel="stylesheet" href="{{asset('lay/style.css')}}" />

    <!-- <link rel="stylesheet" href="../main.css" /> -->
    <link rel="stylesheet" href="{{asset('css/materialdesignicons.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/perfect-scrollbar.min.css')}}">
    <!-- endinject -->
    <!-- plugin css for this page -->
    <link rel="stylesheet" href="{{asset('css/dataTables.bootstrap4.css')}}" />

    <link rel="stylesheet" href="{{asset('lay/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('dataTables.bootstrap4.css')}}">
    <link rel="stylesheet" href="{{asset('lay/jquery-ui.css')}}">
    <link rel="stylesheet" href="{{asset('main.css')}}" />
    <link rel="stylesheet" href="{{asset('materialdesignicons.min.css')}}" />
    <link rel="stylesheet" href="{{asset('perfect-scrollbar.min.css')}}" />

      <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css">
    
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css"/>

    <style>
      @import url("https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css");
     
      .btn_color {
        color: white;
        background-color: #384997;
      }
    </style>
    
    <!-- font awesome  -->

    <!-- <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css"/> -->

  </head>
 
  <body id="body-pd">
    <!-- ______________________________________________________________ -->
      <header class="header" id="header">
          <div class="header_toggle "> <i class='bx bx-menu' id="header-toggle"></i> </div>
      </header>
       
      <div class="l-navbar" id="nav-bar">
          <nav class="nav">
              <div> <a href="{{URL::to('/admin_dashboard')}}" class="nav_logo"><span class="nav_logo-name">
                <img src="../IMG.png" alt="" width="25" /></a>
              <div class="nav_list">
                <a href="{{URL::to('/admin_dashboard')}}" class="nav_link text-decoration-none {{'admin_dashboard' == request()->path() ? 'active': ''}}" >
                  <i class='bi bi-grid-fill' style="font-size:24px;"></i>
                  <span class="nav_name">Dashboard</span>
                </a>

                <a href="{{URL::to('/bus_schedule')}}" class="nav_link text-decoration-none {{'bus_schedule' == request()->path() ? 'active': ''}}">
                  <i class="bi bi-calendar2-plus-fill"  style="font-size:24px;"></i>
                  <span class="nav_name">Schedule</span>
                </a> 

                <a href="{{URL::to('/bus_info')}}" class="nav_link text-decoration-none {{'bus_info' == request()->path() ? 'active': ''}}">
                <i class="bi bi-bus-front-fill"  style="font-size:24px;"></i>
                  <span class="nav_name">Bus info</span>
                </a>

                <a href="{{URL::to('/student_info')}}" class="nav_link text-decoration-none {{'student_info' == request()->path() ? 'active': ''}}">
                  <i class="bi bi-person-plus-fill"  style="font-size:24px;"></i>
                  <span class="nav_name">Student info</span> 
                </a> 

                <a href="{{URL::to('/driver_info')}}" class="nav_link text-decoration-none {{'driver_info' == request()->path() ? 'active': ''}}">
                  <i class="bi bi-send-plus-fill"  style="font-size:24px;"></i>
                  <span class="nav_name">Driver info</span> 
                </a> 

                <a href="{{URL::to('/route_info')}}" class="nav_link text-decoration-none {{'route_info' == request()->path() ? 'active': ''}}">
                  <i class="bi bi-signpost-split-fill" style="font-size:24px;"></i>
                  <span class="nav_name">Route info</span>
                </a>

                <a href="{{URL::to('/notice')}}" class="nav_link text-decoration-none {{'notice' == request()->path() ? 'active': ''}}">
                  
                  <i class="bi bi-card-checklist" style="font-size:24px;"></i>
                  <span class="nav_name">Notices</span>
                </a>

              </div>
            </div> <a href="{{URL::to('/logout')}}" class="nav_link text-decoration-none"> <i class='bx bx-log-out nav_icon'></i> <span class="nav_name">SignOut</span> </a>
          </nav>
      </div>
      <!--Container Main start-->
      
      @yield('content')
     

    <!-- ______________________________________________________________ -->



    
  <script src="{{asset('js/jquery.min.js')}}"></script>
  <script src="{{asset('js/popper.min.js')}}"></script>
  <script src="{{asset('js/bootstrap.min.js')}}"></script>
  <script src="{{asset('js/perfect-scrollbar.jquery.min.js')}}"></script>
  
  <script src="{{asset('js/jquery.dataTables.js')}}"></script>
  <script src="{{asset('js/dataTables.bootstrap4.js')}}"></script>
  
  <script src="{{asset('js/data-table.js')}}"></script>


    <script src="{{asset('lay/jquery.js')}}" crossorigin="anonymous"></script>
    <script src="{{asset('lay/popper.js')}}" crossorigin="anonymous"></script>
    <script src="{{asset('lay/bootstrap.js')}}" crossorigin="anonymous"></script>
    <script src="{{asset('lay/bootstrap.js')}}" crossorigin="anonymous"></script>
    <script src="{{asset('lay/jquery-ui.js')}}" crossorigin="anonymous"></script>
    <script src="{{asset('lay/bootstrap.bundle.min.js')}}" crossorigin="anonymous"></script>
    <script src="{{asset('lay/jquery.min.js')}}" crossorigin="anonymous"></script>
    <script src="{{asset('lay/bootbox.min.js')}}" crossorigin="anonymous"></script>

    <script>
      document.addEventListener("DOMContentLoaded", function(event) {
      const showNavbar = (toggleId, navId, bodyId, headerId) =>{
      const toggle = document.getElementById(toggleId),
      nav = document.getElementById(navId),
      bodypd = document.getElementById(bodyId),
      headerpd = document.getElementById(headerId)
      
      // Validate that all variables exist
      if(toggle && nav && bodypd && headerpd){
          toggle.addEventListener('click', ()=>{
            // show navbar
            nav.classList.toggle('show')
            // change icon
            toggle.classList.toggle('bx-x')
            // add padding to body
            bodypd.classList.toggle('body-pd')
            // add padding to header
            headerpd.classList.toggle('body-pd')
          } )
        }
      }
      
      showNavbar('header-toggle','nav-bar','body-pd','header')
      
      /*===== LINK ACTIVE =====*/
      // const linkColor = document.querySelectorAll('.nav_link')
      
      // function colorLink(){
      //   if(linkColor){
      //     linkColor.forEach(l=> l.classList.remove('active'))
      //     this.classList.add('active')
      //   }
      // }
      // linkColor.forEach(l=> l.addEventListener('click', colorLink))
      
      });
      
    // Get the container element
    </script>
    <script>
      $( function() {
          $( "#timepicker" ).timepicker();
      } );
    </script>

    <script>
      $(document).on("click", "#delete", function(e){
      e.preventDefault();
      var link = $(this).attr("href");
      bootbox.confirm("Are you want to delete!!", function(confirmed){
        if (confirmed){
          window.location.href = link;
        };
      });
    });
    </script>
    
  </body>
  
  
</html>
