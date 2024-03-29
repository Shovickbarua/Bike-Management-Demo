@extends('layout.master')
@section('title', 'Bike')
@section('content')

<form id="myForm" method="POST" id="myForm" action="{{route('bike.update',$bike->id)}}" enctype="multipart/form-data">
@method('PUT')
  @csrf
              <div class="form-row">
                  <div class="form-group col-md-4">
                    <label for="name">Brand<font style="color:red">*</font></label>
                    <input type="text" class="form-control" id="" placeholder="Name" name="brand" value="{{$bike->brand}}">
                  </div>
                  <div class="form-group col-md-4">
                    <label for="name">Model No<font style="color:red">*</font></label>
                    <input type="text" class="form-control" id="" placeholder="Name" name="bike_name" value="{{$bike->bike_name}}">
                  </div>
                  <div class="form-group col-md-4">
                    <label for="dob">Date<font style="color:red">*</font></label>
                    <input type="date" class="form-control singledatepicker" id="dob" name="dob" autocomplete="on" value="{{$bike->dob}}">
                  </div>
                  <div class="form-group col-md-4">
                    <label for="name">Quantity<font style="color:red">*</font></label>
                    <input type="number" class="form-control" id="" placeholder="" name="bquantity" value="{{$bike->bquantity}}">
                  </div>
                  <div class="form-group col-md-4">
                    <label for="name">Cost Price<font style="color:red">*</font></label>
                    <input type="text" class="form-control" id="" placeholder="" name="bcost" value="{{$bike->bcost}}">
                  </div>
                  <div class="form-group col-md-4">
                    <label for="name">Engine No<font style="color:red">*</font></label>
                    <input type="text" class="form-control" id="" placeholder="" name="engine_no" value="{{$bike->engine_no}}">
                  </div>
                  <div class="form-group col-md-4">
                    <label for="name">Chassis No<font style="color:red">*</font></label>
                    <input type="text" class="form-control" id="" placeholder="" name="chas_no" value="{{$bike->chas_no}}">
                  </div>
                  <div class="form-group col-md-4">
                    <label for="name">Make of Vehicle<font style="color:red">*</font></label>
                    <input type="text" class="form-control" id="" placeholder="" name="m_veh" value="{{$bike->m_veh}}">
                  </div>
                  <div class="form-group col-md-4">
                    <label for="name">Year of manufacture<font style="color:red">*</font></label>
                    <input type="text" class="form-control" id="" placeholder="" name="manu" value="{{$bike->manu}}">
                  </div>
                  <div class="form-group col-md-4">
                    <label for="name">No of Cylinder with CC<font style="color:red">*</font></label>
                    <input type="text" class="form-control" id="" placeholder="" name="cc" value="{{$bike->cc}}">
                  </div>
                  <div class="form-group col-md-4">
                    <label for="name">Seating Capacity<font style="color:red">*</font></label>
                    <input type="text" class="form-control" id="" placeholder="" name="seat_cap" value="{{$bike->seat_cap}}">
                  </div>
                  <div class="form-group col-md-4">
                    <label for="name">Brake<font style="color:red">*</font></label>
                    <input type="text" class="form-control" id="" placeholder="" name="brake" value="{{$bike->brake}}">
                  </div>
                  <div class="form-group col-md-4">
                    <label for="name">Front Tyre Size<font style="color:red">*</font></label>
                    <input type="text" class="form-control" id="" placeholder="" name="ftyre" value="{{$bike->ftyre}}">
                  </div>
                  <div class="form-group col-md-4">
                    <label for="name">Rear Tyre Size<font style="color:red">*</font></label>
                    <input type="text" class="form-control" id="" placeholder="" name="tyre" value="{{$bike->rtyre}}">
                  </div>
                  <div class="form-group col-md-4">
                    <label for="name">Weight<font style="color:red">*</font></label>
                    <input type="text" class="form-control" id="" placeholder="" name="weight" value="{{$bike->weight}}">
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