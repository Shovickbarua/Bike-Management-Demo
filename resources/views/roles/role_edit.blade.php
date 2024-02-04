@extends('layout.master')
@section('title', 'Roles')
@section('content')

<form id="myForm" method="POST" id="myForm" action="{{route('role.update',$user->id)}}" enctype="multipart/form-data">
@method('PUT')
  @csrf
              <div class="form-row">
                  <div class="form-group col-md-4">
                    <label for="name">User Name<font style="color:red">*</font></label>
                    <input type="text" class="form-control" id="" placeholder="Name" name="username" value="{{$user->username}}">
                  </div>
                  <div class="form-group col-md-4">
                    <label for="name">Email<font style="color:red">*</font></label>
                    <input type="email" class="form-control" id="" placeholder="" name="email" value="{{$user->email}}">
                  </div>
                  <div class="form-group col-md-4">
                    <label for="name">New Password<font style="color:red">*</font></label>
                    <input type="password" class="form-control" id="" placeholder="" name="password" value="">
                  </div>
                  <div class="form-group col-md-4">
                    <label for="name">Confirm Password<font style="color:red">*</font></label>
                    <input type="password" class="form-control" id="" placeholder="" name="cpassword" value="">
                  </div>
                  <div class="form-group col-md-4">
                    <label for="group_id">Status</label>
                    <select class="form-control" id="cat_id" name="status">
                      <option value="">--Status --</option>
                        <option value="1">Active</option>
                        <option value="0">Deactivate</option>
                    </select>
                  </div>
                <div class="form-group col-md-12">
                  <button type="submit" class="btn btn-primary btn-sm" name="pro_btn">Save</button>               
                </div>
              </div>
      </form>
@endsection