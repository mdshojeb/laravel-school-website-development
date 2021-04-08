@extends('backend.admin_master')
@section('page-title','User Data Edit')


@section('content-title','User Data Edit')

@section('content')
    <div class="card">
        <div class="card-body bg-light">
          <h3>User's Data</h3>
          <hr>
          <table >
            <tr>
              <td style="font-weight:bold">Name</td>
              <td>:</td>
              <td>{{$data[0]->name}}</td>
            </tr>
            <tr>
              <td style="font-weight:bold">Email</td>
              <td>:</td>
              <td>{{$data[0]->email}}</td>
            </tr>
            <tr>
              <td style="font-weight:bold">Current Role</td>
              <td>:</td>
              <td>
                @if ($data[0]->role==3)
                {{'Super Admin'}}
                @elseif($data[0]->role==2) 
                {{'Admin'}}
                @else
                {{'User'}}
                @endif
                
                
              </td>
            </tr>
          </table>
          <br><br>
          {{-- change user role --}}
          <div class="row">
            <div class="col-md-6">
              <form action="{{url('/userupdate/'.$data[0]->id)}}"method='post'>
                @csrf
                <label for="role">Change User Role</label>
                <select name="selectedrole" id="role" class="form-control" required>
                  <option value="1" >User</option>
                  <option value="2">Admin</option>
                  <option value="3">Super Admin</option>
                </select><br>
                <button type="submit"class="btn btn-info">Update</button>
            </form>
            </div>
          </div>
        </div>
    </div>

@endsection