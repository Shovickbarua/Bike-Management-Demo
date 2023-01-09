@extends('layout.master')

@section('content')

<form id="myForm" method="POST" id="myForm" action="{{route('sale.store')}}" enctype="multipart/form-data">
  @csrf
              <div class="form-row">
                  <div class="form-group col-md-4">
                    <label for="name">Client Name<font style="color:red">*</font></label>
                    <input type="text" class="form-control" id="" placeholder="Name" name="cus_name" value="">
                  </div>
                  
                  <div class="form-group col-md-4">
                    <label for="name">Product Name</label>
                    <input type="text" class="form-control" id="" placeholder="Name" name="product_name" value="{{$products->product_name}}" readonly>
                  </div>
                  
                  <div class="form-group col-md-4">
                    <label for="name">Quantity<font style="color:red">*</font></label>
                    <input type="text" class="form-control" id="" placeholder="" name="pro_quantity" value="">
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