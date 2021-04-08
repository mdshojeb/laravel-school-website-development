@extends('backend.admin_master')
@section('page-title','Show All Notice')


@section('content-title','All Notice')

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
              <th scope="col">Notic Title</th>
              <th scope="col">Date</th>
              <th scope="col">Action</th>
            </tr>
          </thead>
          <tbody>
            @foreach ($data as $item)
            <tr>
            <td>{{$loop->index+1}}</td>
              <td>{{$item->title}}</td>
              <td>{{$item->date}}</td>
              <td>
              <a href="{{url('/notice-delete/'.$item->id)}}" class="btn btn-danger">Delete</a>
              </td>
              
            </tr>
            @endforeach
            
          </tbody>
        </table>
  </div>
</div>

    
    
@endsection