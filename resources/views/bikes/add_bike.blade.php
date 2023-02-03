@extends('layout.master')
@section('title', 'Bike')
@section('content')

<form id="myForm" method="POST" id="myForm" action="{{route('bike.store')}}" enctype="multipart/form-data">
  @csrf
              <div class="form-row">
                  <div class="form-group col-md-4">
                    <label for="name">Brand<font style="color:red">*</font></label>
                    <input type="text" class="form-control" id="" placeholder="Name" name="brand" value="">
                  </div>
                  <div class="form-group col-md-4">
                    <label for="name">Model No<font style="color:red">*</font></label>
                    <input type="text" class="form-control" id="" placeholder="" name="bike_name" value="">
                  </div>
                  <div class="form-group col-md-4">
                    <label for="dob">Date<font style="color:red">*</font></label>
                    <input type="date" class="form-control singledatepicker" id="dob" name="dob">
                  </div>
                  <div class="form-group col-md-4">
                    <label for="name">Quantity<font style="color:red">*</font></label>
                    <input type="number" class="form-control" id="" placeholder="" name="bquantity" value="">
                  </div>
                  <div class="form-group col-md-4">
                    <label for="name">Cost Price<font style="color:red">*</font></label>
                    <input type="text" class="form-control" id="" placeholder="" name="bcost" value="">
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
                    <label for="name">Make of Vehicle<font style="color:red">*</font></label>
                    <input type="text" class="form-control" id="" placeholder="" name="m_veh" value="">
                  </div>
                  <div class="form-group col-md-4">
                    <label for="name">Year of Manufacture<font style="color:red">*</font></label>
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
                    <label for="name">Tyre Size<font style="color:red">*</font></label>
                    <input type="text" class="form-control" id="" placeholder="" name="tyre" value="">
                  </div>
                  <div class="form-group col-md-4">
                    <label for="name">Weight<font style="color:red">*</font></label>
                    <input type="text" class="form-control" id="" placeholder="" name="weight" value="">
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