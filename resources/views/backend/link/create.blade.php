@extends('backend.admin_master')

@section('page-title','Create Importan Link')
@section('content-title','Create Important Link')

@section('content')
    <div class="card">
        <div class="card-body">
        @if (session('msg'))
            <div class="alert alert-success"role='alert'>{{session('msg')}}</div>
        @endif
        <a href="{{url('/link-list')}}" class="btn btn-warning">See All Link</a>
    <hr>
        <form action="{{url('/create-link-post')}}"method='post'>
            @csrf
                <div class="form-group">
                  <label for="title">Link Title</label>
                <input type="text" class="form-control" id="title"name='title'placeholder='Write notice title'" value="{{old('notice-title')}}">
                <span style="color: red">
                  @error('title')
                    {{$message}}
                  @enderror
                </span>
                </div>
                <div class="form-group">
                    <label for="url">Write URL</label>
                    <input type="text" name="url" id="url" class="form-control">
                    <span style="color: red">
                        @error('url')
                          {{$message}}
                        @enderror
                      </span>
                  </div>
                <button type="submit" class="btn btn-primary">Save Link</button>
              </form>
        </div>
    </div>
@endsection
