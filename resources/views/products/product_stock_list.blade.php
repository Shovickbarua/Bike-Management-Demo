@extends('layout.master')
@section('title', 'Product')
@section('content')

<div class="row">
			<div class="col-lg-12">
				<div class="card">
				  <div class="card-header">
					<h3 class="card-title">All Product</h3>
					<a href="{{route('product.create')}}" class="btn btn-success float-right btn-sm"><i class="fa fa-plus-circle"></i>Add Product</a>
				  </div>
					<!-- /.card-header -->
					<div class="card-body">
          <table id="example1" class="table table-bordered table-striped">
						  <thead>
						  <tr>
                <th width="7%">Serial</th>
                <th>Name</th>
                <th>Category</th>
                <th>SKU</th>
                <th>Quantity</th>
						  </tr>
						  </thead>
						  <tbody>
							@foreach($products as $product)
								<tr>
									<td>{{$loop->iteration}}</td>
									<td>{{$product->product_name}}</td>
									<td>{{$product->cat_name}}</td>
									<td>{{$product->SKU}}</td>
									<td>{{$product->quantity}}</td>
								</tr>
							@endforeach
						  </tbody>
						</table>
					</div>	 
				</div>
			</div>
		</div>


@endsection