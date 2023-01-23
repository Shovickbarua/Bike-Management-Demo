@extends('layout.master')

@section('content')

<form id="myForm" method="POST" id="myForm" action="{{route('product.store')}}" enctype="multipart/form-data">
  @csrf
              <div class="form-row">
                  <div class="form-group col-md-4">
                    <label for="name">Product<font style="color:red">*</font></label>
                    <input type="text" class="form-control" id="" placeholder="Name" name="product_name" value="">
                  </div>
                  <div class="form-group col-md-4">
                    <label for="group_id">Select Category</label>
                    <select class="form-control" id="cat_id" name="cat_id">
                      <option value="">--Select Category --</option>
                      @foreach($categories as $category)
                        <option value="{{$category->id}}">{{$category->cat_name}}</option>
                      @endforeach
                    </select>
                  </div>
                  <div class="form-group col-md-4">
                    <label for="name">SKU<font style="color:red">*</font></label>
                    <input type="text" class="form-control" id="" placeholder="SKU" name="SKU" value="">
                  </div>
                  <div class="form-group col-md-4">
                    <label for="dob">Date<font style="color:red">*</font></label>
                    <input type="date" class="form-control singledatepicker" id="dob" name="dob" autocomplete="on">
                  </div>
                  <div class="form-group col-md-4">
                    <label for="name">Quantity<font style="color:red">*</font></label>
                    <input type="number" class="form-control" id="" placeholder="" name="quantity" value="">
                  </div>
                  <div class="form-group col-md-4">
                    <label for="name">Cost Price<font style="color:red">*</font></label>
                    <input type="text" class="form-control" id="" placeholder="" name="cost" value="">
                  </div>
                  <div class="form-group col-md-4">
                      <label for="image">Image Upload</label>
                      <input type="file" class="form-control" id="image" name="image">
                  </div>  
                <div class="form-group col-md-12">
                  <button type="submit" class="btn btn-primary btn-sm" name="pro_btn">Save</button>               
                </div>
              </div>
      </form>



@endsection