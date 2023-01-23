@extends('layout.master')

@section('content')

<form id="myForm" method="POST" id="myForm" action="{{route('bike.update',$bike->id)}}" enctype="multipart/form-data">
  @csrf
              <div class="form-row">
                  <div class="form-group col-md-4">
                    <label for="name">Bike Name<font style="color:red">*</font></label>
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
                      <label for="image">Image Upload</label>
                      <input type="file" class="form-control" id="image" name="image" >
                  </div>  
                <div class="form-group col-md-12">
                  <button type="submit" class="btn btn-primary btn-sm" name="pro_btn">Save</button>               
                </div>
              </div>
      </form>



@endsection