@extends('layout.master')
@section('title', 'Roles')
@section('content')

<form id="myForm" method="POST" id="myForm" action="{{route('role.store')}}" enctype="multipart/form-data">
  @csrf
              <div class="form-row">
                  <div class="form-group col-md-4">
                    <label for="name">User Name<font style="color:red">*</font></label>
                    <input type="text" class="form-control" id="" placeholder="Name" name="username" value="">
                  </div>
                  <div class="form-group col-md-4">
                    <label for="name">Email<font style="color:red">*</font></label>
                    <input type="email" class="form-control" id="" placeholder="" name="email" value="">
                  </div>
                  <div class="form-group col-md-4">
                    <label for="name">Password<font style="color:red">*</font></label>
                    <input type="password" class="form-control" id="" placeholder="" name="password" value="">
                  </div>
                <div class="form-group col-md-12">
                  <button type="submit" class="btn btn-primary btn-sm" name="pro_btn">Save</button>               
                </div>
              </div>
      </form>
@endsection