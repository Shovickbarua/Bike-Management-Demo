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
                    <th scope="col">Name</th>
                    <th scope="col">Catgory</th>
                    <th scope="col">Quantity</th>
                    <th scope="col">Cost Price</th>
                    <th scope="col">Sale Price</th>
                </tr>
            </thead>
            <tbody>
           
                <tr>
                    <td>{{$products->product_name}}</td>
                    <td>{{$products->cat_name}}</td>
                    <td>{{$products->quantity}}</td>
                    <td>{{$products->cost}}</td>
                    <td>{{$products->sale}}</td>
                    
                </tr>
                <tr>
                    <th>Image</th>
                    <th>Date</th>
                </tr>
                <tr>
                    <td><td><img src="{{Storage::url('app/products/'. $products->image)}} " style="height:150px;"/></td></td>
                    <td>{{$products->dob}}</td>
                </tr>
		
            </tbody>
        </table>
        <a href="{{route('pdf',$products->product_name)}}" class="btn btn-success float-right btn-sm">Download</a>
				  
    </div>
    
</body>
</html>

