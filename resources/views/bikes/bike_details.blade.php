<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Bike Details</title>
<style>
.wrapper{
	width:724px;
	height:840px;
	margin:0px auto;
}
.head{
	height: 40px;

}
.container{
	width:720px;
	height:70px;
}
.th-width{
	width:141px;
}
.l-height{
	line-height: 140%;
}
.container1{
	width: 720px;
    height: 115px;
    margin-top: 8px;
}
.container2{
	width: 720px;
    height: 170px;
}
.container3{
	width: 720px;
}
.wd{
	width:52px;
}
.border{
	border:1px solid black;
	border-collapse:collapse;

}
.border1{
	border-collapse:collapse;
	margin: auto;
}
.border2{
	text-align: center;
}

</style>
</head>
<body>
	<div class="wrapper">
			
		<table class="head" >
			<th>Invoice:</th>
			<td style="width: 510px;">{{$bike->invoiceId}}</td>
			<th>Date:</th>
			<td>{{$bike->dob}}</td>
		</table>
		<table class="border container">
			<tr>
				<th class="border th-width">Name</th>
				<td class="border">{{$bike->client_name}}</td>
				<th class="border th-width">Cell</th>
				<td class="border">{{$bike->contact}}</td>
			</tr>
			<tr>
				<th class="border th-width">Father's Name</th>
				<td class="border">{{$bike->fName}}</td>
				<th class="border th-width">NID No</th>
				<td class="border">{{$bike->nid}}</td>
			</tr>
			<tr>
				<th class="border th-width">Address</th>
				<td colspan="3" class="border">{{$bike->address}}</td>
			</tr>
			<tr>
				<th class="border th-width">Chasis No</th>
				<td class="border">{{$bike->chas_no}}</td>
				<th class="border th-width">Engine No</th>
				<td class="border">{{$bike->veh_no}}</td>
			</tr>
			<tr>
				<th class="border th-width">Model of Vehicle</th>
				<td class="border">{{$bike->bike_name}}</td>
				<th class="border th-width">Year of Manufacture</th>
				<td class="border">{{$bike->manu}}</td>
			</tr>
			<tr>
				<th class="border th-width">No of Cylinder With CC</th>
				<td class="border">{{$bike->cc}}</td>
				<th class="border th-width">Seating Capacity</th>
				<td class="border">{{$bike->seat_cap}}</td>
			</tr>
			<tr>
				<th class="border th-width">Brake</th>
				<td class="border">{{$bike->brake}}</td>
				<th class="border th-width">Tyre Size</th>
				<td class="border">{{$bike->tyre}}</td>
			</tr>
			<tr>
				<th class="border th-width">Color</th>
				<td class="border">{{$bike->color}}</td>
				<th class="border th-width">Weight</th>
				<td class="border">{{$bike->weight}}</td>
			</tr>
		</table>
		<table class="border container1">
			<tr>
				<th class="border">Brand</th>
				<th class="border">Model No</th>
				<th class="border">Color</th>
				<th class="border">Qty</th>
				<th class="border">Unit Price</th>
				<th class="border">Amount</th>
			</tr>
			<tr>
				<td class="border border2">{{$bike->brand}}</td>
				<td class="border border2">{{$bike->bike_name}}</td>
				<td class="border border2">{{$bike->color}}</td>
				<td class="border border2">{{$bike->bsquantity}}</td>
				<td class="border border2">{{$bike->sale_price}}</td>
				<td class="border border2">{{$bike->total}}</td>
			</tr>
			<tr>
				<th colspan="2" class="border">Bike Price</th>
				<th colspan="2" class="border">Registration</th>
				<th colspan="2" class="border">Total</th>
			</tr>
			<tr>
				<td colspan="2" class="border border2">{{$bike->sale_price}}</td>
				<td colspan="2" class="border border2">{{$bike->registration}}</td>
				<td colspan="2" class="border border2">{{$bike->sale_price + $bike->registration}}</td>
			</tr>
		</table>
		<table class=" ">
			<tr>
				<th>Bank Copy</th>
				<th>Registration Slip</th>
				<th>Tax Token</th>
				<th>Customer Photo</th>
			</tr>
			<tr>
				<td><img src="{{asset('/products/'.$bike->b_copy)}}" style="height:150px; width:150px;"/></td>
				<td><img src="{{asset('/products/'.$bike->r_slip)}}" style="height:150px; width:150px;"/></td>
				<td><img src="{{asset('/products/'.$bike->t_token)}}" style="height:150px; width:150px;"/></td>
				<td><img src="{{asset('/products/'.$bike->cus_photo)}}" style="height:150px; width:150px;"/></td>
			</tr>
		</table>

	</div>

</body>
</html>