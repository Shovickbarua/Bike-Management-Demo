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
                    <th scope="col">Address</th>
                    
                </tr>
            </thead>
            <tbody>
           
                <tr>
                    <td>{{$bike->invoiceId}}</td>
                    <td>{{$bike->client_name}}</td>
                    <td>{{$bike->dob}}</td>
                    <td>{{$bike->contact}}</td>
                    <td>{{$bike->address}}</td>
                    
                </tr>
                <tr>
                   
                    <th>Bike Name</th>
                    <th>Quantity</th>
                    <th>Sale Price</th>
                    <th>Amount</th>
                </tr>
                <tr>
                    <td>{{$bike->bikename}}</td>
                    <td>{{$bike->bsquantity}}</td>
                    <td>{{$bike->sale_price}}</td>
                    <td>{{$bike->total}}</td>
                </tr>
            </tbody>
        </table>			  
    </div>
    
</body>
</html>

