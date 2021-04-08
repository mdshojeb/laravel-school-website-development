<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>লগিন সম্পন্ন</title>
    <!-- Bootstrap CDN -->
    <link href="{{asset('css\bootstrap.min.css')}}" rel="stylesheet">
<link rel="stylesheet" href="{{asset('css\login-reg.css')}}">
</head>
<body>
    <div class="login-page-container">
        <div class="row">
            <div class="col-md-6 offset-md-3">
                <div class="card login-body">
                    <div class="card-body text-center">                       
                    <h4 class="card-title text-center mb-2"> অভিনন্দন!{{$name}} আপনার রেজিস্ট্রেশন সফলভাবে সম্পন্ন হয়েছে।</h4>
                    <p>ওয়েবসাইট এর এডমিন আপনার তথ্য যাচাই করে আপনাকে লগিন এর তথ্য দেয়ার আগ পর্যন্ত অপেক্ষা করুন।</p>
                    <p>ধন্যবাদ</p>
                    <div class="login-btn mb-2">
                        
                        <a href="{{url('/')}}" class="hvr-sweep-to-left">হোমপেজে ফিরে যান</a>
                    </div>
            
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!-- JS files -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>

</body>
</html>