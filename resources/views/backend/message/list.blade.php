@extends('backend.admin_master')
@section('page-title','See All Message')


@section('content-title','See All Message')

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
              <th scope="col">Image</th>
              <th scope="col">Action</th>
            </tr>
          </thead>
          <tbody>
            @foreach ($data as $item)
            <tr>
            <td scope="col">{{$loop->index+1}}</td>
            <td scope="col" width='50%'>{{$item->name}}</td>
            <td scope="col"width="20%"><img width="80px"src="{{asset('/storage/images/'.$item->image)}}" alt="Image"></td>
            <td>
              
              @if ($loop->first)
              <a href="{{url('/update-message/'.$item->id)}}"class='btn btn-success'>Edit</a>
              @else
              <a href="{{url('/update-message/'.$item->id)}}"class='btn btn-success'>Edit</a>
              <a href="{{url('/message-delete/'.$item->id)}}"class='btn btn-danger'>Delete</a>
              @endif
            </td>
            </tr>
            @endforeach
            
          </tbody>
        </table>
  </div>
</div>
@endsection

