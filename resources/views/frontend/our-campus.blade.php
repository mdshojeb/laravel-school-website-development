@extends('frontend.master')

@section('title','আমাদের ক্যাম্পাস')
    
@section('content')
<!--------body section------------->
<section class="body-section">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-9 wow slideInLeft"><!--------col-1------>
                <div class="about-kkbhs">
                    <h3>আমাদের স্কুলের ক্যাম্পাস</h3>
                    <div class="about-kkbhs-img">
                        <img src="img/school-photo.jpg" class="img-fluid">
                    </div>

              <div class="aobut-text">
                  <h4>Lorem ipsum dolor sit amet :</h4>
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                  tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                  quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                  consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                  cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                  proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p><p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                  tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                  quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                  consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                  cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                  proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
              </div>
  </div>
</div><!--------col-1 end------>
{{-- sidebar show here --}}
    @section('frontend-sidebar')
        @parent
    @endsection
@endsection