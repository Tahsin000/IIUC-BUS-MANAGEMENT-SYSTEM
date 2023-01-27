@extends('layout')
@section('content')



<style>
  @media only screen and (max-width: 600px) {
    .card_1{
      margin: 2rem 0;
    }
}
</style>
    <div class="container">
      <div class="row justify-content-center" style="height:42rem" >
        <div class=" col-sm-8 my-md-auto m-2">
          <div class=" card text-center card_1">
            <div class="card-title p-5">
              <i>
                <img src="{{asset('IMG_2.png')}}" alt="" height="150rem">
              </i>
                    <!-- Form Start -->
              <form role="form" action="{{url('/search_schedule_anonymous')}}" method="get" enctype="multipart/form-data">
                  {{( csrf_field() )}}
  
                <div class="card-body input-group m-2">
                  <div class="input-group-append">
                    <span class="input-group-text">
                      <i class="bi bi-geo-alt-fill"></i>
                    </span>
                  </div>
                  
                  <select class="form-select form-control" required="true" required="true" name="bus_stop">
                      <option value="" disabled selected>Select Destination</option>
                      @foreach($all_stops_info as $v_stops)
                          <option value="{{$v_stops->stop_name}}">{{$v_stops->stop_name}}</option>
                      @endforeach
                  </select>
                </div>
                <div class="row justify-content-center">
                  <div class="card-body col-ms-8">
                    <button class="btn btn_color p-2 mt-2">Search Buses</button>
                  </div>
                </div>
                
              </form> 
  
            </div>
          </div>
        </div>
      </div>
    </div>

@endsection
