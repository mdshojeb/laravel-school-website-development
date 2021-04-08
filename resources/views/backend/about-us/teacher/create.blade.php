@extends('backend.admin_master')

@section('page-title',"Teahcer's Information")
@section('content-title',"Teahcer's Information")

@section('content')
    <div class="card">
        <div class="card-body">
          <a href="{{url('/teacher-list')}}" class="btn btn-warning">See All Teacher List</a>
          <hr>
        <form action="{{url('/about-teacher-create')}}"method='post'enctype="multipart/form-data">
            @csrf
                <div class="form-group">
                  <label for="name">Teacher Name <span style="color:red">*</span></label>
                <input type="text" class="form-control" id="name"name='name'value="{{old('name')}}">
                <span style="color: red">
                  @error('name')
                    {{$message}}
                  @enderror
                </span>
                </div>
                <div class="form-group">
                    <label for="designation">Designation <span style="color:red">*</span></label>
                    <input type="text" name="designation" id="designation"class="form-control"value="{{old('designation')}}">
                    <span style="color:red">
                      @error('designation')
                        {{$message}}
                    @enderror
                    </span>
                  </div>
                  <div class="form-group">
                    <label for="designation">Facebook URL</label>
                    <input type="text" name="fb" id="fb"class="form-control"value="{{old('fb')}}">
                  </div>
                  <div class="form-group">
                    <label for="linkedin">LinkedIn URL</label>
                    <input type="text" name="linkedin" id="linkedin"class="form-control"value="{{old('linkedin')}}">
                  </div>
                  <div class="form-group">
                    <label for="twetter">Twetter URL</label>
                    <input type="text" name="twetter" id="twetter"class="form-control"value="{{old('twetter')}}">
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
