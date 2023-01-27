@extends('layout')
@section('content')

<style>
  .title_1{
    font-family: Raleway, Helvetica, sans-serif;
   }
   .container_2{
     height:12rem;
   }
  @media only screen and (max-width: 600px) {
   .title_1{
    font-size: 1rem;
    font-family: "Lucida Console", Courier, monospace;
    text-align: justify;
   }
  .container_1{
    height:115rem;
  }
  .container_2{
    height:12rem;
  }
}
</style>
<!-- ______________________________________________________________ -->

<div class="container-fluid bg-dark container_2">
  
<h1 class=" text-center text-white p-5 title_1">THIS PROJECT IS A COLLABORATION OF International Islamic University Chittagong TEAM <strong><a href="https://github.com/TEAM-OF-HHJN" class="text-warning">HHJN</a></strong></h1>
</div>




<div class="col-sm-12 bg-secondary text-white container_1">
  <div class="row">
    <div class="container display-4 text-center p-5 ">
      Team Members
    </div>
  </div>
    <div class="row p-5">
      <div class="col-sm-4 card-body" >
        <div class="text-center my-auto">
              <div class="card-title "><img src="{{asset('tahsin.png')}}" alt="" height="250rem" class="rounded-circle">
              </div>
              <div class="card-body">
                <h3>Muhammad Tahsin Abrar</h3>
                <h5>Backend Developer</h5>
            </div>
        </div>
      </div>
      
      <div class="col-sm-4 card-body" >
        <div class="text-center my-auto">
              <div class="card-title "><img src="{{asset('ifti.jpg')}}" alt="" height="250rem" class="rounded-circle">
              </div>
              <div class="card-body">
                <h3>Md. Iftikhar Mahmud</h3>
                <h5>Frontend Developer, UI/UX</h5>
            </div>
        </div>
      </div>
      
      <div class="col-sm-4 card-body " >
        <div class="text-center my-auto">
              <div class="card-title "><img src="{{asset('turag.png')}}" alt="" height="250rem" class="rounded-circle">
              </div>
              <div class="card-body">
                <h3>Asadujjaman Turag</h3>
                <h5>Security Testing And Operations</h5>
              </div>
        </div>
      </div>
      


    </div>
</div>


@endsection
