@extends('admin.layout')
@section('content')
<div class="start_container">

    <div class="container-fluid" >
        <div class="row" style="height:40rem">
        
            <div class="row">
                <p class="display-4 pt-4 text-center">Edit panel</p>
            </div>
            <div class="col-sm-3"></div>
            <div class="col-sm-6 my-auto">
                <div class="card">
                    
                <form class="forms-sample" action="{{URL::to('/notice_schedule_edit', $notice_description_profile->notice_id)}}" method="POST" enctype="multipart/form-data">
                    {{ csrf_field() }}

                    <div class="form-group card-body">
                        <label for="exampleInputEmail1">Title</label>
                        <input type="text" class="form-control p-input" aria-describedby="" placeholder="Enter notice_title" name="notice_title" 
                        value="{{$notice_description_profile->notice_title}}">
                    </div>

                    <div class="form-group card-body">
                        <label for="exampleInputEmail1">Thumbnail</label>
                        <input type="text" class="form-control p-input" aria-describedby="" placeholder="Enter notice_thumbnail" name="notice_thumbnail" 
                        value="{{$notice_description_profile->notice_thumbnail}}">
                    </div>
                    
                    <div class="form-group card-body">
                        <label for="exampleInputEmail1">Description</label>
                        <textarea
                            name="notice_description"
                            id="form2Example3"
                            class="form-control"
                            placeholder="Enter Description"
                            required="true"
                            class="form-control" id="exampleFormControlTextarea1" rows="6">{{$notice_description_profile->notice_description}}
                        </textarea>
                    </div>
                    <div class="col-sm-12 text-center card-body">
                        <button type="submit" class="btn btn_color btn-block">Update</button>
                    </div>
                </form>


                </div>
            </div>
            <div class="col-sm-3"></div>
        </div>
    </div>
</div>

@endsection