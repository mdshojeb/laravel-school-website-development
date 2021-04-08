@extends('backend.admin_master')

@section('page-title','Create Message')
@section('content-title','Create Message')

@section('content')
    <div class="card">
        <div class="card-body">
        @if (session('msg'))
            <div class="alert alert-success"role='alert'>{{session('msg')}}</div>
        @endif
        @if (session('err'))
            <div class="alert alert-danger"role='alert'>{{session('errr')}}</div>
        @endif
        <form action="{{url('/create-message-post')}}"method='post' enctype="multipart/form-data">
            @csrf
                <div class="form-group">
                  <label for="name">Heading <span style="color:red">*</span></label>
                <input type="text" class="form-control" id="name"name='name'placeholder="Write Heading Here">
                <span style="color: red">
                  @error('name')
                    {{$message}}
                  @enderror
                </span>
                </div>
                <div class="form-group">
                    <label for="message">Message<span style="color:red">*</span></label>
                    <textarea id="editor"class="form-control" name="message" id="description"rows="10">{{old('message')}}</textarea>
                    <span style="color: red">
                      @error('message')
                        {{$message}}
                      @enderror
                    </span>
                  </div>
                  <div class="form-group">
                    <label for="image">Image</label>
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
                <button type="submit" class="btn btn-primary">Submit</button>
              </form>
        </div>
    </div>
@endsection

