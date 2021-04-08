<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>লগিন করুন</title>
    <!-- Bootstrap CDN -->
    <link href="{{asset('css\bootstrap.min.css')}}" rel="stylesheet">
<link rel="stylesheet" href="{{asset('css\login-reg.css')}}">
</head>
<body>
    <div class="login-page-container">
        <div class="row">
            <div class="col-md-6 offset-md-3">
                <div class="card login-body">
                    <div class="card-body">                       
                        <h5 class="card-title text-center mb-2" style="font-weight: bold;">সদস্য লগিন</h5>
                        <div style="color:rgb(238, 234, 6)">
                            @if (session()->has('msg'))
                            {{session('msg')}}
                        @endif
                        </div>
                    <form action="{{route('submitlogin')}}" method="post" class="form">
                        @csrf
                            <label for="email">আপনার ইমেইল</label>
                    <input class="form-control" type="email" placeholder="abc@gmail.com" name="email" value="{{old('email')}}">
                            <div style="color:rgb(238, 234, 6)">
                                @error('email')
                                    {{$message}}
                                @enderror
                            </div>
                            <label for="pass">পাসওয়ার্ড দিন</label>
                            <input class="form-control mb-2" type="password" name="password" >
                            <div style="color:rgb(238, 234, 6)">
                                @error('password')
                                    {{$message}}
                                @enderror
                            </div>
                            <div class="submit text-center">
                                <div class="login-btn mb-2">
                                    <button type="submit" class="hvr-sweep-to-right">লগিন করুন</button>
                                    <a href="{{url('/')}}" class="hvr-sweep-to-left">হোমপেজে ফিরে যান</a>
                                </div>
                                <span>আপনার একাউন্ট নেই?</span><a href="{{url('register')}}" style="font-weight:bold;color:#F7BF6E"> রেজিষ্ট্রেশন করুন এখানে</a><br>
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