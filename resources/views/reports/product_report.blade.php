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
	height: 70px;
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
		<h3 align="center">Sale Report</h3>
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
		<table class="border container1">
			<tr>
				<th class="border wd">SL.</th>
				<th class="border">Product Name</th>
				<th class="border">Category</th>
				<th class="border">SKU</th>
				<th class="border wd">Qty</th>
				<th class="border">Cost Price</th>
				<th class="border">Date</th>
				<th class="border">Profit</th>
			</tr>
			@foreach($products as $product)
			<tr>
				<td align="center" class="border wd">{{$loop->iteration}}</td>
				<td align="center" class="border">{{$product->product_name}}</td>
				<td align="center" class="border">{{$product->cat_name}}</td>
				<td align="center" class="border">{{$product->SKU}}</td>
				<td align="center" class="border wd">{{$product->pro_quantity}}</td>
				<td align="center" class="border wd">{{$product->cost}}</td>
				<td align="center" class="border">{{$product->dob}}</td>
				<td align="center" class="border">{{$product->profit}}</td>
			</tr>
			@endforeach
			<tr>
				<th colspan="7" class="border">Total Profit</th>
				<td align="center" class="border">{{$profit}}</td>
			</tr>
		</table>
	</div>

</body>
</html>
