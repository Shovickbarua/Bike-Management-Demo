@extends('layout.master')

@section('content')

      <div class="row">
        <div class="col-lg-6">
            <div class="card">
              <div class="card-body">
                <h5 class="card-title mb-2">Latest Product Sale</h5>

                <table id="" class="table table-bordered table-striped">
                  <thead>
                    <tr>
                      <th>Product Name</th>
                      <th>Quantity</th>
                      <th>Date</th>
                      <th>Total</th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach($sales as $sale)
                    <tr>
                      <td>{{$sale->product_name}}</td>
                      <td>{{$sale->pro_quantity}}</td>
                      <td>{{$sale->dob}}</td>
                      <td>{{$sale->total}}</td>
                    </tr>
                  @endforeach
                  </tbody>
						</table>
              </div>
            </div>

            <div class="card card-primary card-outline">
              <div class="card-body">
                <h5 class="card-title mb-2">Latest Bike Sales</h5>

                <table id="" class="table table-bordered table-striped">
                  <thead>
                    <tr>
                      <th>Bike Name</th>
                      <th>Quantity</th>
                      <th>Date</th>
                      <th>Total</th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach($bikesales as $bsale)
                    <tr>
                      <td>{{$bsale->bike_name}}</td>
                      <td>{{$bsale->bsquantity}}</td>
                      <td>{{$bsale->dob}}</td>
                      <td>{{$bsale->total}}</td>
                    </tr>
                  @endforeach
                  </tbody>
						</table>
              </div>
            </div><!-- /.card -->
          </div>
          <!-- /.col-md-6 -->
          <div class="col-lg-6">
            <div class="card">
              <div class="card-header">
                <h5 class="m-0">Featured</h5>
              </div>
              <div class="card-body">
                <h6 class="card-title">Special title treatment</h6>

                <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                <a href="#" class="btn btn-primary">Go somewhere</a>
              </div>
            </div>

            <div class="card card-primary card-outline">
              <div class="card-header">
                <h5 class="m-0">Featured</h5>
              </div>
              <div class="card-body">
                <h6 class="card-title">Special title treatment</h6>

                <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                <a href="#" class="btn btn-primary">Go somewhere</a>
              </div>
            </div>
          </div>
          <!-- /.col-md-6 -->
      </div>
         
       


@endsection