<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<!-- Bootstrap CSS -->
	<link rel="shortcut icon" href="{{asset('img/s-logo.png')}}" type="image/x-icon">
    <!-------------fontawesome link----------------->
     <link rel="stylesheet" type="text/css" href="file:///H:/bootstrap/icon/fontawesome-free-5.13.0-web/fontawesome-free-5.13.0-web/css/all.css">
	 <!-------------end fontawesome link----------------->
	 {{-- lightbox --}}
	<!----------googlefont----------->
     <link rel="preconnect" href="https://fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css2?family=Baloo+Da+2&display=swap" rel="stylesheet">
     <!----------googlefont end----------->
     <!----------bootstrap min css----------->
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}" >
    <!----------------animate.css------------------>
    <link rel="stylesheet" type="text/css" href="{{asset('css/animate.min.css')}}">

    <!-----------My css-------------->
    <link rel="stylesheet" type="text/css" href="{{asset('css/style.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('css/responsive.css')}}">
	<link rel="stylesheet" href="{{asset('css/lightbox.css')}}">
	<script src="{{asset('/editor/ckeditor.js')}}"></script>
	 <title>@yield('title')</title>
	 <style>
		 .comitee p{
			 margin:0;
			 padding:0
		 }
	 </style>
  </head>

  <body>
   <div id="full-website-content">  
		<div class="header-top-section">
			<div class="container-fluid">
				<div class="row">
					<div class="col-md-10">
						<div class="contact-section">
							<ul>
								<li><a href="mailto:karimpurkkbhs.channel@gmail.com"><i class="fas fa-envelope"></i> ইমেইল করুনঃ <span style="font-family:Arial, Helvetica, sans-serif;">{{$contact_data[0]->email}}</span></a></li>
								<li><a href="#"><i class="fas fa-phone-alt"></i> ফোন করুনঃ {{$contact_data[0]->phone}},{{$contact_data[0]->phone2}}</a></li>
							</ul>
						</div>
					</div>
					<div class="col-md-2">
						<div class="contact-logo">
							<ul>
								<li><a href="{{$social[0]->facebook}}"><i class="fab fa-facebook-f"></i></a></li>
								<li><a href="{{$social[0]->youtube}}"><i class="fab fa-youtube"></i></a></li>
								<li><a href="{{$social[0]->twetter}}"><i class="fab fa-twitter"></i></a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
  
		<!--------header-top section end------------->
		<!--------main-header-section------------->
  
		<section class="main-header-section">
			<div class="container">
					<div class="header-logo">
					<img src="{{asset('img/s-logo.png')}}">
						<div class="header-logo-text">
							<h2>করিমপুর কে. কে. বয়েজ হাই স্কুল </h2>	
							<h3>করিমপুর, নরসিংদী ।</h3>
						</div>				
					</div>
			</div>
		</section>
  
		<!--------main-header-section end------------->
		<!--------breaking news section------------->
  
		<div class="breaking-news-section">
				<div class="breaking-news">
					<div class="news-text">
						<p>সাম্প্রতিক আপডেট</p>
					</div>
					<marquee style="color:white;" class="mar-news" direction="left" scrollamount="10" onmouseover="this.stop()" onmouseout="this.start()">
						@foreach ($br_news as $item)
							<a href="{{url('/show-notice/'.$item->id)}}">{{$item->title}} |</a> 
						@endforeach
					</marquee>
				</div>
		</div>
			  <!--------breaking news section end------------->
		<!--------header menu section------------->
  
		<section class="header-menu-section">
			<div class="container-fluid">
				<div class="row">
					<div class="col-xl-9 col-lg-8 col-md-2 col-2">
						<div class="header-menu">
							<nav class="navbar navbar-expand-lg navbar-light">
							<div class="container-fluid">
							  <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
								<i class="fas fa-bars"></i>
							  </button>
							  <div class="collapse navbar-collapse" id="navbarNavDropdown">
								<ul class="navbar-nav">
								  <li class="nav-item">
									<a class="nav-link" aria-current="page" href="{{url('/')}}"><i class="fas fa-home"></i> হোম</a>
								  </li>
								  <li class="nav-item dropdown">
									<a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
									 আমাদের সম্পর্কে
									</a>
									<ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
									  <li><a class="dropdown-item" href="{{route('about')}}">আমাদের স্কুল সম্পর্কে</a></li>
									  <li><a class="dropdown-item" href="{{route('campus')}}">আমাদের ক্যাম্পাস</a></li>
									  <li><a class="dropdown-item" href="{{route('teachers')}}">শিক্ষক বৃন্দ</a></li>
									  <li><a class="dropdown-item" href="{{route('mcomity')}}">স্কুল পরিচালন কমিটি</a></li>
									</ul>
								  </li>
								  <li class="nav-item dropdown">
									  <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
									   প্রাতিষ্ঠানিক
									  </a>
									  <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
										<li><a class="dropdown-item" href="{{route('class-routin')}}">ক্লাস রুটিন</a></li>
										<li><a class="dropdown-item" href="{{route('suggestion')}}">সাজেশনস</a></li>
									  <li><a class="dropdown-item" href="{{url('/academic-rules')}}">প্রাতিষ্ঠানিক নিয়ম-কানুন</a></li>
									  </ul>
									</li>
									<li class="nav-item dropdown">
									  <a class="nav-link dropdown-toggle"  id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
									   পাঠ্যপুস্তক 
									  </a>
									  <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
										<li><a class="dropdown-item" href="https://nctb.gov.bd/site/page/393b5a63-a880-4481-884e-2c83f605e80d">৬ষ্ঠ শ্রেণির বই</a></li>
										<li><a class="dropdown-item" href="https://nctb.gov.bd/site/page/f6f263b8-7533-460c-a8aa-9f2c3d203705">৭ম শ্রেণির বই</a></li>
										<li><a class="dropdown-item" href="https://nctb.gov.bd/site/page/7dd09e7b-bc4c-4bfd-8e84-6de2077038e9">৮ম শ্রেণির বই</a></li>
										<li><a class="dropdown-item" href="https://nctb.gov.bd/site/page/ab6d31b3-7e74-4faf-b086-1cc8ccd09710">৯ম-১০ম শ্রেণির বই</a></li>
									  </ul>
									</li>
									{{-- <li class="nav-item dropdown">
										<a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
										 রেজাল্ট
										</a>
										<ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
										  <li><a class="dropdown-item" href="about.html">৬ষ্ঠ শ্রেণি বার্ষিক</a></li>
										  <li><a class="dropdown-item" href="#">৭ম শ্রেণি বার্ষিক</a></li>
										  <li><a class="dropdown-item" href="teacher-page.html">৯ম শ্রেণি বার্ষিক</a></li>
										  <li><a class="dropdown-item" href="http://www.educationboardresults.gov.bd/" target="__blank"> জেএসসি ও এসএসসি পরীক্ষার রেজাল্ট</a></li>
										</ul>
									  </li> --}}
								  <li class="nav-item">
									<a class="nav-link" href="{{url('/all-notices')}}">নোটিশ</a>
								  </li>
								  <li class="nav-item">
									<a class="nav-link" href="{{route('mday')}}">স্মরণীয় দিনগুলো</a>
								  </li>
								  <li class="nav-item">
									<a class="nav-link" href="https://www.youtube.com/c/KarimpurKKBHSOnlineClass"target="__blank"><i class="fa fa-youtube-play" aria-hidden="true"></i> ভিডিও ক্লাস</a>
								  </li>
								</ul>
							  </div>
							</div>
						  </nav>
						</div>
					</div>
					<div class="col-xl-3 col-lg-4 col-md-10 col-10">
						<div class="regiter-section">
							<ul>
							<li><a href="{{route('login')}}"><i class="fas fa-sign-in-alt"></i> লগিন</a></li>
							<li><a href="{{url('/register')}}"><i class="fas fa-user"></i> রেজিষ্ট্রেশন</a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</section>
