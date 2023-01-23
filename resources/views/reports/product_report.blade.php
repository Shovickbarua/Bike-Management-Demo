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
                <tr>
                    <th colspan="6">
                        Total Profit:
                    </th>
                    <th colspan="2">
                        {{$profit}}
                    </th>
                    </tr>
            </tbody>
        </table>			  
    </div>
    
</body>
</html>

