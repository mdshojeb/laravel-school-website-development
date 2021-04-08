@extends('backend.admin_master')

@section('page-title',"School Management Panel")
@section('content-title',"School Management Panel")

@section('content')
    <div class="card">
        <div class="card-body">
          <a href="{{url('/comitee-list')}}" class="btn btn-warning">See All Information About Management Panel</a>
          <hr>
        <form action="{{url('/about-comitee-create')}}"method='post'enctype="multipart/form-data">
            @csrf
                <div class="form-group">
                  <label for="name">Name <span style="color:red">*</span></label>
                <input type="text" class="form-control" id="name"name='name'value="{{old('name')}}">
                <span style="color: red">
                  @error('name')
                    {{$message}}
                  @enderror
                </span>
                </div>
                <div class="form-group">
                    <label for="designation">Designation <span style="color:red">*</span></label>
                    <textarea name="designation" id="editor" cols="30" rows="10" class="form-control"></textarea>
                    <span style="color:red">
                      @error('designation')
                        {{$message}}
                    @enderror
                    </span>
                  </div>
                  <div class="form-group">
                    <label for="image">Profile Image <span style="color:red">*</span></label>
                    <input type="file" name="image" id="image" class='form-control'onchange="document.getElementById('previewImage').src = window.URL.createObjectURL(this.files[0])">
                    <span style="color: rgb(241, 8, 8)">
                      @error('image')
                        {{$message}}
                      @enderror
                    </span>
                  </div>
                  <div class="imagePreview">
                    <img id="previewImage" alt="Your image" width="200"/> 
                  </div><br>
                  </div>
                <button type="submit" class="btn btn-primary">Save</button>
              </form>
        </div>
    </div>
@endsection
