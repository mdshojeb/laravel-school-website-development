@extends('frontend.master')

@section('title','Class Routine for All Class | KKBHS')
    
@section('content')      
    <!--------body section------------->
    <section class="body-section">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-9 wow slideInLeft"><!--------col-1------>
                    <div class="about-kkbhs">
                        <h3> সকল ক্লাসের ক্লাস রুটিন</h3>
                        <div class="row p-2">
                            <table class="table table-hover table-striped" style="font-size: 18px">
                                <thead>
                                    <tr>
                                        <th>শ্রেণি</th>
                                        <th>তারিখ</th>
                                        <th>ডাউনলোড লিংক</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($routin as $item)
                                    <tr>
                                        <td>{{$item->classname}}</td>
                                            <td>{{$item->uploaded_at}}</td>
                                        <td><a href="{{$item->link}}" target='_blank' class="btn btn-primary"><i class="fas fa-download"></i> ডাউনলোড</a></td>
                                    </tr>
                                    @endforeach
                                    
                                </tbody>
                              </table>
                              {{$routin->links()}}         
                        </div>
      </div>
  </div><!--------col-1 end------>
  {{-- sidebar show here --}}
  @section('frontend-sidebar')
      @parent
  @endsection
@endsection