<!--------header menu section end------------->
		{{-- main content section --}}
		@yield('content')

		{{-- sidebar for child page --}}
		@section('frontend-sidebar')
		<div class="col-md-3"><!--------col-2------>

            <div class="sidebar-section">
              <div class="row">

                <div class="col-md-12 col-sm-6 wow slideInRight">
                  <div class="r-notice-section">
                    <div class="r-notice-title">
                      <h4>সাম্প্রতিক নোটিশ</h4>
                    </div>
                    <div class="r-notice-message">
                      <ul>
                        <marquee direction="up" scrollamount="3" onmouseover="this.stop()" onmouseout="this.start()">
							@foreach ($notices as $item)
								<a class="r-news" href="{{url('/show-notice/'.$item->id)}}">{{$item->title}}</a><br>
							@endforeach
                        </marquee>
                      </ul>
                    </div>
                  </div>
                </div>
			  </div>
		      </div>
          </div>
		@show
		<!--------online-class-section end------------->
		<div class="f-contact-section"><!--------footer-contact-section------------->
			<div class="container">
				<div class="row">
					<div class="col-md-3 col-sm-6 col-12 wow slideInLeft">
						<div class="f-quick-link">
							<div class="f-quick-link-title">
								<h4>ওয়েব পেজের লিঙ্ক</h4>
							</div>
							<div class="f-quick-links">
								<ul>
								<li><a href="{{url('/')}}">হোম</a></li>
									<li><a href="{{url('/all-notices')}}">নোটিশ ও অফিসের নির্দেশ</a></li>
									<li><a href="#">রেজাল্ট</a></li>
								<li><a href="{{'https://youtube.com/KarimpurKKBHSOnlineClass'}}">আমাদের ইউটিউব চ্যানেল</a></li>
								</ul>
							</div>
						</div>
					</div>
  
					<div class="col-md-3 col-sm-6 col-12 wow slideInLeft">
						<div id="fb-root"></div>
	  					
						<div class="facebook-pages">
							<h4>ফেসবুক পেজ</h4>
							<div class="fb-page" data-href="https://www.facebook.com/schoolyacademy" data-tabs="timeline" data-width="" data-height="100" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true"><blockquote cite="https://www.facebook.com/schoolyacademy" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/schoolyacademy">Schooly Academy</a></blockquote></div>
						   
						</div>
					</div>
  
					<div class="col-md-3 col-sm-6 col-12 wow slideInRight">
						<div class="f-contact-title">
							<h4>যোগাযোগ করুন</h4>
						</div>
						<div class="footer-contacts">
							<ul>
								<li><a href="#"><i class="fas fa-map-marker-alt"></i> {{$contact_data[0]->address}}</a></li>
								<li><a href="#"><i class="fas fa-envelope"></i> ইমেইলঃ {{$contact_data[0]->email}}</a></li>
								<li><a href="#"><i class="fas fa-phone-alt"></i> ফোন করুনঃ  {{$contact_data[0]->phone}}, {{$contact_data[0]->phone2}}</a></li>
							</ul>
						</div>
					</div>
					{{-- google map include --}}
					<div class="col-md-3 col-sm-6 col-12 wow slideInRight">
						<div class="our-youtube-channel">
							<iframe src="{{$contact_data[0]->map}}" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
						</div>
					</div>
				</div>
			</div>
		</div><!--------footer-contact-section end------------->
  
		<div class="footer-section"><!----------footer-section-------------->
			<div class="container-fluid">
				<div class="row">
					<div class="col-md-4">
						<div class="footer-copyright">
							<a href="#">কপিরাইট &copy; করিমপুর কে.কে. বয়েজ হাই স্কুল - সর্বসত্ত্ব সংরক্ষিত</a>
						</div>
					</div>
  
					<div class="col-md-4">
						<div class="footer-icons">
							<ul>
								<li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
								<li><a href="#"><i class="fab fa-youtube"></i></a></li>
								<li><a href="#"><i class="fab fa-twitter"></i></a></li>
							</ul>
						</div>
					</div>
  
					<div class="col-md-4">
						<div class="designer-developer">
							<p>ওয়েবসাইটটি ডিজাইন ও ডেভেলপ করেছেন -  <a href="https://aboutmdshojeb.blogspot.com" target="__blank">সজিব মাহমুদ</a> </p>
						</div>
					</div>
  
				</div>
			</div>
		</div><!----------footer-section end-------------->
   </div>

        

     <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="{{asset('js/bootstrap.bundle.min.js')}}"></script>
	<script src="{{asset('js/popper.min.js')}}"></script>
	<script src="{{asset('js/lightbox-plus-jquery.min.js')}}"></script>
    <!----------font awesome---------->
    <script src="https://kit.fontawesome.com/1dc1253674.js" crossorigin="anonymous"></script>
	<script type="text/javascript" src="{{asset('js/custom.js')}}"></script>
	<script src="lib/jquery-2.0.3.js"></script>
	<script src="src/js/jquery.swipebox.js"></script>
	

	<!------wow js---------->

    <script type="text/javascript" src="{{asset('js/wow.min.js')}}"></script>
	    <script type="text/javascript">
	    	new WOW().init();
		</script>
			
	<script type="text/javascript">
		;( function( $ ) {
		
			$( '.swipebox' ).swipebox();
		
		} )( jQuery );
		</script>
		<script>
			ClassicEditor
				.create( document.querySelector( '#editor' ), {
					// toolbar: [ 'heading', '|', 'bold', 'italic', 'link' ]
				} )
				.then( editor => {
					window.editor = editor;
				} )
				.catch( err => {
					console.error( err.stack );
				} );
		</script>
				{{-- slider script --}}
  </body>
</html>