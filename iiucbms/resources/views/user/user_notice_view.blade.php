@extends('user.user_layout')
@section('content')
<div class="start_container" >
    <div class="container-fluid" >
        <div class="row justify-content-center" style="height:45rem;">
            <ul href="" class="col-sm-5 card card-body  p-3 m-3" style="color: #121212;
            text-decoration: none;">
                <div class="card-body">
                    <h2>
                        {{$notice_description_profile->notice_title}}
                    </h2>
                </div>
                <div class="card-body text-justify">
                    <h5>
                        {{$notice_description_profile->notice_thumbnail}}
                    </h5>
                </div>
                <div class="card-body">
                    <p>
                        {{$notice_description_profile->notice_description}}
                    </p>
                </div>
                <div class="card-body text-right ">
                    <small class="col-sm-12">
                        {{date('h:i A', strtotime($notice_description_profile->updated_at))}}
                    </small>
                    <small class="col-sm-12 d-block">
                        {{date('d/m/Y', strtotime($notice_description_profile->updated_at))}}
                    </small>
                </div>
            </ul>
        </div>
    </div>
</div> 

@endsection