@extends('layout')
@section('content')


<div class="row mt-3">
    <div class="col-sm-3"></div>
    <div class="col-sm-6 card">
        <div class="card-body">
            <h2 class="card-title">Chatto Metro Ha 122302</h2>
            <div class="row">
                <div class="col-sm-3">
                    <span class="bi bi-clock"></span>
                    <span class="p-1">Departure Time</span>
                </div>
                <div class="col-sm-1">|</div>
                <div class="col-sm-3">
                    <span>08:30 PM</span>
                </div>
                <div class="col-sm-3"></div>
            </div>

            <div class="row mt-2">
                <div class="col-sm-3">
                    <span class="bi bi-geo-alt-fill"></span>
                    <span class="p-1">Route</span>
                </div>
                <div class="col-sm-1">|</div>
                <div class="col-sm-3">
                    <span>Kotwali - IIUC</span>
                </div>
                <div class="col-sm-2"></div>
                <div class="col-sm-3 container mt-4">
                    <div class="row">
                        <h5 class="text-center bg-success text-white p-2 my-auto col-sm-12">Capacity</h5>
                        <h5 class="text-center bg-dark text-white p-2 my-auto col-sm-12">60</h5>
                    </div>
                </div>
            </div>

            <div class="row container mt-3">
                <small>Kotwali - Kadamtali - Dewanhat - Eidgah - Rupsha - Kacha Rasta - Alangker - IIUC</small>
            </div>
        </div>
    </div>
    <div class="col-sm-3"></div>
</div>
<div class="row p-3 mt-5">
    <div class="col-sm-4"></div>
    <div class="col-sm-4 btn btn-block btn_color">Take This Bus</div>
    <div class="col-sm-4"></div>
</div>
<div class="row p-3">
    <div class="col-sm-4"></div>
    <div class="col-sm-4 btn btn-block btn_color">Cancel</div>
    <div class="col-sm-4"></div>
</div>


@endsection
