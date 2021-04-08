@extends('frontend.master')

@section('title','Class Routine for All Class | KKBHS')
    
@section('content')      
    <!--------body section------------->
    <section class="body-section">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-9 wow slideInLeft"><!--------col-1------>
                    <div class="about-kkbhs">
                        <div class="row p-2">
                            <table class="table table-hover table-light table-striped" style="font-size: 18px">   
                                <thead>
                                    <tr>
                                        <th>শ্রেণি</th>
                                        <th>বিষয়</th>
                                        <th>তারিখ</th>
                                        <th>ডাউনলোড লিংক</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($suggestion as $item)
                                    <tr>
                                        <td>{{$item->classname}}</td>
                                        <td>{{$item->subject_name}}</td>
                                        <td>{{$item->uploaded_at}}</td>
                                    <td><a href="{{$item->link}}" class="btn btn-warning"><i class="fas fa-download"></i> ডাউনলোড</a></td>
                                    </tr>
                                    @endforeach
                                    
                                </tbody>
                              </table>         
                        </div>
      </div>
  </div><!--------col-1 end------>
  {{-- sidebar show here --}}
  @section('frontend-sidebar')
      @parent
  @endsection
@endsection