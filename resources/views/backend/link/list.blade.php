@extends('backend.admin_master')
@section('page-title','Show Link List')


@section('content-title','Link List')

@section('content')
<div class="card">
  <div class="card-body">
    <a href="{{url('/create-link')}}" class="btn btn-success">Create New Link</a>
    <hr>
    @if (session()->has('msg'))
    <div class="alert alert-success" role="alert">
      {{session('msg')}}
    </div>    
    @endif
      <table class="table myTable">
          <thead class="bg-dark text-light">
            <tr>
              <th scope="col">SL</th>
              <th scope="col">Link</th>
              <th scope="col">URL</th>
              <th scope="col">Action</th>
            </tr>
          </thead>
          <tbody>
            @foreach ($data as $item)
            <tr>
            <td>{{$loop->index+1}}</td>
              <td>{{$item->title}}</td>
              <td>{{$item->url}}</td>
              <td>
              <a href="{{url('/link-delete/'.$item->id)}}" class="btn btn-danger">Delete</a>
              </td>
            </tr>
            @endforeach
          </tbody>
        </table>
  </div>
</div>

    
    
@endsection