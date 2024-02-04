@extends('layout.master')
@section('title', 'Category')
@section('content')

<form id="myForm" method="POST" id="myForm" action="{{route('category.store')}}">
  @csrf
              <div class="form-row">
                  <div class="form-group col-md-4">
                    <label for="name">Category<font style="color:red">*</font></label>
                    <input type="text" class="form-control" id="name" placeholder="Category" name="cat_name" value="">
                  </div>
                 
                <div class="form-group col-md-12">
                  <button type="submit" class="btn btn-primary btn-sm" name="cat_btn">Save</button>
                </div>
              </div>
</form>



@endsection