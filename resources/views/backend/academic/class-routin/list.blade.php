@extends('backend.admin_master')
@section('page-title',"Class Routin List")


@section('content-title',"Class Routin List")

@section('content')
<div class="card">
  <div class="card-body">
    <a href="{{url('/class-routin-add')}}" class="btn btn-primary">Upload Class Routin</a>
    <hr>
    @if (session()->has('msg'))
    <div class="alert alert-success text-center" role="alert">
      {{session('msg')}}
    </div>    
    
    @endif
      <table class="table myTable">
          <thead class="bg-dark text-light">
            <tr>
              <th scope="col">SL</th>
              <th scope="col">Class Name</th>
              <th scope="col">Date</th>
              <th scope="col">Action</th>
            </tr>
          </thead>
          <tbody>
            @foreach ($data as $item)
            <tr>
            <td>{{$loop->index+1}}</td>
              <td>{{$item->classname}}</td>
              <td>{{$item->uploaded_at}}</td>
              <td>
              <a href="{{url('/routin-delete/'.$item->id)}}" class="btn btn-danger">Delete</a>
              </td>
              
            </tr>
            @endforeach
            
          </tbody>
        </table>
  </div>
</div>

    
    
@endsection