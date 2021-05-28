@extends('admin.layout')

@section('title','Create Post')

@section('content')

<div id="layoutSidenav_content"><div class="container-fluid">
  <h1 class="mt-4">Create Info</h1>
  <div class="row ml-2">
    <div class="card col-sm-8 shadow p-3 mb-5 bg-white rounded">
      <div class="card-body">
      @include('layouts/errors')
      <form action="{{ route('admin.post/store') }}" method="POST" enctype="multipart/form-data">
        {{ csrf_field() }}

          <div class="form-group">
            <label for="exampleFormControltitle"> Name</label>
            <input name="name" type="text" class="form-control" id="exampleFormControltitle" placeholder="Enter name" value="{{ old('name') }}" required>
          </div>
          <div class="form-group">
            <label for="exampleFormControltitle"> Email</label>
            <input name="email" type="text" class="form-control" id="exampleFormControltitle" placeholder="Enter email" value="{{ old('email') }}" required>
          </div>

          <div class="form-group">
            <label for="exampleFormControlFile1">Clients Upload Image</label>
            <input name="image" type="file" class="form-control-file form-control" id="exampleFormControlFile1" style="height:2.8rem;">
          </div>

          <div class="form-group">
            <label for="exampleFormControlSelect1">Select Category</label>
            <select name="category_id" class="form-control" id="exampleFormControlSelect1">
              @foreach($categories as $category)
                <option value="{{ $category->id }}">{{ $category->name }}</option>
              @endforeach
            </select>
          </div>
  
          <div class="form-group">
            <label for="exampleFormControltitle"> Mobile</label>
            <input name="mobile" type="text" class="form-control" id="exampleFormControltitle" placeholder="Enter mobile" value="{{ old('mobile') }}" required>
          </div>

          <div class="form-group">
            <label for="exampleFormControltitle"> date_of_birth</label>
            <input name="date_of_birth" type="date" class="form-control" id="exampleFormControltitle" placeholder="Enter date_of_birth" value="{{ old('date_of_birth') }}" required>
          </div>


         <!--  <div class="form-group">
            <label for="exampleFormControltitle"> Blood_group</label>
            <input name="blood_group" type="text" class="form-control" id="exampleFormControltitle" placeholder="Enter blood_group" value="{{ old('blood_group') }}" required>
          </div> -->

             <div class="form-group">
            <label for="exampleFormControltitle"> Blood_group</label>
            
               <select name="blood_group"  class="form-control form-control-lg" value="{{ old('blood_group') }}" required>
              <option>A+</option>
              <option>A-</option>
              <option>B+</option>
              <option>B-</option>
              <option>O+</option>
              <option>O-</option>
              <option>AB+</option>
              <option>AB-</option>
               </select>
          </div> 

     



          <div class="form-group">
            <label for="exampleFormControltitle"> Profession</label>
            <input name="profession" type="text" class="form-control" id="exampleFormControltitle" placeholder="Enter profession" value="{{ old('profession') }}" required>
          </div>

          <div class="form-group">
            <label for="exampleFormControltitle"> Designation</label>
            <input name="designation" type="text" class="form-control" id="exampleFormControltitle" placeholder="Enter designation" value="{{ old('designation') }}" required>
          </div>


          <div class="form-group">
            <label for="exampleFormControltitle"> Permanent Address</label>
            <input name="permanent_address" type="text" class="form-control" id="exampleFormControltitle" placeholder="Enter permanent_address" value="{{ old('permanent_address') }}" required>
          </div>


          <div class="form-group">
            <label for="exampleFormControltitle"> Present Address</label>
            <input name="present_address" type="text" class="form-control" id="exampleFormControltitle" placeholder="Enter present_address" value="{{ old('present_address') }}" required>
          </div>

          <div class="form-group">
            <label for="exampleFormControltitle"> Facebook Link</label>
            <input name="fb_link" type="text" class="form-control" id="exampleFormControltitle" placeholder="Enter fb_link" value="{{ old('fb_link') }}" required>
          </div>

            <div class="form-group">
              <label>Family Member Govt</label><br>
              <div class="form-control box">
                @foreach($tags as $tag)
                <label>
                  <input type="checkbox" name="tag[]" value="{{ $tag->id }}"/>
                  {{ $tag->tag }}
                </label>
                @endforeach
              </div>
            </div>

        

          <div class="form-group">
            <label for="exampleFormControlTextarea1">Family Govt Job Member</label>
            <textarea name="family_govt_job" class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="family member info. " value="{{ old('family_govt_job') }}"></textarea>
          </div>

     

          <div class="form-group">
            <label for="exampleFormControltitle"> Business Family Member</label>
            
               <select name="b_f_m"  class="form-control form-control-lg" value="{{ old('b_f_m') }}" required>
              <option>Yes</option>
              <option>No</option>
           
               </select>
          </div> 




          <button value="submit" class="btn btn-success">Add Data</button>
        </form>
      </div>
    </div>
  </div>
</div>
</main>

@endsection
