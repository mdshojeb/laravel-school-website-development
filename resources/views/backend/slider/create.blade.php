@extends('backend.admin_master')

@section('page-title','Edit Slider')
@section('content-title','Edit Slider')

@section('content')
    <div class="card">
        <div class="card-body">
        @if (session('msg'))
            <div class="alert alert-success"role='alert'>{{session('msg')}}</div>
        @endif
        <form action="{{url('/upload-slider-image-post')}}"method='post' enctype="multipart/form-data">
            @csrf
                  <div class="form-group">
                    <label for="image">Upload Slider Image<span style="color:red">*</span></label>
                    <input type="file" name="image" id="image" class="form-control"onchange="document.getElementById('previewImage').src = window.URL.createObjectURL(this.files[0])">
                    <span style="color: red">
                      @error('image')
                        {{$message}}
                      @enderror
                    </span>
                  </div>
                  <div class="imagePreview">
                    <img id="previewImage" alt="your image" width="200"/> 
                  </div><br>
                  <div class="form-group">
                    <label for="caption">Caption<span style="color:red">*</span></label>
                  <input type="text" class="form-control" id="caption"name='caption'placeholder="Write Caption Here">
                  <span style="color: red">
                    @error('caption')
                      {{$message}}
                    @enderror
                  </span>
                  </div>
                <button type="submit" class="btn btn-dark">Upoload</button>
              </form>
        </div>
    </div>
@endsection
