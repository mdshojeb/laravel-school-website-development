@extends('backend.admin_master')

@section('page-title','Edit Memory')
@section('content-title','Edit Memory')

@section('content')
    <div class="card">
        <div class="card-body">
        @if (session('msg'))
            <div class="alert alert-success"role='alert'>{{session('msg')}}</div>
        @endif
        @if (session('err'))
            <div class="alert alert-danger"role='alert'>{{session('errr')}}</div>
        @endif
        <form action="{{url('/update-memory/'.$data[0]->id)}}"method='post' enctype="multipart/form-data">
            @csrf
                <div class="form-group">
                  <label for="title">Heading</label>
                <input type="text" class="form-control" id="title"name='title'placeholder="Write Heading Here"value="{{$data[0]->title}}">
                <span style="color: red">
                  @error('article-title')
                    {{$message}}
                  @enderror
                </span>
                </div>
                <div class="form-group">
                    <label for="description">Description</label>
                    <textarea id="editor" class="form-control" name="description" id="description"rows="10">{{$data[0]->description}}</textarea>
                    <span style="color: red">
                      @error('description')
                        {{$message}}
                      @enderror
                    </span>
                  </div>
                  <div class="form-group">
                    <label for="image">Image</label>
                    <input type="file" name="image" id="image" class="form-control"enctype="multipart/form-data" onchange="document.getElementById('previewImage').src = window.URL.createObjectURL(this.files[0])">
                    <span style="color: red">
                      @error('image')
                        {{$message}}
                      @enderror
                    </span>
                  </div>
                  <div class="imagePreview">
                    <img id="previewImage" alt="your image" width="200"/> 
                  </div><br>
                <input type="submit" value="Update"class="btn btn-success">
              </form>
        </div>
    </div>
@endsection
