@extends('layout.master')

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
                <th>Quantity</th>
                <th>Cost Price</th>
                <th>Sale Price</th>
                <th>Date</th>
                <th>Image</th>
                <th width="">Action</th>
                <th width=""></th>
						  </tr>
						  </thead>
						  <tbody>
							@foreach($products as $product)
								<tr>
									<td>{{$loop->iteration}}</td>
									<td>{{$product->product_name}}</td>
									<td>{{$product->cat_name}}</td>
									<td>{{$product->quantity}}</td>
									<td>{{$product->cost}}</td>
									<td>{{$product->sale}}</td>
									<td>{{$product->dob}}</td>
									<td><img src="{{Storage::url('app/products/'. $product->image)}} " style="height:150px;"/></td>
									<td>
									<div class="d-flex">
										<a href="{{route('product.show', $product->id)}}" class="btn btn-danger btn-xs"><i class="fa fa-file-pdf"></i></a>
										<a href="{{route('product.edit', $product->id)}}" class="btn shadow btn-xs sharp me-1"><i class="fas fa-pencil-alt"></i></a>

										<form action="{{route('product.destroy',$product->id)}}" method="POST">
										@method('DELETE')    
										@csrf
										<button type="submit" class="btn btn-danger shadow btn-xs sharp"><i class="fa fa-trash"></i></button>
										</form>
									</div>
									</td>
									<td><a href="{{route('add_sale', $product->product_name)}}" class="btn btn-primary btn-md">Add Sale</a></td>
								</tr>
							@endforeach
						  </tbody>
						</table>
					</div>	 
				</div>
			</div>
		</div>


@endsection