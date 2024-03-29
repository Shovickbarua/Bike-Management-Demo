@extends('layout.master')
@section('title', 'Product Sale')
@section('content')

<form id="myForm" method="POST" id="myForm" action="{{route('sale.store')}}" enctype="multipart/form-data">
  @csrf
           
              <div class="form-row">
                  <div class="form-group col-md-4">
                    <label for="name">Client Name<font style="color:red">*</font></label>
                    <input type="text" class="form-control" id="" placeholder="" name="cus_name" value="" >
                  </div>
                  <div class="form-group col-md-4">
                    <label for="name">Address<font style="color:red">*</font></label>
                    <input type="text" class="form-control" id="" placeholder="" name="address" value="" >
                  </div>
                  <div class="form-group col-md-4">
                    <label for="name">Product Name</label>
                    <input type="text" class="form-control" id="" placeholder="" name="product_name" value="" >
                  </div>
                  <div class="form-group col-md-4">
                    <label for="name">SKU</label>
                    <input type="text" class="form-control" id="" placeholder="" name="SKU" value="" >
                  </div>
                  <div class="form-group col-md-4">
                    <label for="name">Invoice</label>
                    <input type="text" class="form-control" id="" placeholder="" name="invoiceId" value="" >
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
                    <label for="name">Quantity<font style="color:red">*</font></label>
                    <input type="number" class="form-control" id="" placeholder="" name="pro_quantity" value="">
                  </div>
                  <div class="form-group col-md-4">
                    <label for="name">Cost<font style="color:red">*</font></label>
                    <input type="text" class="form-control" id="" placeholder="" name="cost" value="">
                  </div>
                  <div class="form-group col-md-4">
                    <label for="name">Sale Price<font style="color:red">*</font></label>
                    <input type="text" class="form-control" id="" placeholder="" name="sale" value="">
                  </div>
                  <div class="form-group col-md-4">
                    <label for="group_id">Payment Method</label>
                    <select class="form-control" id="cat_id" name="method_id">
                      <option value="">--Select Method --</option>
                      @foreach($methods as $method)
                        <option value="{{$method->id}}">{{$method->method_name}}</option>
                      @endforeach
                    </select>
                  </div>
                  <div class="form-group col-md-4">
                    <label for="name">Contact<font style="color:red">*</font></label>
                    <input type="text" class="form-control" id="" placeholder="" name="contact" value="">
                  </div>
                  <div class="form-group col-md-4">
                    <label for="dob">Date<font style="color:red">*</font></label>
                    <input type="date" class="form-control singledatepicker" id="dob" name="dob" autocomplete="on">
                  </div>
                <div class="form-group col-md-12">
                  <button type="submit" class="btn btn-primary btn-sm" name="pro_btn">Save</button>               
                </div>
              </div>
      </form>



@endsection