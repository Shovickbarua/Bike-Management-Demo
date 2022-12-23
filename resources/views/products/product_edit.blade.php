@extends('layout.master')

@section('content')

<form id="myForm" method="POST" id="myForm" action="{{route('product.update',$product->id)}}" enctype="multipart/form-data">
@method('PUT')
  @csrf
              <div class="form-row">
                  <div class="form-group col-md-4">
                    <label for="name">Product<font style="color:red">*</font></label>
                    <input type="text" class="form-control" id="" placeholder="Name" name="product_name" value="{{$product->product_name}}">
                  </div>
                  <div class="form-group col-md-4">
                    <label for="group_id">Select Category</label>
                    <select class="form-control" id="cat_id" name="cat_id">
                      <option value="">--Select Category --</option>
                      @foreach($categories as $category)
                        <option value="{{$category->id}}"@if($product->cat_id == $category->id) selected @endif>{{$category->cat_name}}</option>
                      @endforeach
                    </select>
                  </div>
                  <div class="form-group col-md-4">
                    <label for="dob">Date<font style="color:red">*</font></label>
                    <input type="date" class="form-control singledatepicker" id="dob" name="dob" autocomplete="off" value="{{$product->dob}}">
                  </div>
                  <div class="form-group col-md-4">
                    <label for="name">Quantity<font style="color:red">*</font></label>
                    <input type="text" class="form-control" id="" placeholder="" name="quantity" value="{{$product->quantity}}">
                  </div>
                  <div class="form-group col-md-4">
                    <label for="name">Cost Price<font style="color:red">*</font></label>
                    <input type="text" class="form-control" id="" placeholder="" name="cost" value="{{$product->cost}}">
                  </div>
                  <div class="form-group col-md-4">
                    <label for="name">Sale Price<font style="color:red">*</font></label>
                    <input type="text" class="form-control" id="" placeholder="" name="sale" value="{{$product->sale}}">
                  </div>
                  <div class="form-group col-md-4">
                      <label for="image">Image Upload</label>
                      <input type="file" class="form-control" id="image" name="image" >
                  </div>  
                <div class="form-group col-md-12">
                  <button type="submit" class="btn btn-primary btn-sm" name="pro_btn">Save</button>               
                </div>
              </div>
      </form>



@endsection