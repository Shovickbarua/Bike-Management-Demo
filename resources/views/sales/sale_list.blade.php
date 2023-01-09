@extends('layout.master')

@section('content')

<div class="row">
			<div class="col-lg-12">
				<div class="card">
				  <div class="card-header">
					<h3 class="card-title">All Customer</h3>
					<a href="{{route('sale.create')}}" class="btn btn-success float-right btn-sm"><i class="fa fa-plus-circle"></i>Add Product</a>
				  </div>
					<!-- /.card-header -->
					<div class="card-body">
          <table id="example1" class="table table-bordered table-striped">
						  <thead>
						  <tr>
                <th width="7%">Serial</th>
                <th width="">Invoice ID</th>
                <th>Product Name</th>
                <th>Customer Name</th>
                <th>Quantity</th>
                <th>Contact</th>
                <th>Date</th>
                <th>Total</th>
                <th width="">Action</th>
						  </tr>
						  </thead>
						  <tbody>
							@foreach($sales as $sale)
								<tr>
									<td>{{$loop->iteration}}</td>
									<td>{{$sale->invoiceId}}</td>
									<td>{{$sale->product_name}}</td>
									<td>{{$sale->cus_name}}</td>
									<td>{{$sale->pro_quantity}}</td>
									<td>{{$sale->contact}}</td>
									<td>{{$sale->dob}}</td>
									<td>{{$sale->total}}</td>
									<td>
									<div class="d-flex">
										<a href="{{route('invoice', $sale->invoiceId)}}" class="btn btn-danger btn-xs"><i class="fa fa-file-pdf"></i></a>
										<a href="{{route('sale.edit', $sale->id)}}" class="btn shadow btn-xs sharp me-1"><i class="fas fa-pencil-alt"></i></a>

										<form action="{{route('sale.destroy',$sale->id)}}" method="POST">
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
				</div>
			</div>
		</div>


@endsection