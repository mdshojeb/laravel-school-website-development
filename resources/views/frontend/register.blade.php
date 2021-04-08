<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register Page</title>
    <!-- Bootstrap CDN -->
<link href="{{asset('css\bootstrap.min.css')}}" rel="stylesheet">
<link rel="stylesheet" href="{{asset('css/login-reg.css')}}">
</head>
<body>
    <div class="login-page-container">
        <div class="row">
            <div class="col-md-6 offset-md-3">
                <div class="card login-body">
                    <div class="card-body">                       
                        <h4 class="card-title text-center mb-2" style="font-weight: bold;">সদস্য রেজিষ্ট্রেশন</h4>
                        <!-- Registration form -->
                    <form action="{{route('postreg')}}" method="post" class="form">
                        @csrf
                            <label for="name" class="form-label"> নাম (ইংরেজি)</label>
                    <input type="text" class="form-control" name="name" id="name" placeholder="Shajeeb Mahmud" value="{{old('name')}}">
                            <div style="color:rgb(255, 251, 7)">
                                @error('name')
                                    {{$message}}
                                @enderror
                            </div>
                            <div class="row">
                                <div class="col-md-6 col-sm-12">
                                    <label for="email">ইমেইল</label>
                                    <input class="form-control" type="email" placeholder="youremail@gmail.com" value="{{old('email')}}" id="email" name="email">
                                    <div style="color:rgb(255, 251, 7)">
                                        @error('email')
                                            {{$message}}
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-6 col-sm-12">
                                    <label for="phone">ফোন নাম্বার</label>
                                    <input class="form-control mb-2" type="text" id="phone" name="phone" value="{{old('phone')}}">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6 col-sm-12">
                                    <label for="pass">পাসওয়ার্ড</label>
                                    <input class="form-control" type="password" id="pass" name="password">
                                    <div style="color:rgb(255, 251, 7)">
                                        @error('password')
                                            {{$message}}
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-6 col-sm-12">
                                    <label for="cpass">পাসওয়ার্ড নিশ্চিত করুন</label>
                                    <input class="form-control mb-2" type="password" id="cpass" name="cpass">
                                    <div style="color:rgb(255, 251, 7)">
                                        @error('cpass')
                                            {{$message}}
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <div style="color:rgb(255, 251, 7)">
                                {{session('msg')}}
                            </div>
                            <div class="submit text-center">
                                <div class="login-btn mb-2">
                                    <button type="submit"class="hvr-sweep-to-right">রেজিষ্ট্রেশন করুন</button>
                                    <a href="{{url('/')}}" class="hvr-sweep-to-left">হোমপেজে ফিরে যান</a>
                                </div>
                                <span>ইতিমধ্যে একাউন্ট করে ফেলেছেন?</span><a href="{{url('login')}}" style="font-weight:bold;color:#F7BF6E"> লগিন করুন এখানে!</a><br>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!-- JS files -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>

</body>
</html>