@extends('backend.admin_master')

@section('page-title',"Upload Suggestion")
@section('content-title',"Upload Suggestion")

@section('content')
    <div class="card">
        <div class="card-body">
          <a href="{{url('/suggestion-list')}}" class="btn btn-warning">Suggestions List</a>
          <hr>
        <form action="{{url('/upload-suggestion')}}"method='post'>
            @csrf
                <div class="form-group">
                  <label for="name">Class Name <span style="color:red">*</span></label>
                <input type="text" class="form-control" id="name"name='name'value="{{old('name')}}">
                <span style="color: red">
                  @error('name')
                    {{$message}}
                  @enderror
                </span>
                </div>
                <div class="form-group">
                  <label for="subject_name">Subject Name <span style="color:red">*</span></label>
                <input type="text" class="form-control" id="subject_name"name='subject_name'value="{{old('subject_name')}}">
                <span style="color: red">
                  @error('subject_name')
                    {{$message}}
                  @enderror
                </span>
                </div>
                  <div class="form-group">
                    <label for="link">Suggestion PDF Link <span style="color:red">*</span></label>
                  <input type="text" name="link" id="link" class="form-control" value="{{old('link')}}">
                    <span style="color: rgb(241, 8, 8)">
                      @error('link')
                        {{$message}}
                      @enderror
                    </span>
                  </div>
                  <div class="form-group">
                    <label for="date">Select Today's Date<span style="color:red">*</span></label>
                    <input type="date" name="date" id="date" class="form-control">
                    <span style="color: rgb(241, 8, 8)">
                      @error('date')
                        {{$message}}
                      @enderror
                    </span>
                  </div>
                  </div>
                <button type="submit" class="btn btn-primary">Save</button>
              </form>
        </div>
    </div>
@endsection
