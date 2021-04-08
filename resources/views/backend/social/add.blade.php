@extends('backend.admin_master')

@section('page-title','Add Social Media ')
@section('content-title','Add Social Media ')

@section('content')
    <div class="card">
        <div class="card-body">
        @if (session('msg'))
            <div class="alert alert-success"role='alert'>{{session('msg')}}</div>
        @endif
        <form action="{{url('/social-update')}}"method='post'>
            @csrf
                <div class="form-group">
                    <label for="facebook">Facebook Page:</label>
                    <input type="text" class="form-control" id="facebook"name='facebook'value="{{$data[0]->facebook}}">
                    <span style="color: red">
                    @error('facebook')
                        {{$message}}
                    @enderror
                    </span>
                </div>
                <div class="form-group">
                    <label for="youtube">Youtube Channel:</label>
                    <input type="text" class="form-control" id="youtube"name='youtube'value="{{$data[0]->youtube}}">
                    <span style="color: red">
                    @error('youtube')
                        {{$message}}
                    @enderror
                    </span>
                </div>
                <div class="form-group">
                    <label for="twetter">Twetter URL:</label>
                    <input type="text" class="form-control" id="twetter"name='twetter'value="{{$data[0]->twetter}}">
                    <span style="color: red">
                    @error('twetter')
                        {{$message}}
                    @enderror
                    </span>
                </div>
               
                <button type="submit" class="btn btn-primary">Submit</button>
              </form>
        </div>
    </div>
@endsection
