@extends('frontend.master')

@section('title',$single_post[0]->title)
    
@section('content')
<!--------body section------------->
<section class="body-section">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-9 wow slideInLeft"><!--------col-1------>
            <div class="row">
                <div class="col-md-10 offset-md-1">
                    <div class="about-kkbhs">
                        <div class="card">
                            <div class="card-body">
                                <img src="{{asset('/storage/memory-img/'.$single_post[0]->image)}}" alt="PostImage"class="img-fluid">
                                <h4 class="card-title mt-2">{{$single_post[0]->title}}</h4>
                                <hr>
                                {!!$single_post[0]->description!!}
                            </div>
                        </div>
    
            
      </div>
                </div>
            </div>
</div><!--------col-1 end------>
{{-- sidebar show here --}}
    @section('frontend-sidebar')
        @parent
    @endsection
@endsection