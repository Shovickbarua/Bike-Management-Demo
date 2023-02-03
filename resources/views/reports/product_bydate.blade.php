@extends('layout.master')
@section('title', 'Report')
@section('content')

<div class="row">
			<div class="col-lg-12">
				<div class="card">
                <form id="myForm" method="GET" id="myForm" action="{{route('reports')}}" >
                    @csrf
                    <div class="form-row mt-2 ml-2">
                        <div class="form-group col-md-4 mt-2 ">
                            <label for="dob">From</label>
                            <input type="date" class="form-control singledatepicker" id="min" name="fdob" >
                        </div>
                        <div class="form-group col-md-4 mt-2 ">
                            <label for="dob">To</label>
                            <input type="date" class="form-control singledatepicker" id="max" name="ldob" >
                        </div>
                        <div class="form-group col-md-12 ">
                            <button type="submit" class="btn btn-primary btn-md" name="pro_btn">Search</button>
                            <a href="{{route('pro_report')}}" class="btn btn-success btn-md mr-2">Report</a>               
                        </div>
                    </div>
                </form>
				  <div class="card-header">
					<h3 class="card-title">Report</h3>
				  </div>
					<!-- /.card-header -->
					<div class="card-body">
            <table id="" class="table table-bordered table-striped">
						  <thead>
						  <tr>
                <th width="7%">Serial</th>
                <th>Name</th>
                <th>Category</th>
                <th>SKU</th>
                <th>Quantity</th>
                <th>Cost Price</th>
                <th>Date</th>
                <th>Profit</th>
						  </tr>
						  </thead>
						  <tbody>
							@foreach($products as $product)
								<tr>
									<td>{{$loop->iteration}}</td>
									<td>{{$product->product_name}}</td>
									<td>{{$product->cat_name}}</td>
									<td>{{$product->SKU}}</td>
									<td>{{$product->pro_quantity}}</td>
									<td>{{$product->cost}}</td>
									<td>{{$product->dob}}</td>
									<td>{{$product->profit}}</td>
								</tr>
							@endforeach
						  </tbody>
                          <tr>
                            <th colspan="6">
                                <div class="col-md-6"><span class="pl-5"><strong>Total Profit:</strong></span></div>
                            </th>
                            <th colspan="2">
                                <div class="col-md-6"><span class="pl-5 "><strong>{{$profit}}</strong></span></div>
                            </th>
                          </tr>
						</table>
					</div>
				</div>
			</div>
		</div>


@endsection