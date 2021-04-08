@extends('frontend.master')

@section('title',$message[0]->name)
    
@section('content')
<!--------body section------------->
<section class="body-section">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-9 wow slideInLeft"><!--------col-1------>
                <div class="about-kkbhs">
                <h3>{{$message[0]->name}}</h3>
                 <div class="card">
                    <div class="row">
                        <div class="col-md-3">
                            <div class="about-kkbhs-img">
                                @if ($message[0]->image)
                                 <img src="{{asset('/storage/images/'.$message[0]->image)}}" class="img-fluid p-2">
                                @endif
                            </div>
                        </div>
                        <div class="col-md-9">
                            <div class="aobut-text">
                                {!!$message[0]->message!!}
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