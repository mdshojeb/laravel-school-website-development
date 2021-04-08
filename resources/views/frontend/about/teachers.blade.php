@extends('frontend.master')

@section('title','আমাদের শিক্ষকবৃন্দ')
    
@section('content')      
    <!--------body section------------->
    <section class="body-section">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-9 wow slideInLeft"><!--------col-1------>
                    <div class="about-kkbhs">
                        <h3>করিমপুর কে.কে. বয়েজ হাই স্কুল এর শিক্ষকবৃন্দ</h3>
                        <div class="row p-2">
                            @foreach ($teacher as $item)
                            <div class="col-md-4 teacher-card mb-2">
                              <div class="card text-center ">
                                  <div class="teacher-img text-center">
                                      <img src="{{asset('/storage/images/'.$item->image)}}" alt="Card image cap" style="width: 100%; display:inline-block;">
                                  </div>
                                  <div class="card-body">
                                  <h4 class="card-title" style="margin-bottom: 0;font-weight:bold">{{$item->name}}</h4>
                                  <p style="margin-bottom: 0">{{$item->designation}}</p><br>
                                  
                                    <div class="social">
                                      <a href="{{$item->facebook}}"><i class="fab fa-facebook-f"></i></a>
                                      <a href="{{$item->linkedin}}"><i class="fab fa-linkedin-in"></i></a>
                                      <a href="{{$item->twetter}}"><i class="fab fa-twetter"></i></a>   
                                    </div>
                                  </div>
                                </div>
                          </div> 
                            @endforeach                            
                        </div>
      </div>
  </div><!--------col-1 end------>
  {{-- sidebar show here --}}
  @section('frontend-sidebar')
      @parent
  @endsection
@endsection