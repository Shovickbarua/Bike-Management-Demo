@extends('layout.master')

@section('content')

<form id="myForm" method="POST" id="myForm" action="{{route('expense.update',$expense->id)}}">
@method('PUT')
  @csrf
              <div class="form-row">
                  <div class="form-group col-md-4">
                    <label for="name">Expense Name<font style="color:red">*</font></label>
                    <input type="text" class="form-control" id="name" placeholder="Expense" name="ex_name" value="{{$expense->ex_name}}">
                  </div>
                  <div class="form-group col-md-4">
                    <label for="name">Amount<font style="color:red">*</font></label>
                    <input type="text" class="form-control" id="name" placeholder="" name="amount" value="{{$expense->amount}}">
                  </div>
                  <div class="form-group col-md-4">
                    <label for="dob">Date<font style="color:red">*</font></label>
                    <input type="date" class="form-control singledatepicker" id="dob" name="dob" value="{{$expense->dob}}">
                  </div>
                 
                <div class="form-group col-md-12">
                  <button type="submit" class="btn btn-primary btn-sm" name="cat_btn">Save</button>
                </div>
              </div>
</form>



@endsection