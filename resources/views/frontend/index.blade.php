@extends('frontend.master')

@section('title','করিমপুর কে কে বয়েজ হাই স্কুল')
@section('content')

	{{-- breadcrumb section for child page --}}
	@section('childpage-title')
		
	@endsection
<!--------body section------------->
		<section class="body-section">
			<div class="container-fluid">
				<div class="row">
					<!--------article show here------>
					<div class="col-md-9 wow slideInLeft">
						<div class="silder-section"><!--------slider------------>
							<div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
							<ol class="carousel-indicators">
							  <li data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active"></li>
							  <li data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"></li>
							  <li data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"></li>
							</ol>
							<div class="carousel-inner">
							  @foreach ($slider as $item)
							  	@if ($loop->first)
								  <div class="carousel-item active">
							  	@else
								  <div class="carousel-item">
								@endif
							  <img src="{{asset('storage/Slider/'.$item->image)}}" class="d-block w-100" alt="...">
								<div class="carousel-caption caption-style">
								<a href="#" style="color:aliceblue;text-decoration:none;font-size:20px">{{$item->caption}}</a>
								</div>
							  </div>
							  @endforeach
							</div>
							<a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-bs-slide="prev">
							  <span class="fas fa-arrow-left left-arrow" aria-hidden="true"></span>
							</a>
							<a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-bs-slide="next">
							  <span class="fas fa-arrow-right right-arrow" aria-hidden="true"></span>
							</a>
						  </div>
						</div><!--------slider end------------>
  
						<div class="notice-section wow slideInLeft"><!--------notice-section------------>
							<div class="notice-title">
								<h2>নোটিশ বোর্ড</h2>
							</div>
							<div class="notice">
								<ul>
									<marquee direction="up" scrollamount="2" onmouseover="this.stop()" onmouseout="this.start()">
										@foreach ($notices as $item)
										  <li><a href="{{url('/show-notice/'.$item->id)}}"><i class="fas fa-hand-point-right"></i> {{$item->title}}</a></li>
										@endforeach
									</marquee>
								</ul>
  
								<div class="notice-btn">
									<a href="{{url('/all-notices')}}">View All</a>
								</div>
							</div>
						</div><!--------notice-section end------------>
  
						<div class="readmore-section wow slideInLeft"><!--------readmore section------------>
							<div class="readmore-section-title">
							<h3>{{$about[0]->title}}</h3>
							</div>
							<div class="row">
								<div class="col-md-4">
									<div class="readmore-img">
									<img src="{{'/storage/images/'.$about[0]->image}}"class="img-fluid">
									</div>
								</div>
								<div class="col-md-8">
									<div class="readmore-title">
										{!! substr($about[0]->description,0,900).'....'!!} <br>
									<a href="{{route('about')}}">বিস্তারিত পড়ুন</a>
									</div>
								</div>
							</div>
						</div><!--------readmore section end------------>
					</div><!--------article end here------>
  
					{{-- sidebar started here --}}	
					<div class="col-md-3">
  
						<div class="sidebar-section">
							<div class="row">
								<div class="col-md-12 col-sm-6 wow slideInRight">
									<div class="headmaster-section">
										<div class="headmaster-title">
											<h4>প্রধান শিক্ষক</h4>
										</div>
										<div class="headmaster-img">
										<img src="{{asset('/storage/images/'.$head_message[0]->image)}}">
										<a href="{{url('show-message/'.$head_message[0]->id)}}"><i class="fas fa-comment-alt"></i> প্রধান শিক্ষকের বার্তা</a>
										</div>
									</div>
								</div>
  
								<div class="col-md-12 col-sm-6 wow slideInRight">
									<div class="message-section">
										<div class="message-title">
											<h4>কর্তৃপক্ষের বার্তা</h4>
										</div>
										<div class="authority-message">
											<ul>
												@foreach ($message as $item)
													<li><a href="{{url('show-message/'.$item->id)}}"> {{$item->name}}</a></li>
												@endforeach
												
											</ul>
										</div>
									</div>
								</div>
  
								<div class="col-md-12 col-sm-6 wow slideInRight">
									<div class="national-song">
										<div class="national-song-title">
											<h4>আমাদের জাতীয় সংগীত</h4>
										</div>
										<audio controls="" class="song-autio">
											<source src="{{asset('Bangladesh_National_Anthem.mp3')}}" type="">
										</audio>
									</div>
								</div>
  
								
  
								<div class="col-md-12 col-sm-6 wow slideInRight">
									<div class="link-section">
										<div class="link-title">
											<h4>গুরুত্বপূর্ণ লিঙ্কসমূহ</h4>
										</div>
										<div class="importent-links">
											<ul>
												@foreach ($links as $item)
											<li><a href="{{$item->url}}"><i class="fas fa-hand-point-right"></i> {{$item->title}}</a></li>	
												@endforeach
												
											</ul>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div><!--------sidebar colum end------>
				
				</div>
			</div>
		</section>
		@section('frontend-sidebar')
			
		@endsection
		<!--------body section end------------->
  
		<!--------online-class-section------------->
		<div class="container-fluid wow fadeIn">
		<div class="online-class-section">
			<div class="container">
				<div class="online-class-title">
					<h2>আমাদের অনলাইন ক্লাসসমূহ</h2>
				</div>
				<div class="row">
					@foreach ($youtube_class as $item)
						<div class="col-lg-4 col-md-6">
							<div class="video-class">
							<iframe src="{{$item->url}}" allowfullscreen></iframe>
						</div>
						</div>	
					@endforeach
					<div class="class-btn">
						<a href="https://www.youtube.com/channel/UCWsbISPQPd7q36ZYLh-dOUA" target="__blank">আমাদের সকল ক্লাস দেখুন এইখানে</a>
					</div>
				</div>
			</div>
		</div>
		</div>
@endsection