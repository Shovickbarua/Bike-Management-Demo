<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Invoice</title>
<style>
			/* reset */

*

{
	border: 0;
	box-sizing: content-box;
	color: inherit;
	font-family: inherit;
	font-size: inherit;
	font-style: inherit;
	font-weight: inherit;
	line-height: inherit;
	list-style: none;
	margin: 0;
	padding: 0;
	text-decoration: none;
	vertical-align: top;
}

body{
	page-break-inside: avoid !important;
    white-space: nowrap;
    overflow: hidden;
    margin: 4px 0 4px 0;
}

/* content editable */

*[contenteditable] { border-radius: 0.25em; min-width: 1em; outline: 0; }

span[contenteditable] { display: block; }

address{
	content: center;
}

img{
	height: 82px;
}
.top{
	margin-top: -62px;
	margin-bottom: 12px;
}

.float-container {
	margin-top: 20px;
	display: flex;
}

.float-child {
    width: 50%;
}
/* heading */

h1 { font: bold 100% sans-serif; letter-spacing: 0.5em; text-align: center; text-transform: uppercase; }

/* table */

table { font-size: 75%; table-layout: fixed; width: 100%; }
table { border-collapse: separate; border-spacing: 2px; }
th, td { border-width: 1px; padding: 0.5em; position: relative; text-align: left; }
th, td { border-radius: 0.25em; border-style: solid; }
th { background: #EEE; border-color: #BBB; }
td { border-color: #DDD; }

/* page */

html { font: 16px/1 'Open Sans', sans-serif; overflow: auto; padding: 0.5in; }
html { background: #999; cursor: default; }

body { box-sizing: border-box; height: 11in; margin: 0 auto; overflow: hidden; padding: 0.5in; width: 8.5in; }
body { background: #FFF; border-radius: 1px; box-shadow: 0 0 1in -0.25in rgba(0, 0, 0, 0.5); }

/* header */

header { margin: 0 0 3em; }
header:after { clear: both; content: ""; display: table; }

header h1 { background: #000; border-radius: 0.25em; color: #FFF; margin: 0 0 1em; padding: 0.5em 0; }
header address { float: left; font-size: 75%; font-style: normal; line-height: 1.25; margin: 0 1em 1em 0; }
header address p { margin: 0 0 0.25em; }
header span, header img { display: block; float: right; }
header span { max-height: 25%; max-width: 60%; position: relative; }
header img { max-height: 100%; max-width: 100%; }
header input { cursor: pointer; -ms-filter:"progid:DXImageTransform.Microsoft.Alpha(Opacity=0)"; height: 100%; left: 0; opacity: 0; position: absolute; top: 0; width: 100%; }

/* article */

article, article address, table.meta, table.inventory, table.meta2 { margin: 0 0 3em; }
article:after { clear: both; content: ""; display: table; }
article h1 { clip: rect(0 0 0 0); position: absolute; }

article address { float: left; font-size: 125%; font-weight: bold; }

/* table meta & balance */

table.meta { float: left; width: 50%; }
table.meta2 { float: left; width: 100%;margin-top: -42px;}
table.balance { float: right; width: 33%; }
table.meta:after, table.meta2:after, table.balance:after { clear: both; content: ""; display: table; }

/* Space */
.st{
	font: 15px/1 'Open Sans', sans-serif;
}
.stt{
	font: 17px/1 'Open Sans', sans-serif;
	text-align: center;
	margin-top: 82px;
}

.green{
	padding-right: 25px;
    text-align: justify;
}


/* table meta */

table.meta th { width: 30%; }
table.meta td { width: 30%; }

table.meta2 th { width: 16%; }
table.meta2 td { width: 52%; }


/* table items */

table.inventory { clear: both; width: 100%; }
table.inventory th { font-weight: bold; text-align: center; }

table.inventory td:nth-child(1) { width: 26%; }
table.inventory td:nth-child(2) { width: 38%; }
table.inventory td:nth-child(3) { text-align: right; width: 12%; }
table.inventory td:nth-child(4) { text-align: right; width: 12%; }
table.inventory td:nth-child(5) { text-align: right; width: 12%; }

/* table balance */

table.balance th, table.balance td { width: 50%; }
table.balance td { text-align: right; }

/* aside */

aside h1 { border: none; border-width: 0 0 1px; margin: 0 0 1em; }
aside h1 { border-color: #999; border-bottom-style: solid; }

/* javascript */


@media print {
	* { -webkit-print-color-adjust: exact; }
	html { background: none; padding: 0; }
	body { box-shadow: none; margin: 0; }
	span:empty { display: none; }
	.add, .cut { display: none; }
}

@page { size: auto; size: A4 portrait;  }

</style>

	</head>
	<body>
		<header>
			<h1>Invoice</h1>
			<address contenteditable >
				<p>Highway Fighters</p>
				<p>101 E. Chapman Ave<br>Orange, CA 92866</p>
				<p>(800) 555-1234</p>
			</address>
			<span><img src="<?php echo $pic ?>" /></span> 
		</header>
		<article>
            <table class="meta">
				<tr>
					<th><span contenteditable>Name</span></th>
					<td><span contenteditable>{{$bike->client_name}}</span></td>
				</tr>
				<tr>
					<th><span contenteditable>Fathers Name</span></th>
					<td><span contenteditable>{{$bike->fName}}</span></td>
				</tr>
				<tr>
					<th><span contenteditable>Cell</span></th>
					<td><span contenteditable>{{$bike->contact}}</span></td>
				</tr>
			</table> 
            <table class="meta">
				<tr>
					<th><span contenteditable>Invoice #</span></th>
					<td><span contenteditable>{{$bike->invoiceID}}</span></td>
				</tr>
				<tr>
					<th><span contenteditable>Date</span></th>
					<td><span contenteditable>{{$bike->dob}}</span></td>
				</tr>
				<tr>
					<th><span contenteditable>NID No</span></th>
					<td><span contenteditable>{{$bike->nid}}</span></td>
				</tr>
			</table>
            <table class="meta2">
				<tr>
					<th><span contenteditable>Address</span></th>
					<td><span contenteditable>{{$bike->address}}</span></td>
				</tr>
			</table>
            <table class="meta">
				<tr>
					<th><span contenteditable>Chasis No</span></th>
					<td><span contenteditable>{{$bike->chas_no}}</span></td>
				</tr>
				<tr>
					<th><span contenteditable>Engine No</span></th>
					<td><span contenteditable>{{$bike->veh_no}}</span></td>
				</tr>
				<tr>
					<th><span contenteditable>Model of Vehicle</span></th>
					<td><span contenteditable>{{$bike->bike_name}}</span></td>
				</tr>
                <tr>
					<th><span contenteditable>Year of Manufacture</span></th>
					<td><span contenteditable>{{$bike->manu}}</span></td>
				</tr>
                <tr>
					<th><span contenteditable>No of Cylinder With CC</span></th>
					<td><span contenteditable>{{$bike->cc}}</span></td>
				</tr>
			</table>
            <table class="meta">
				<tr>
					<th><span contenteditable>Seating Capacity</span></th>
					<td><span contenteditable>{{$bike->seat_cap}}</span></td>
				</tr>
				<tr>
					<th><span contenteditable>Brake</span></th>
					<td><span contenteditable>{{$bike->brake}}</span></td>
				</tr>
                <tr>
					<th><span contenteditable>Tyre Size</span></th>
					<td><span contenteditable>{{$bike->tyre}}</span></td>
				</tr>
                <tr>
					<th><span contenteditable>Color</span></th>
					<td><span contenteditable>{{$bike->color}}</span></td>
				</tr>
                <tr>
					<th><span contenteditable>Weight</span></th>
					<td><span contenteditable>{{$bike->weight}}</span></td>
				</tr>
			</table>
			<table class="inventory">
				<thead>
					<tr>
						<th><span contenteditable>Brand</span></th>
						<th><span contenteditable>Model No</span></th>
						<th><span contenteditable>Color</span></th>
						<th><span contenteditable>Quantity</span></th>
						<th><span contenteditable>Unit Price</span></th>
						<th><span contenteditable>Amount</span></th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td><span contenteditable>{{$bike->brand}}</span></td>
						<td><span contenteditable>{{$bike->bike_name}}</span></td>
						<td><span contenteditable>{{$bike->color}}</span></td>
						<td><span contenteditable>{{$bike->bsquantity}}</span></td>
						<td><span>{{$bike->sale_price}}</span></td>
						<td><span >{{$bike->total}}</span></td>
					</tr>
				</tbody>
			</table>
		</article>
		<aside>
			<div class="st" contenteditable >
				<p class="top">Remarks: Warranty Card/ Tools set provided; Sold Bike didn’t refundable.</p>
				<p>Received with thanks the above mentioned vehicle is with perfect condition along with tools and accessories.</p>
			</div>
            <div class="float-container st">
                <div class="float-child">
                  <div class="green">I am aware of warranty and service police, no complaints when buying bikes or scooters. Brought the right and problem-free bike or scooter from Highway Fighters.</div>
                </div>
                <div class="float-child">
                  <div class="green">The rider is aware of the warranty and service police, he purchased the right and problem–free bike or scooter from Highway Fighters.</div>
                </div>
            </div>
			<div class="float-container stt">
                <div class="float-child">
                  <div class="">Customer's Signature</div>
                </div>
                <div class="float-child">
                  <div class="">Highway Fighters</div>
                </div>
            </div>
		</aside>
	</body>
</html>