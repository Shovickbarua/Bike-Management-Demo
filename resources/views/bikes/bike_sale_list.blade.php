@extends('layout.master')
@section('title', 'Bike Sale')
@section('content')

<div class="row">
			<div class="col-lg-12">
				<div class="card">
				  <div class="card-header">
					<h3 class="card-title">Bike Sale List</h3>
				  </div>
					<!-- /.card-header -->
					<div class="card-body">
          <table id="example1" class="table table-bordered table-striped">
						  <thead>
						  <tr>
                <th width="7%">Serial</th>
                <th>Invoice ID</th>
                <th>Client Name</th>
                <th>Model No</th>
                <th>Quantity</th>
                <th>Date</th>
                <th>Profit</th>
                <th>Total</th>
                <th width="">Action</th>
						  </tr>
						  </thead>
						  <tbody>
							@foreach($bikes as $bike)
								<tr>
									<td>{{$loop->iteration}}</td>
									<td>{{$bike->invoiceId}}</td>
									<td>{{$bike->client_name}}</td>
									<td>{{$bike->bike_name}}</td>
									<td>{{$bike->bsquantity}}</td>
									<td>{{$bike->dob}}</td>
									<td>{{$bike->profit}}</td>
									<td>{{$bike->total}}</td>
									<td>
									<div class="d-flex">
										<a href="{{route('saledetails', $bike->invoiceId)}}" class="btn btn-light btn-xs"><i class="fas fa-eye"></i></a>
										<a href="{{route('bikeinvoice', $bike->invoiceId)}}" class="btn btn-light btn-xs"><i class="fa fa-file-pdf"></i></a>

										<form action="{{route('bike_sale.destroy',$bike->id)}}" method="POST">
										@method('DELETE')    
										@csrf
										<button type="submit" class="btn btn-light btn-xs sharp"><i class="fa fa-trash"></i></button>
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