@extends('backend.admin_master')

@section('page-title','Create Notice')
@section('content-title','Create Notice')

@section('content')
    <div class="card">
        <div class="card-body">
        @if (session('msg'))
            <div class="alert alert-success"role='alert'>{{session('msg')}}</div>
        @endif
        <form action="{{url('/create-notice-post')}}"method='post'>
            @csrf
                <div class="form-group">
                  <label for="title">Notice Title</label>
                <input type="text" class="form-control" id="title"name='title'placeholder='Write notice title'" value="{{old('notice-title')}}">
                <span style="color: red">
                  @error('title')
                    {{$message}}
                  @enderror
                </span>
                </div>
                <div class="form-group">
                    <label for="description">Write Notice Description</label>
                    <textarea  class="form-control" name="description" id="editor"rows="3"></textarea>
                    <span style="color: red">
                      @error('description')
                        {{$message}}
                      @enderror
                    </span>
                  </div>
                  <div class="form-group">
                    <label for="date">Today's Date</label>
                   <input type="date" name="date" id="date">
                   <span style="color: red">
                    @error('date')
                      {{$message}}
                    @enderror
                  </span>
                  </div>
                <button type="submit" class="btn btn-primary">Save Notice</button>
              </form>
        </div>
    </div>
@endsection
