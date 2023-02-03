<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Bike Invoice</title>
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
img{
	float: right;
	height: 55px;
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
		<h3 align="center ">Bike Invoice</h3>
			<table class="container3">
				<td>
					<div class="l-height">
						Highway Fighters<br>
						215/318 HASINA MANSION,<br>
						CDA Avenue (Beside Chittagong Education Board) Muradpur, Chittagong<br>
						(800) 555-1234<br>
					</div>
				</td>
				<td><img src="<?php echo $pic ?>" /> </td>
			</table>
			<p></p>
			
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
				<td class="border">{{$bike->brand}}</td>
				<td class="border">{{$bike->bike_name}}</td>
				<td class="border">{{$bike->color}}</td>
				<td class="border">{{$bike->bsquantity}}</td>
				<td class="border">{{$bike->sale_price}}</td>
				<td class="border">{{$bike->total}}</td>
			</tr>
		</table>
		<h4 >Remarks: Warranty Card/ Tools set provided; <span style="color:red">Bike didn’t refundable.</span> </h4>
		<h4>Received with thanks the above mentioned vehicle is with perfect condition along with tools and accessories.</h4>
		<table class=" container1">
			<tr>
				<td>I am aware of warranty and service police, no complaints when buying bikes or scooters. Brought the right and problem-free bike or scooter from Highway Fighters.</td>
				<td>The rider is aware of the warranty and service police, he purchased the right and problem–free bike or scooter from Highway Fighters.</td>
			</tr>
		</table>
		<p></p>
		<table class="border2 container2">
			<tr>
				<td>Customer's Signature</td>
				<td>Highway Fighters</td>
			</tr>
		</table>

	</div>

</body>
</html>