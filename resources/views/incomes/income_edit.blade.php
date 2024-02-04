@extends('layout.master')

@section('content')

<form id="myForm" method="POST" id="myForm" action="{{route('income.update',$income->id)}}">
  @csrf
              <div class="form-row">
                  <div class="form-group col-md-4">
                    <label for="name">Income Name<font style="color:red">*</font></label>
                    <input type="text" class="form-control" id="name" placeholder="Income" name="in_name" value="{{$income->ex_name}}">
                  </div>
                  <div class="form-group col-md-4">
                    <label for="name">Amount<font style="color:red">*</font></label>
                    <input type="text" class="form-control" id="name" placeholder="" name="amount" value="{{$income->amount}}">
                  </div>
                  <div class="form-group col-md-4">
                    <label for="dob">Date<font style="color:red">*</font></label>
                    <input type="date" class="form-control singledatepicker" id="dob" name="dob" value="{{$income->dob}}">
                  </div>
                 
                <div class="form-group col-md-12">
                  <button type="submit" class="btn btn-primary btn-sm" name="cat_btn">Save</button>
                </div>
              </div>
</form>



@endsection