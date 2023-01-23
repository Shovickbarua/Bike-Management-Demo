@extends('layout.master')

@section('content')

<form id="myForm" method="POST" id="myForm" action="{{route('bike_sale.store')}}" enctype="multipart/form-data">
  @csrf
              <div class="form-row">
                  <div class="form-group col-md-4">
                    <label for="name">Client Name<font style="color:red">*</font></label>
                    <input type="text" class="form-control" id="" placeholder="Name" name="client_name" value="">
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
                    <label for="dob">Date<font style="color:red">*</font></label>
                    <input type="date" class="form-control singledatepicker" id="dob" name="dob" autocomplete="off">
                  </div>
                  <div class="form-group col-md-4">
                    <label for="name">Contact<font style="color:red">*</font></label>
                    <input type="text" class="form-control" id="" placeholder="" name="contact" value="">
                  </div>
                  <div class="form-group col-md-4">
                    <label for="name">Address<font style="color:red">*</font></label>
                    <input type="text" class="form-control" id="" placeholder="" name="address" value="">
                  </div>
              </div>
              <div class="form-row">
                  <div class="form-group col-md-4">
                    <label for="name">Bike Name<font style="color:red">*</font></label>
                    <input type="text" class="form-control" id="" placeholder="Name" name="bike_name" value="{{$bike->bike_name}}" readonly>
                  </div>
                  <div class="form-group col-md-4">
                    <label for="name">Quantity<font style="color:red">*</font></label>
                    <input type="number" class="form-control" id="" placeholder="" name="bsquantity" value="">
                  </div>
                  <div class="form-group col-md-4">
                    <label for="name">Engine No<font style="color:red">*</font></label>
                    <input type="text" class="form-control" id="" placeholder="" name="engine_no" value="">
                  </div>
                  <div class="form-group col-md-4">
                    <label for="name">Chassis No<font style="color:red">*</font></label>
                    <input type="text" class="form-control" id="" placeholder="" name="chas_no" value="">
                  </div>
                  <div class="form-group col-md-4">
                    <label for="name">Sale Price<font style="color:red">*</font></label>
                    <input type="text" class="form-control" id="" placeholder="" name="sale_price" value="">
                  </div>
                  <div class="form-group col-md-4">
                    <label for="name">Registration Fee<font style="color:red">*</font></label>
                    <input type="text" class="form-control" id="" placeholder="" name="registration" value="">
                  </div>
                  <div class="form-group col-md-4">
                    <label for="name">Bank Draft<font style="color:red">*</font></label>
                    <input type="text" class="form-control" id="" placeholder="" name="bank_draft" value="">
                  </div>
                  <div class="form-group col-md-4">
                    <label for="name">BRTA<font style="color:red">*</font></label>
                    <input type="text" class="form-control" id="" placeholder="" name="brta" value="">
                  </div>
                <div class="form-group col-md-12">
                  <button type="submit" class="btn btn-primary btn-sm" name="pro_btn">Save</button>               
                </div>
              </div>
      </form>



@endsection