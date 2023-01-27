@extends('user.user_layout')
@section('content')
<style>
    .card{
        border-radius: 4px;
        background: #fff;
        box-shadow: 0 6px 10px rgba(0,0,0,.08), 0 0 6px rgba(0,0,0,.05);
        transition: .3s transform cubic-bezier(.155,1.105,.295,1.12),.3s box-shadow,.3s -webkit-transform cubic-bezier(.155,1.105,.295,1.12);
    padding: 14px 80px 18px 36px;
    cursor: pointer;
    }

    .card:hover{
        transform: scale(1.05);
    box-shadow: 0 10px 20px rgba(0,0,0,.12), 0 4px 8px rgba(0,0,0,.06);
    }

    .card h3{
    font-weight: 600;
    }

    .card img{
    position: absolute;
    top: 20px;
    right: 15px;
    max-height: 120px;
    }

    .card-1{
        background-repeat: no-repeat;
        background-position: right;
        background-size: 80px;
    }

    .card-2{
        background-repeat: no-repeat;
        background-position: right;
        background-size: 80px;
    }

    .card-3{
        background-repeat: no-repeat;
        background-position: right;
        background-size: 80px;
    }

    @media(max-width: 990px){
            .card{
            margin: 20px;
        }
    } 
</style>


<div class="container-fluid pt-5">
    <div class="container">
        <div class="row justify-content-center">
            @foreach($all_notice_info as $v_notice)
                <a href="{{URL::to('/user_notice_view/'.$v_notice->notice_id)}}" class="col-sm-5 card p-3 m-3" style="color: #121212;
                text-decoration: none;">
                    <div class="card-body">
                        <h2>
                            {{$v_notice->notice_title}}
                        </h2>
                    </div>
                    <div class="card-body">
                        <p>
                            {{$v_notice->notice_thumbnail}}
                        </p>
                    </div>
                    <div class="text-right card-body">
                        <small class="col-sm-6">
                            {{date('h:i A || d/m/Y', strtotime($v_notice->updated_at))}}
                        </small>
                    </div>
                </a>
            @endforeach
        </div>
    </div>
</div>

@endsection