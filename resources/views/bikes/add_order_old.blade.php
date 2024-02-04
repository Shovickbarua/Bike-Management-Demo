@extends('layout.master')
@section('title', 'Bike')
@section('content')

<form id="myForm" method="POST" id="myForm" action="{{route('bike_sale.store')}}" enctype="multipart/form-data">
  @csrf
              <div class="form-row">
                  <div class="form-group col-md-4">
                    <label for="name">Client Name<font style="color:red">*</font></label>
                    <input type="text" class="form-control" id="" placeholder="" name="client_name" value="">
                  </div>
                  <div class="form-group col-md-4">
                    <label for="name">Father's Name<font style="color:red">*</font></label>
                    <input type="text" class="form-control" id="" placeholder="" name="fName" value="">
                  </div>
                  <div class="form-group col-md-4">
                    <label for="name">NID No<font style="color:red">*</font></label>
                    <input type="text" class="form-control" id="" placeholder="" name="nid" value="">
                  </div>
                  <div class="form-group col-md-4">
                    <label for="name">Invoice No<font style="color:red">*</font></label>
                    <input type="text" class="form-control" id="" placeholder="" name="invoiceId" value="">
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
                    <label for="name">Brand<font style="color:red">*</font></label>
                    <input type="text" class="form-control" id="" placeholder="" name="brand" value="" >
                  </div>
                  <div class="form-group col-md-4">
                    <label for="name">Model<font style="color:red">*</font></label>
                    <input type="text" class="form-control" id="" placeholder="" name="bike_name" value="" >
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
                    <label for="name">Model of Vehicle<font style="color:red">*</font></label>
                    <input type="text" class="form-control" id="" placeholder="" name="veh_no" value="">
                  </div>
                  <div class="form-group col-md-4">
                    <label for="name">Make of Vehicle<font style="color:red">*</font></label>
                    <input type="text" class="form-control" id="" placeholder="" name="m_veh" value="">
                  </div>
                  <div class="form-group col-md-4">
                    <label for="name">Year of manufacture<font style="color:red">*</font></label>
                    <input type="text" class="form-control" id="" placeholder="" name="manu" value="">
                  </div>
                  <div class="form-group col-md-4">
                    <label for="name">No of Cylinder with CC<font style="color:red">*</font></label>
                    <input type="text" class="form-control" id="" placeholder="" name="cc" value="">
                  </div>
                  <div class="form-group col-md-4">
                    <label for="name">Seating Capacity<font style="color:red">*</font></label>
                    <input type="text" class="form-control" id="" placeholder="" name="seat_cap" value="">
                  </div>
                  <div class="form-group col-md-4">
                    <label for="name">Brake<font style="color:red">*</font></label>
                    <input type="text" class="form-control" id="" placeholder="" name="brake" value="">
                  </div>
                  <div class="form-group col-md-4">
                    <label for="name">Fornt Tyre Size<font style="color:red">*</font></label>
                    <input type="text" class="form-control" id="" placeholder="" name="ftyre" value="" >
                  </div>
                  <div class="form-group col-md-4">
                    <label for="name">Rear Tyre Size<font style="color:red">*</font></label>
                    <input type="text" class="form-control" id="" placeholder="" name="rtyre" value="" >
                  </div>
                  <div class="form-group col-md-4">
                    <label for="name">Weight<font style="color:red">*</font></label>
                    <input type="text" class="form-control" id="" placeholder="" name="weight" value="">
                  </div>
                  <div class="form-group col-md-4">
                    <label for="name">Color<font style="color:red">*</font></label>
                    <input type="text" class="form-control" id="" placeholder="" name="color" value="">
                  </div>
                  <div class="form-group col-md-4">
                    <label for="name">Cost<font style="color:red">*</font></label>
                    <input type="text" class="form-control" id="" placeholder="" name="bcost" value="">
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
                  <div class="form-group col-md-4">
                      <label for="image">Customer Photo</label>
                      <input type="file" class="form-control" id="image" name="cus_photo">
                  </div>
                  <div class="form-group col-md-4">
                      <label for="image">Bank Copy</label>
                      <input type="file" class="form-control" id="image" name="b_copy">
                  </div>
                  <div class="form-group col-md-4">
                      <label for="image">Registration Slip</label>
                      <input type="file" class="form-control" id="image" name="r_slip">
                  </div>
                  <div class="form-group col-md-4">
                      <label for="image">Tax Token</label>
                      <input type="file" class="form-control" id="image" name="t_token">
                  </div>
                <div class="form-group col-md-12">
                  <button type="submit" class="btn btn-primary btn-sm" name="pro_btn">Save</button>               
                </div>
              </div>
      </form>



@endsection