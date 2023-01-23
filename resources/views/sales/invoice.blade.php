<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<div class="container mt-5">
        <h2 class="text-center mb-3">Laravel HTML to PDF Example</h2>
       

        <table >
            <thead>
                <tr class="table-danger table-bordered">
                    <th scope="col">Invoice No</th>
                    <th scope="col">Client Name</th>
                    <th scope="col">Date</th>
                    <th scope="col">Contact</th>
                    
                </tr>
            </thead>
            <tbody>
           
                <tr>
                    <td>{{$product->invoiceId}}</td>
                    <td>{{$product->cus_name}}</td>
                    <td>{{$product->dob}}</td>
                    <td>{{$product->contact}}</td>
                    
                </tr>
                <tr>
                   
                    <th>Product Name</th>
                    <th>Quantity</th>
                    <th>Amount</th>
                </tr>
                <tr>
                  @foreach($products as $product)
                    <td>{{$product->product_name}}</td>
                    <td>{{$product->pro_quantity}}</td>
                    <td>{{$product->total}}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
         <div class="form-row pb-3 mt-2">
				<div class="col-md-6"><span class="pl-5"><strong>Total:</strong></span></div>
				<div class="col-md-6"><span class="pl-5 "><strong>{{$products->sum('total')}}</strong></span></div>
		 </div>
				  
    </div>
    
</body>
</html>

