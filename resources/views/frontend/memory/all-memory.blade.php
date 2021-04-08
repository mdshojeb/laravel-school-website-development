@extends('frontend.master')

@section('title','আমাদের স্মরণীয় দিনগুলি')
    
@section('content')      
    <!--------body section------------->
    <section class="body-section">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-9 wow slideInLeft"><!--------col-1------>
                    <div class="about-kkbhs">
                        <h3> আমাদের স্মরণীয় দিনগুলি</h3>
                        <div class="row p-2">
                            
                            @foreach ($memorylist as $memory)
                            <div class="readmore-section wow slideInLeft"><!--------readmore section------------>
                               <div class="readmore-section-title">
                               <h3>{{$memory->title}}</h3>
                               </div>
                               <div class="row blog">
                                   <div class="col-md-3">
                                       <div class="readmore-img">
                                       <img class="img-fluid" src="{{asset('/storage/memory-img/'.$memory->image)}}">
                                       </div>
                                   </div>
                                   <div class="col-md-9">
                                       <div class="readmore-title">
                                           @php
                                             $len = strlen($memory->description);
                                             if($len >1000){
                                                 echo substr($memory->description,0,500).'....';
                                             }else{
                                                 echo $memory->description;
                                             }
                                             $url=$memory->slug;
                                           @endphp
                                           <br>
                                            <a href="{{route('singlePost',['id'=>$memory->id,'slug'=>$url])}}">বিস্তারিত পড়ুন</a>
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