@extends('layout.master')
@section('title', 'Category')
@section('content')

<form id="myForm" method="POST" action="{{route('category.update',$category->id)}}">
  @method('PUT')
  @csrf
              <div class="form-row">
                  <div class="form-group col-md-4">
                    <label for="name">Category<font style="color:red">*</font></label>
                    <input type="text" class="form-control" id="name" placeholder="Subject" name="cat_name" value="{{$category->cat_name}}">
                  </div>
                 
                <div class="form-group col-md-12">
                  <button type="submit" class="btn btn-primary btn-sm" name="dep_btn">Save</button>
                </div>
              </div>
</form>



@endsection