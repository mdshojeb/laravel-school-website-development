@extends('backend.admin_master')
@section('page-title',"Show All Teacher's Information")


@section('content-title',"All Teacher's Information")

@section('content')
<div class="card">
  <div class="card-body">
    <a href="{{url('/about-teacher-add')}}" class="btn btn-primary">Create New One</a>
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
              <th scope="col">Name</th>
              <th scope="col">Designation</th>
              <th scope="col">Action</th>
            </tr>
          </thead>
          <tbody>
            @foreach ($data as $item)
            <tr>
            <td>{{$loop->index+1}}</td>
              <td>{{$item->name}}</td>
              <td>{{$item->designation}}</td>
              <td>
              <a href="{{url('/teacher-delete/'.$item->id)}}" class="btn btn-danger">Delete</a>
              </td>
              
            </tr>
            @endforeach
            
          </tbody>
        </table>
  </div>
</div>

    
    
@endsection