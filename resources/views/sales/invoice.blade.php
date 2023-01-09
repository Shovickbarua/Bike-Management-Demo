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
                    <th scope="col">Product Name</th>
                    <th scope="col">Client Name</th>
                    <th scope="col">Quantity</th>
                    <th scope="col">Contact</th>
                    
                </tr>
            </thead>
            <tbody>
           
                <tr>
                    <td>{{$products->invoiceId}}</td>
                    <td>{{$products->product_name}}</td>
                    <td>{{$products->cus_name}}</td>
                    <td>{{$products->pro_quantity}}</td>
                    <td>{{$products->contact}}</td>
                    
                </tr>
                <tr>
                   
                    <th>Date</th>
                    <th>Total</th>
                </tr>
                <tr>
                  
                    <td>{{$products->dob}}</td>
                    <td>{{$products->total}}</td>
                </tr>
		
            </tbody>
        </table>
				  
    </div>
    
</body>
</html>

