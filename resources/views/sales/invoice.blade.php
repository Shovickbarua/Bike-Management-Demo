<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Invoice</title>
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
	padding-left: 6px;

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
		<h3 align="center">Sale Invoice</h3>
			<table class="container3">
				<td>
					<div class="l-height">
						Highway Fighters<br>
						215/318 HASINA MANSION,<br>
						CDA Avenue (Beside Chittagong Education Board) Muradpur, Chittagong<br>
						+88 01614 62 69 42,
						+88 01918 397 597<br>
					</div>
				</td>
				<td><img src="<?php echo $pic ?>" /> </td>
			</table>
			<p></p>
		<table class="head" >
			<th>Invoice:</th>
			<td style="width: 510px;">{{$product->invoiceId}}</td>
			<th>Date:</th>
			<td>{{$product->dob}}</td>
		</table>
		<table class="border container">
			<tr>
				<th class="border th-width" style="text-align:left;">Name</th>
				<td class="border">{{$product->cus_name}}</td>
				<th class="border th-width" style="text-align:left;">Cell</th>
				<td class="border">{{$product->contact}}</td>
			</tr>
			<tr>
				<th class="border" style="text-align:left;">Address</th>
				<td colspan="3" class="border">{{$product->address}}</td>
			</tr>
		</table>
		<table class="border container1">
			<tr>
				<th class="border wd">SL.</th>
				<th class="border">Product Name</th>
				<th class="border">Category</th>
				<th class="border wd">Qty</th>
				<th class="border">Unit Price</th>
				<th class="border">Amount</th>
			</tr>
			@foreach($products as $product)
			<tr>
				<td align="center" class="border wd">{{$loop->iteration}}</td>
				<td align="center" class="border">{{$product->product_name}}</td>
				<td align="center" class="border">{{$product->cat_name}}</td>
				<td align="center" class="border wd">{{$product->pro_quantity}}</td>
				<td align="center" class="border">{{$product->sale}}</td>
				<td align="center" class="border">{{$product->total}}</td>
			</tr>
			@endforeach
			<tr>
				<th colspan="5" class="border">Total</th>
				<td align="center" class="border">{{$products->sum('total')}}</td>
			</tr>
		</table>
		<p></p>
		<p></p>
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