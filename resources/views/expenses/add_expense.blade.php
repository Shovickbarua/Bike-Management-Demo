@extends('layout.master')
<<<<<<< HEAD

=======
@section('title', 'Expenses')
>>>>>>> c1b1bb4f7cececa3c914f07d81f64a9466d4c6c1
@section('content')

<form id="myForm" method="POST" id="myForm" action="{{route('expense.store')}}">
  @csrf
              <div class="form-row">
                  <div class="form-group col-md-4">
                    <label for="name">Expense Name<font style="color:red">*</font></label>
                    <input type="text" class="form-control" id="name" placeholder="Expense" name="ex_name" value="">
                  </div>
                  <div class="form-group col-md-4">
                    <label for="name">Amount<font style="color:red">*</font></label>
                    <input type="text" class="form-control" id="name" placeholder="" name="amount" value="">
                  </div>
<<<<<<< HEAD
=======
                  <div class="form-group col-md-4">
                    <label for="dob">Date<font style="color:red">*</font></label>
                    <input type="date" class="form-control singledatepicker" id="dob" name="dob">
                  </div>
>>>>>>> c1b1bb4f7cececa3c914f07d81f64a9466d4c6c1
                 
                <div class="form-group col-md-12">
                  <button type="submit" class="btn btn-primary btn-sm" name="cat_btn">Save</button>
                </div>
              </div>
</form>



@endsection