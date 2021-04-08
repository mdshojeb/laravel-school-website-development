@extends('backend.admin_master')

@section('page-title','Add Youtube Class ')
@section('content-title','Add Youtube Class')

@section('content')
    <div class="card">
        <div class="card-body">
        @if (session('msg'))
            <div class="alert alert-success"role='alert'>{{session('msg')}}</div>
        @endif
        <form action="{{url('/new-class-add')}}"method='post'>
            @csrf
                <div class="form-group">
                    <label for="name">Teacher's Name</label>
                    <input type="text" class="form-control" id="name"name='name'">
                    <span style="color: red">
                    @error('name')
                        {{$message}}
                    @enderror
                    </span>
                </div>
                <div class="form-group">
                    <label for="url">Share Class Link:</label>
                    <input type="text" class="form-control" id="url"name='url'">
                    <span style="color: red">
                    @error('url')
                        {{$message}}
                    @enderror
                    </span>
                </div>
                
               
                <button type="submit" class="btn btn-primary">Submit</button>
              </form>
        </div>
    </div>
@endsection
