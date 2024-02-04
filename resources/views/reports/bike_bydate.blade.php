@extends('layout.master')
@section('title', 'Report')
@section('content')

<div class="row">
			<div class="col-lg-12">
				<div class="card">
                <form id="myForm" method="GET" id="myForm" action="{{route('bike_reports')}}" >
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
                            <a href="{{route('bike_report')}}" class="btn btn-success btn-md mr-2">Report</a>               
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
                <th>Brand</th>
                <th>Model No</th>
                <th>Quantity</th>
                <th>Date</th>
                <th>Profit</th>
						  </tr>
						  </thead>
						  <tbody>
							@foreach($bikes as $bike)
								<tr>
									<td>{{$loop->iteration}}</td>
									<td>{{$bike->brand}}</td>
									<td>{{$bike->bike_name}}</td>
									<td>{{$bike->bsquantity}}</td>
									<td>{{$bike->dob}}</td>
									<td>{{$bike->profit}}</td>
								</tr>
							@endforeach
						  </tbody>
                          <tr>
                            <th colspan="5">
                                <div class="col-md-6"><span class="pl-5"><strong>Total Profit:</strong></span></div>
                            </th>
                            <th colspan="">
                                <div class="col-md-6"><span class="pl-5 "><strong>{{$profit}}</strong></span></div>
                            </th>
                          </tr>
						</table>
					</div>
				</div>
			</div>
		</div>


@endsection