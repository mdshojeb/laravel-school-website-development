@extends('frontend.master')

@section('title','আমাদের স্কুল সম্পর্কে')
    
@section('content')      
    <!--------body section------------->
    <section class="body-section">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-9 wow slideInLeft"><!--------col-1------>
                    <div class="row">
                            <div class="card bg-light">
                                <div class="about-kkbhs">
                                    <h3>{{$about[0]->title}}</h3>
                                    <div class="row">
                                        <div class="col-md-10 offset-md-1">
                                            <div class="about-kkbhs-img">
                                                <img src="{{asset('/storage/images/'.$about[0]->image)}}" class="img-fluid p-3">
                                            </div>
                        
                                            <div class="aobut-text">
                                              <p>{!!$about[0]->description!!}</p>
                                          </div>
                                        </div>
                                    </div>
                            </div>
                        </div>
                    </div>
        </div>
  {{-- sidebar show here --}}
  @section('frontend-sidebar')
      @parent
  @endsection
@endsection