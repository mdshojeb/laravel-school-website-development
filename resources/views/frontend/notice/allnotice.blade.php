@extends('frontend.master')

@section('title','সকল নোটিশসমূহ')
    
@section('content')
<!--------body section------------->
<section class="body-section">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-9 wow slideInLeft"><!--------col-1------>
                <div class="about-kkbhs">
                    <h3>সকল নোটিশসমূহ</h3>
                    <div class="card">
                        <div class="card-body bg-light">
                            @foreach ($notices as $item)
                                <ul style="list-style:none">
                                    <li><a href="{{url('/show-notice/'.$item->id)}}">{{$item->title}} ({{$item->date}})</a></li>
                                </ul>
                            @endforeach
                        </div>
                    </div>

        
  </div>
</div><!--------col-1 end------>
{{-- sidebar show here --}}
    @section('frontend-sidebar')
        @parent
    @endsection
@endsection