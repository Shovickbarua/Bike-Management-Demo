@extends('layout.master')
@section('title', 'Seventh Service')
@section('content')

<div class="row">
			<div class="col-lg-12">
				<div class="card">
				  <div class="card-header">
				  <h3 class="card-title">Seventh Service List</h3>
				  </div>
					<!-- /.card-header -->
					<div class="card-body">
          <table id="example1" class="table table-bordered table-striped">
						  <thead>
						  <tr>
                <th width="">Invoice ID</th>
                <th>Bike Name</th>
                <th>Customer Name</th>
                <th>Quantity</th>
                <th>Contact</th>
                <th>Duration</th>
						  </tr>
						  </thead>
						  <tbody>
							@foreach($bikeservice as $service)
							@if(Carbon\Carbon::parse($service->seventh_service)->greaterThanOrEqualTo(Carbon\Carbon::now()))
								<tr>
									<td>{{$service->invoiceId}}</td>
									<td>{{$service->bike_name}}</td>
									<td>{{$service->client_name}}</td>
									<td>{{$service->bsquantity}}</td>
									<td>{{$service->contact}}</td>
									<td>{{$service->seventh_service}}</td>
								@endif
								</tr>
							@endforeach
						  </tbody>
						</table>
					</div>	 
				</div>
			</div>
		</div>


@endsection