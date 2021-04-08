@extends('frontend.master')

@section('title',$show_notice[0]->title)
    
@section('content')
<!--------body section------------->
<section class="body-section">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-9 wow slideInLeft"><!--------col-1------>
                <div class="about-kkbhs">
                    <h3>{{$show_notice[0]->title}}</h3>
                    <div class="card">
                            <div class="card">
                                <div class="card-body"style="background-color:#fff">
                                    <p class="card-text" style="font-size:18px">{!!$show_notice[0]->description!!}</p>
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