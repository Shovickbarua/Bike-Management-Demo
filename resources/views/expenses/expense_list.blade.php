@extends('layout.master')

@section('content')

<div class="row">
			<div class="col-lg-12">
				<div class="card">
				  <div class="card-header">
					<h3 class="card-title">All Expense</h3>
					<a href="{{route('expense.create')}}" class="btn btn-success float-right btn-sm"><i class="fa fa-plus-circle"></i>Add Expense</a>
				  </div>
					<!-- /.card-header -->
					<div class="card-body">
          <table id="example1" class="table table-bordered table-striped">
						  <thead>
						  <tr>
                <th width="7%">Serial</th>
                <th>Name</th>
                <th>Amount</th>
                <th>Date & Time</th>
                <th width="17%">Action</th>
						  </tr>
						  </thead>
						  <tbody>
							@foreach($expenses as $expense)
								<tr>
									<td>{{$loop->iteration}}</td>
									<td>{{$expense->ex_name}}</td>
									<td>{{$expense->amount}}</td>
									<td>{{$expense->created_at}}</td>
									<td>
                  <div class="d-flex">
										<a href="{{route('expense.edit', $expense->id)}}" class="btn shadow btn-xs sharp me-1"><i class="fas fa-pencil-alt"></i></a>

										<form action="{{route('expense.destroy',$expense->id)}}" method="POST">
										@method('DELETE')    
										@csrf
										<button type="submit" class="btn btn-danger shadow btn-xs sharp"><i class="fa fa-trash"></i></button>
										</form>
									</div>
                  </td>
								</tr>
							@endforeach
						  </tbody>
              
						</table>
            
					</div>
          <div class="form-row pb-3">
            <div class="col-md-6"><span class="pl-5"><strong>Total:</strong></span></div>
            <div class="col-md-6"><span class="pl-5 "><strong>{{$ex}}</strong></span></div>
            </div>	 
				</div>
			</div>
		</div>


@endsection