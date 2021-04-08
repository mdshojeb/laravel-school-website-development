@extends('backend.admin_master')

@section('page-title','Update Message')
@section('content-title','Upadate Message')

@section('content')
    <div class="card">
        <div class="card-body">
        @if (session('msg'))
            <div class="alert alert-success"role='alert'>{{session('msg')}}</div>
        @endif
        <form action="{{url('/update-message-post/'.$data[0]->id)}}"method='post' enctype="multipart/form-data">
            @csrf
                <div class="form-group">
                  <label for="name">Heading <span style="color:red">*</span></label>
                <input type="text" class="form-control" id="name"name='name'value="{{$data[0]->name}}">
                <span style="color: red">
                  @error('name')
                    {{$message}}
                  @enderror
                </span>
                </div>
                <div class="form-group">
                    <label for="message">Message<span style="color:red">*</span></label>
                    <textarea id="editor"class="form-control" name="message" id="description"rows="10">{{$data[0]->name}}</textarea>
                    <span style="color: red">
                      @error('message')
                        {{$message}}
                      @enderror
                    </span>
                  </div>
                  <div>
                      <label for="">Current Image</label><br>
                  <img src="{{asset('/storage/images/'.$data[0]->image)}}" alt="Current Image">
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
                <button type="submit" class="btn btn-primary">Update Message</button>
              </form>
        </div>
    </div>
@endsection

