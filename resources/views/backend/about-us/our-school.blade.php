@extends('backend.admin_master')

@section('page-title','About Our School Information')
@section('content-title','About Our School Information')

@section('content')
    <div class="card">
        <div class="card-body">
        @if (session('msg'))
            <div class="alert alert-success"role='alert'>{{session('msg')}}</div>
        @endif
        <form action="{{url('/about-school-insert/'.$data[0]->id)}}"method='post'enctype="multipart/form-data">
            @csrf
                <div class="form-group">
                  <label for="title">Heading</label>
                <input type="text" class="form-control" id="title"name='title'value="{{$data[0]->title}}">
                <span style="color: red">
                  @error('title')
                    {{$message}}
                  @enderror
                </span>
                </div>
                <div class="form-group">
                    <label for="description">Description</label>
                    <textarea id="editor" class="form-control" name="description" id="description"rows="10">{{$data[0]->description}}</textarea>
                    <span style="color:red">
                      @error('description')
                        {{$message}}
                    @enderror
                    </span>
                  </div>
                  <div class="imagePreview">
                    <label >Current Image</label><br>
                  <img src="{{asset('/storage/images/'.$data[0]->image)}}" alt="Your Current Image" width="200"/> 
                  </div><br>
                  <div class="form-group">
                    <label for="image">Change Image</label>
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
                <button type="submit" class="btn btn-primary">Update</button>
              </form>
        </div>
    </div>
@endsection
