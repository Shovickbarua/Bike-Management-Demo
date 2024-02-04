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
		<h3 align="center">Expense Report</h3>
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
				<th class="border">Name</th>
				<th class="border">Date</th>
				<th class="border">Amount</th>
			</tr>
			@foreach($incomes as $income)
			<tr>
				<td align="center" class="border wd">{{$loop->iteration}}</td>
				<td align="center" class="border">{{$income->in_name}}</td>
				<td align="center" class="border">{{$income->dob}}</td>
				<td align="center" class="border">{{$income->amount}}</td>
			</tr>
			@endforeach
			<tr>
				<th colspan="3" class="border">Total Amount</th>
				<td align="center" class="border">{{$in}}</td>
			</tr>
		</table>
	</div>

</body>
</html>