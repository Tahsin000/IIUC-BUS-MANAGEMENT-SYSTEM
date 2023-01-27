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
                    
                <form class="forms-sample" action="{{URL::to('/admin_student_edit', $student_description_profile->student_id )}}" method="POST" enctype="multipart/form-data">
                    {{ csrf_field() }}

                    <div class="form-group card-body">
                        <label for="exampleInputEmail1">Student Name</label>
                        <input type="text" class="form-control p-input" aria-describedby="" placeholder="Enter Student Name" name="student_name" 
                        value="{{$student_description_profile->student_name}}">
                    </div>
                    
                    <div class="form-group card-body">
                        <label for="exampleInputEmail1">Student Batch</label>
                        <input type="text" class="form-control p-input" aria-describedby="" placeholder="Enter Student Batch" name="student_batch" 
                        value="{{$student_description_profile->student_batch}}">
                    </div>
                    
                    <div class="form-group card-body">
                        <label for="exampleInputEmail1">Student Email</label>
                        <input type="text" class="form-control p-input" aria-describedby="" placeholder="Enter Student Batch" name="student_email" 
                        value="{{$student_description_profile->student_email}}">
                    </div>

                    <div class="form-group card-body">
                        <label for="exampleInputEmail1">Student Department</label>
                        
                        <select class="form-select form-control" required="true" name="student_department">
                          <option {{1 == $student_description_profile->student_department ? 'selected': ''}} value="1">Qur'anic Sciences and Islamic Studies</option>
                          <option {{2 == $student_description_profile->student_department ? 'selected': ''}} value="2">Da'wah and Islamic Studies</option>
                          <option {{3 == $student_description_profile->student_department ? 'selected': ''}} value="3">Science of Hadith and Islamic Studies</option>
                          <option {{4 == $student_description_profile->student_department ? 'selected': ''}} value="4">Computer Science and Engineering</option>
                          <option {{5 == $student_description_profile->student_department ? 'selected': ''}} value="5">Computer and Communication Engineering</option>
                          <option {{6 == $student_description_profile->student_department ? 'selected': ''}} value="6">Electrical and Electronic Engineering</option>
                          <option {{7 == $student_description_profile->student_department ? 'selected': ''}} value="7">Electronic and Telecommunication Engineering</option>
                          <option {{8 == $student_description_profile->student_department ? 'selected': ''}} value="8">Civil Engineering</option>
                          <option {{9 == $student_description_profile->student_department ? 'selected': ''}} value="9">Pharmacy</option>
                          <option {{10 == $student_description_profile->student_department ? 'selected': ''}} value="10">Business Administration</option>
                          <option {{11 == $student_description_profile->student_department ? 'selected': ''}} value="11">Economics & Banking</option>
                          <option {{12 == $student_description_profile->student_department ? 'selected': ''}} value="12">English Language and Literature</option>
                          <option {{13 == $student_description_profile->student_department ? 'selected': ''}} value="13">Department of Law</option>
                          <option {{14 == $student_description_profile->student_department ? 'selected': ''}} value="14">Arabic Language and Literature</option>
                          <option {{15 == $student_description_profile->student_department ? 'selected': ''}} value="15">Library and Information Science</option>
                          <option {{16 == $student_description_profile->student_department ? 'selected': ''}} value="16">Shariah and Islamic Studies</option>
                          <option {{17 == $student_description_profile->student_department ? 'selected': ''}} value="17">Institute of Modern Languages</option>
                          <option {{18 == $student_description_profile->student_department ? 'selected': ''}} value="18">Center for General Education</option>
                          <option {{19 == $student_description_profile->student_department ? 'selected': ''}} value="19">Morality Development Program</option>
                        </select>
                    </div>

                    <div class="form-group card-body">
                        <label for="exampleInputEmail1">Student phone</label>
                        <input type="text" class="form-control p-input" aria-describedby="" placeholder="Enter Student Batch" name="student_phone" 
                        value="{{$student_description_profile->student_phone}}">
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