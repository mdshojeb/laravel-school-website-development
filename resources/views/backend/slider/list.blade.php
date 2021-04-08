@extends('backend.admin_master')
@section('page-title','Memory List')


@section('content-title','Showing All Memory')

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
              <th scope="col">Title</th>
              <th scope="col">Image</th>
              <th scope="col">Action</th>
            </tr>
          </thead>
          <tbody>
            @foreach ($data as $item)
            <tr>
            <td scope="col">{{$loop->index+1}}</td>
            <td scope="col" width='50%'>{{$item->caption}}</td>
            <td scope="col"width="20%"><img width="80px"src="{{asset('/storage/Slider/'.$item->image)}}" alt="Image"></td>
            <td>
              <a href="{{url('/slider-image-delete/'.$item->id)}}"class='btn btn-danger'>Delete</a>
            </td>
            </tr>
            @endforeach
            
          </tbody>
        </table>
  </div>
</div>

    
    
@endsection