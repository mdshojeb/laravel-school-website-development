@extends('frontend.master')

@section('title','Photo Gallery | KKBHS')
    
@section('content')      
    <!--------body section------------->
    <section class="body-section">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-9 wow slideInLeft"><!--------col-1------>
                    <div class="about-kkbhs">
                        <h3> ফ্রেমে বন্দি কিছু সুন্দর মুহূর্ত</h3>
                        <div class="row gallery">
                            <div class="card-group gallery-img">
                                <div class="col-md-2">
                                    <div class="card">
                                        <a href="{{asset('../img/img1.jpg')}}" data-lightbox="gallery-img" data-title="This is sample caption"><img src="{{asset('../img/img1.jpg')}}" class="card-img-top" alt="img"></a>
                                      </div>
                                </div>
                                <div class="col-md-2">
                                    <div class="card">
                                        <a href="{{asset('../img/img2.jpg')}}" data-lightbox="gallery-img" data-title="This is sample caption"><img src="{{asset('../img/img2.jpg')}}" class="card-img-top" alt="img"></a>
                                      </div>
                                </div>
                                <div class="col-md-2">
                                    <div class="card">
                                        <a href="{{asset('../img/img3.jpg')}}" data-lightbox="gallery-img" data-title="This is sample caption"><img src="{{asset('../img/img3.jpg')}}" class="card-img-top" alt="img"></a>
                                      </div>
                                </div>
                                <div class="col-md-2">
                                    <div class="card">
                                        <a href="{{asset('../img/img4.jpg')}}" data-lightbox="gallery-img" data-title="This is sample caption"><img src="{{asset('../img/img4.jpg')}}" class="card-img-top" alt="img"></a>
                                      </div>
                                </div>
                                <div class="col-md-2">
                                    <div class="card">
                                        <a href="{{asset('../img/img5.jpg')}}" data-lightbox="gallery-img" data-title="This is sample caption"><img src="{{asset('../img/img5.jpg')}}" class="card-img-top" alt="img"></a>
                                      </div>
                                </div>
                                <div class="col-md-2">
                                    <div class="card">
                                        <a href="{{asset('../img/img6.jpg')}}" data-lightbox="gallery-img" data-title="This is sample caption"><img src="{{asset('../img/img6.jpg')}}" class="card-img-top" alt="img"></a>
                                      </div>
                                </div>
                                <div class="col-md-2">
                                    <div class="card">
                                        <a href="{{asset('../img/img7.png')}}" data-lightbox="gallery-img" data-title="This is sample caption"><img src="{{asset('../img/img7.png')}}" class="card-img-top" alt="img"></a>
                                      </div>
                                </div>
                                <div class="col-md-2">
                                    <div class="card">
                                        <a href="{{asset('../img/img8.jpg')}}" data-lightbox="gallery-img" data-title="This is sample caption"><img src="{{asset('../img/img8.jpg')}}" class="card-img-top" alt="img"></a>
                                      </div>
                                </div>
                                <div class="col-md-2">
                                    <div class="card">
                                        <a href="{{asset('../img/img9.jpg')}}" data-lightbox="gallery-img" data-title="This is sample caption"><img src="{{asset('../img/img9.jpg')}}" class="card-img-top" alt="img"></a>
                                      </div>
                                </div>
                                <div class="col-md-2">
                                    <div class="card">
                                        <a href="{{asset('../img/img11.png')}}" data-lightbox="gallery-img" data-title="This is sample caption"><img src="{{asset('../img/img11.png')}}" class="card-img-top" alt="img"></a>
                                      </div>
                                </div>
                                <div class="col-md-2">
                                    <div class="card">
                                        <a href="{{asset('../img/img12.jpg')}}" data-lightbox="gallery-img" data-title="This is sample caption"><img src="{{asset('../img/img12.jpg')}}" class="card-img-top" alt="img"></a>
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