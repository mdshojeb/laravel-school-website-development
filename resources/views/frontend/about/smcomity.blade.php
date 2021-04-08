@extends('frontend.master')

@section('title','আমাদের পরিচালনা পর্ষদ')
    
@section('content')      
    <!--------body section------------->
    <section class="body-section">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-9 wow slideInLeft"><!--------col-1------>
                    <div class="about-kkbhs">
                        <h3>করিমপুর কে.কে. বয়েজ হাই স্কুল এর পরিচালনা পর্ষদ</h3>
                        <div class="row p-2">
                            @foreach ($comity as $item)
                            <div class="col-md-4 teacher-card mb-2">
                              <div class="card text-center ">
                                  <div class="teacher-img text-center">
                                      <img src="{{asset('/storage/images/'.$item->image)}}" alt="Card image cap" style="width: 80%; display:inline-block;">
                                  </div>
                                  <div class="card-body">
                                  <h4 class="card-title" style="margin-bottom: 0">{{$item->name}}</h4>
                                  <div class="text-center comitee">
                                    {!!$item->designation!!}
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