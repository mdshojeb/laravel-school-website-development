@extends('backend.admin_master')

@section('page-title','Add Contact Information ')
@section('content-title','Add Contact Information')

@section('content')
    <div class="card">
        <div class="card-body">
        @if (session('msg'))
            <div class="alert alert-success"role='alert'>{{session('msg')}}</div>
        @endif
        <form action="{{url('/contact-update')}}"method='post'>
            @csrf
                <div class="form-group">
                  <label for="email">Email address:</label>
                <input type="email" class="form-control" id="email"name='email'value="{{$data[0]->email}}">
                <span style="color: red">
                  @error('email')
                    {{$message}}
                  @enderror
                </span>
                </div>
                <div class="row">
                  <div class="col-md-6">
                    <div class="form-group">
                      <label for="phone">Phone 1</label>
                      <input type="number" class="form-control" id="phone"name='phone'value="{{$data[0]->phone}}">
                      @error('phone')
                        {{$message}}
                      @enderror
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                      <label for="phone">Phone 2</label>
                      <input type="number" class="form-control" id="phone"name='phone2'value="{{$data[0]->phone2}}">
                      <span style="color:red">
                        @error('phone2')
                          {{$message}}
                        @enderror
                      </span>
                    </div>
                  </div>
                </div>
                <div class="form-group">
                    <label for="address">Address</label>
                    <textarea class="form-control" name="address" id="address"rows="3">{{$data[0]->address}}</textarea>
                    @error('address')
                        {{$message}}
                    @enderror
                  </div>
                  <div class="form-group">
                    <label for="map">Write Google Map Code Here</label>
                    <textarea class="form-control" name="map" id="map"rows="3">{{$data[0]->map}}</textarea>
                    @error('map')
                        {{$message}}
                    @enderror
                  </div>
                <button type="submit" class="btn btn-primary">Submit</button>
              </form>
        </div>
    </div>
@endsection
