@extends('backend.admin_master')
@section('page-title','User List')


@section('content-title','User Data List')

@section('content')
<div class="card">
  <div class="card-body">
    @if (session()->has('msg'))
    <div class="alert alert-success" role="alert">
      {{session('msg')}}
    </div>    
    
    @endif
      <table class="table myTable">
          <thead class="bg-dark text-light">
            <tr>
              <th scope="col">SL</th>
              <th scope="col">Name</th>
              <th scope="col">Email</th>
              <th scope="col">Role</th>
              <th scope="col">Action</th>
            </tr>
          </thead>
          <tbody>
            @foreach ($data as $item)
            <tr>
            <td>{{$loop->index+1}}</td>
              <td>{{$item->name}}</td>
              <td>{{$item->email}}</td>
              <td>
                @if ($item->role==2)
                {{'Admin'}}
                @elseif($item->role==3) 
                {{'Super Admin'}}
                @else
                {{'User'}}
                @endif
              </td>
              <td>
              <a href="{{url('/useredit/'.$item->id)}}" class="btn btn-info">Edit</a>
              <a href="{{url('/userdelete/'.$item->id)}}" class="btn btn-danger">Delete</a>
              </td>
              
            </tr>
            @endforeach
            
          </tbody>
        </table>
  </div>
</div>

    
    
@endsection