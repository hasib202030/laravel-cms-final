@extends('admin.layout')

@section('title','Create Post')

@section('content')

<div id="layoutSidenav_content"><div class="container-fluid">
  <h1 class="mt-4">Edit Clients info</h1>
  <div class="row ml-2">
    <div class="card col-sm-8 shadow p-3 mb-5 bg-white rounded">
      <div class="card-body">
      @include('layouts/errors')
      <form action="{{ route('admin.post/update',['id' => $post->id]) }}" method="POST" enctype="multipart/form-data">
        {{ csrf_field() }}

          <div class="form-group">
            <label for="exampleFormControltitle">Name</label>
            <input name="name" type="text" class="form-control" id="exampleFormControltitle" value="{{ $post->name }}">
          </div>

          <div class="form-group">
            <label for="exampleFormControltitle">Email</label>
            <input name="email" type="text" class="form-control" id="exampleFormControltitle" value="{{ $post->email }}">
          </div>
          <div class="form-group">
            <label for="exampleFormControlFile1">Upload Image</label>
            <input name="image" type="file" class="form-control-file" id="exampleFormControlFile1">
          </div>
          <div class="form-group">
            <label for="exampleFormControlSelect1">Select Category</label>
            <select name="category_id" class="form-control" id="exampleFormControlSelect1">
              @foreach($categories as $category)
                <option value="{{ $category->id }}"
                  @if($post->category_id == $category->id)
                    selected
                  @endif
                >{{ $category->name }}</option>
              @endforeach
            </select>
          </div>
          <div class="form-group">
            <label for="exampleFormControltitle">Mobile</label>
            <input name="mobile" type="text" class="form-control" id="exampleFormControltitle" value="{{ $post->mobile }}">
          </div>
          <div class="form-group">
            <label for="exampleFormControltitle">date_of_birth</label>
            <input name="date_of_birth" type="text" class="form-control" id="exampleFormControltitle" value="{{ $post->date_of_birth }}">
          </div>
          <div class="form-group">
            <label for="exampleFormControltitle">Blood_group</label>
            <input name="blood_group" type="text" class="form-control" id="exampleFormControltitle" value="{{ $post->blood_group }}">
          </div>
          <div class="form-group">
            <label for="exampleFormControltitle">Profession</label>
            <input name="profession" type="text" class="form-control" id="exampleFormControltitle" value="{{ $post->profession }}">
          </div>
          <div class="form-group">
            <label for="exampleFormControltitle">Designation</label>
            <input name="designation" type="text" class="form-control" id="exampleFormControltitle" value="{{ $post->designation }}">
          </div>
          <div class="form-group">
            <label for="exampleFormControltitle">permanent_address</label>
            <input name="permanent_address" type="text" class="form-control" id="exampleFormControltitle" value="{{ $post->permanent_address }}">
          </div>
          <div class="form-group">
            <label for="exampleFormControltitle">present_address</label>
            <input name="present_address" type="text" class="form-control" id="exampleFormControltitle" value="{{ $post->present_address }}">
          </div>
          <div class="form-group">
            <label for="exampleFormControltitle">Facebook link</label>
            <input name="fb_link" type="text" class="form-control" id="exampleFormControltitle" value="{{ $post->fb_link }}">
          </div>
          <div class="form-group">
            <label for="exampleFormControltitle">family_govt_job</label>
            <input name="family_govt_job" type="text" class="form-control" id="exampleFormControltitle" value="{{ $post->family_govt_job }}">
          </div>
           <div class="form-group">
            <label for="exampleFormControltitle">Business Family Member</label>
            <input name="b_f_m" type="text" class="form-control" id="exampleFormControltitle" value="{{ $post->b_f_m }}">
          </div>
         

       

          <div class="form-group">
            <label>family member govt</label><br>
            <div class="form-control">
              @foreach($tags as $tag)
              <input type="checkbox" name="tag[]" value="{{ $tag->id }}"

                @foreach($post->tags as $t)
                  @if($tag->id == $t->id)
                    checked
                  @endif
                @endforeach
              />
              <label>{{ $tag->tag }}</label>
              @endforeach
            </div>
          </div>

        

         

          <button value="submit" class="btn btn-success">Update Client info</button>
        </form>
      </div>
    </div>
  </div>
</div>
</main>

@endsection
