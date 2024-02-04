<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <!-- jdPDF cdn link -->
    <script src="https://unpkg.com/jspdf@latest/dist/jspdf.umd.min.js"></script>
    <!-- html2canvas cdn links for pdf -->
    <script
      src="https://cdnjs.cloudflare.com/ajax/libs/html2canvas/1.4.1/html2canvas.min.js"
      integrity="sha512-BNaRQnYJYiPSqHHDb58B0yaPfCu+Wgds8Gp/gU33kqBtgNS4tSPHuGibyoeqMV/TJlSKda6FXzoEyYGjTe+vXA=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    ></script>
    <script
      src="https://cdnjs.cloudflare.com/ajax/libs/html2canvas/1.4.1/html2canvas.js"
      integrity="sha512-sn/GHTj+FCxK5wam7k9w4gPPm6zss4Zwl/X9wgrvGMFbnedR8lTUSLdsolDRBRzsX6N+YgG6OWyvn9qaFVXH9w=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    ></script>
    <style>
      @import url("https://fonts.googleapis.com/css2?family=Crimson+Text:ital,wght@0,400;0,600;0,700;1,400;1,600;1,700&family=Hind+Siliguri:wght@300;400;500;600;700&display=swap");

/* font-family: 'Hind Siliguri', sans-serif; */

* {
  margin: 0;
  padding: 0;
  box-sizing: border-box;
}

body {
  background-color: #f1f1f1;
  font-family: "Crimson Text", serif;
}

span {
  font-family: "Hind Siliguri", sans-serif;
}

.main_container {
  width: 100%;
  min-height: 100vh;
  padding: 20px 10%;
}

.sub_container {
  width: 100%;
  height: 100%;
  max-width: 3508px;
  max-height: 2480px;
  background-color: #fff;
  padding: 48px;
}

@media screen and (max-width: 768px) {
  .sub_container {
    padding: 10px;
    max-height: 5000px;
  }
}

.main_title {
  text-align: center;
  margin-bottom: 20px;
}

.date_container {
  display: flex;
  justify-content: space-between;
  align-items: center;
  padding: 7px 0px;
}

table,
th,
td {
  border: 1px solid gray;
}

table {
  border-collapse: collapse;
}

table td,
table th {
  padding: 5px;
  font-size: 16px;
  color: #36454f;
  font-weight: 600;
}

.table_container table {
  width: 100%;
}

@media screen and (max-width: 768px) {
  .table_container {
    overflow: scroll;
  }
}

.terms_container {
  padding: 10px 0px;
}

.terms_container ul {
  margin: 10px 0px;
}

.terms_container ul li {
  font-size: 16px;
  margin-left: 15px;
}

.terms_container h4,
.terms_container h2 {
  text-align: center;
}

.speech_container {
  display: flex;
  justify-content: space-between;
  gap: 20px;
  align-items: flex-start;
  margin-top: 25px;
}

@media screen and (max-width: 768px) {
  .speech_container {
    flex-direction: column;
    align-items: center;
  }
}

.speech_container p {
  text-align: justify;
  width: 50%;
  font-size: 16px;
}

.signature_container {
  display: flex;
  justify-content: space-between;
  align-items: center;
  margin-top: 70px;
}

@media screen and (max-width: 768px) {
  .signature_container {
    flex-direction: column;
    gap: 100px;
  }
}

.signature_sub_container {
  width: 50%;
}

.signature_sub_container div {
  width: fit-content;
  margin: 0px auto;
  text-align: center;
}

.doc_download {
  background-color: green;
  padding: 7px 14px;
  border-radius: 5px;
  color: white;
  margin-top: 30px;
  outline: none;
  border: none;
  cursor: pointer;
}
img{
    width: 340px;
}
    </style>
  </head>
  <body>
    <!-- main container -->
    <section class="main_container">
      <!-- inner container -->
      <div id="salesDoc" class="sub_container">
        <h1 class="main_title">SALE INVOICE</h1>
        <!-- date container -->
        <div class="date_container">
          <h4>Highway Fighters<br>
						215/318 HASINA MANSION,<br>
						CDA Avenue (Beside Chittagong Education Board) Muradpur, Chittagong<br>
						+88 01614 62 69 42,
						+88 01918 397 597<br></h4>
          <h4><img src="{{asset('/')}}dist/img/Capture.png" /></h4>
        </div>
        <div class="date_container">
          <h4>{{$bike->invoiceId}}</h4>
          <h4>{{$bike->dob}}</h4>
        </div>
        <!-- table container -->
        <div class="table_container">
          <!-- first table -->
          <table>
            <tr>
              <td style="width: 200px">Name:</td>
              <td style="min-width: 300px">{{$bike->client_name}}</td>
              <td style="width: 200px">Cell:</td>
              <td style="min-width: 300px">{{$bike->contact}}</td>
            </tr>
            <tr>
              <td>Father name:</td>
              <td>{{$bike->fName}}</td>
              <td>NID No:</td>
              <td>{{$bike->nid}}</td>
            </tr>
            <tr>
              <td>Address:</td>
              <td colspan="3">{{$bike->address}}</td>
            </tr>
            <tr>
              <td>1. Chassis No:</td>
              <td>{{$bike->chas_no}}</td>
              <td>2. Engine No:</td>
              <td>{{$bike->engine_no}}</td>
            </tr>
            <tr>
              <td>3. Model of Vehicle:</td>
              <td>{{$bike->bike_name}}</td>
              <td>4. Make of Vehicle:</td>
              <td>{{$bike->m_veh}}</td>
            </tr>
            <tr>
              <td>5. Year of Manufacture:</td>
              <td>{{$bike->manu}}</td>
              <td>6. Cylinder with CC:</td>
              <td>{{$bike->cc}}</td>
            </tr>
            <tr>
              <td>7. Seating Capacity:</td>
              <td>{{$bike->seat_cap}}</td>
              <td>8. Brake:</td>
              <td>{{$bike->brake}}</td>
            </tr>
            <tr>
              <td rowspan="2">9. Tyre size:</td>
              <td>{{$bike->ftyre}}</td>
              <td>10. Color of Vehicle:</td>
              <td>{{$bike->color}}</td>
            </tr>
            <tr>
              <td>{{$bike->rtyre}}</td>
              <td>11. Weight:</td>
              <td>{{$bike->weight}}</td>
            </tr>
          </table>
          <!-- second table -->
          <table style="margin-top: 20px">
            <tr>
              <th>Brand</th>
              <th>Model No</th>
              <th>Color</th>
              <th>Quantity</th>
              <th>Unit price</th>
              <th>Registration</th>
              <th>Total Amount</th>
            </tr>
            <tr>
              <td align="center">{{$bike->brand}}</td>
              <td align="center">{{$bike->bike_name}}</td>
              <td align="center">{{$bike->color}}</td>
              <td align="center">{{$bike->bsquantity}}</td>
              <td align="center">{{$bike->sale_price}}</td>
              <td align="center">{{$bike->registration}}</td>
              <td align="center">{{$bike->total}}</td>
            </tr>
          </table>
        </div>
        <!-- terms container -->
        <div class="terms_container">
          <h4>TERMS AND CONDITIONS <span>(মন্তব্য ও শর্তসমূহ)</span></h4>
          <ul>
            <li style="color: red;">
              Bike or Scooter Sold and Pre-booked are non-refundable.
              <span
                >(বিক্রিত এবং প্রি-বুকিং করা বাইক বা স্কুটার ফেরতযোগ্য নয়
                ।)</span
              >
            </li>
            <li>
              Warranty card/tool ​​set provided by Highway Fighters at time of
              purchase; It is received by the buyer.
              <span
                >(ক্রয়ের সময় ওয়্যারেন্টি কার্ড/ টুল সেট হাইওয়ে ফাইটার্স সরবরাহ
                করেছে; তা ক্রেতা গ্রহণ করেছে ।)</span
              >
            </li>
            <li>
              Apply for BRTA registration must be made within 1 month from the
              date of purchase. If the buyer does not accept BRTA registration
              within that period. Highway Fighters is not obliged to issue the
              import document and BRTA files the buyer.
              <span
                >(ক্রয়ের তারিখ থেকে ১ মাসের মধ্যে বি.আর.টি.এ রেজিষ্ট্রেশন জন্য
                আবেদন অবশ্যই করতে হবে । যদি উক্ত সময়ের মধ্যে ক্রেতা বি.আর.টি.এ
                নিবন্ধন গ্রহণ না করলে, হাইওয়ে ফাইটার্স ক্রেতাকে আমদানি নথি এবং
                বি.আর.টি.এ ফাইল ইস্যু করতে বাধ্য নয় ।)</span
              >
            </li>
            <li>
              If the buyer wants to receive the complete file of BRTA, you have
              to pay the specified fee.
              <span
                >(ক্রেতা যদি বি.আর.টি.এ. সম্পূর্ণ ফাইল গ্রহণ করতে চাই সেক্ষেত্রে
                নির্দিষ্ট ফি প্রদান করতে হবে ।)</span
              >
            </li>
            <li>
              Two copies of this sale invoice have been executed. One copy shall
              be retained by the buyer and the other by the company.
              <span
                >(এই সেল ইনভয়েসটি দুইকপি সম্পাদন করা হয়েছে । একটি কপি ক্রেতা এবং
                অন্যটি কোম্পানির কাছে থাকবে ।)</span
              >
            </li>
          </ul>
          <h4>
            Received with thanks the above mentioned vehicle is with perfect
            condition along with tools and accessories.
          </h4>
          <h2>
            <span>
              (উপরে উল্লিখিত গাড়িটি এবং সরঞ্জাম আনুষাঙ্গিক সহ সঠিক অবস্থায় রয়েছে
              তা গ্রহণ করার জন্য ধন্যবাদ ।)
            </span>
          </h2>
        </div>
        <!-- seller speech container -->
        <div class="speech_container">
          <p>
            I am aware of warranty and service policy, no complaints when buying
            bike or scooter. I purchased a correct and fault free bike or
            scooter from Highway Fighters. I have no objection at the time of
            purchase. As there was no defect in the bike or scooter at the time
            of purchase, Highway Fighters shall not be liable for any defect
            thereafter.
            <span
              >(আমি ওয়ারেন্টি এবং সার্ভিস পলিসি সম্পর্কে সচেতন, বাইক বা স্কুটার
              ক্রয়ের সময় কোন অভিযোগ নেই । আমি হাইওয়ে ফাইটার্স থেকে একটি সঠিক এবং
              ত্রুটিমুক্ত বাইক বা স্কুটার ক্রয় করেছি । ক্রয়ের করার সময় আমার কোন
              আপত্তি নাই । যেহেতু কেনার সময় বাইক বা স্কুটারের কোন প্রকার ত্রুটি
              ছিল না, তাই হাইওয়ে ফাইটার্স পরবর্তীতে কোন ত্রুটির জন্য দায়ী থাকবে
              না ।)</span
            >
          </p>
          <p>
            I explained the warranty and service policy to the rider or buyer.
            We sold him a correct and fault free bike or scooter. He has no
            objection at the time of purchase. Buyer shall not hold Highway
            Fighters liable for any defects subsequent to sale.
            <span
              >(আমি রাইডার বা ক্রেতাকে ওয়ারেন্টি এবং সার্ভিস পলিসি সম্পর্কে
              বুঝিয়ে দিলাম । আমরা উনাকে একটি সঠিক এবং ত্রুটিমুক্ত বাইক বা
              স্কুটার বিক্রয় করিলাম । ক্রয়ের সময় ক্রেতার কোন আপত্তি নাই ।
              বিক্রয়ের পরবর্তীতে কোন ত্রুটির জন্য ক্রেতা হাইওয়ে ফাইটার্সকে দায়ী
              করতে পারবে না ।)</span
            >
          </p>
        </div>
        <!-- seller & customer signature -->
        <div class="signature_container">
          <div class="signature_sub_container">
            <div>
              <h4>{{$bike->client_name}}</h4>
              <p>Customer’s Signature</p>
            </div>
          </div>
          <div class="signature_sub_container">
            <div>
              <h4>HIGHWAY FIGHTERS</h4>
              <p>Signature</p>
            </div>
          </div>
        </div>
      </div>
	  <div style="width: 100%; text-align: center">
        <button onclick="downloadDoc()" class="doc_download">Download</button>
      </div>
    </section>
	<script>
	window.html2canvas = html2canvas;
		window.jsPDF = window.jspdf.jsPDF;
		
		// download function
		function downloadDoc() {
			  html2canvas(document.querySelector("#salesDoc"),{
					allowTaint: true,
					useCORS: true,
					scale: 1
			  }).then(function(canvas) {
					document.body.appendChild(canvas);
					var img = canvas.toDataURL("image/png");
					var doc = new jsPDF("p", "mm", "a4");
					var width = doc.internal.pageSize.getWidth();
		var height = doc.internal.pageSize.getHeight();
					doc.addImage(img, "SVG", 0, 0, width, height);
					doc.save("{{$bike->invoiceId}}");
				});
		}
		</script>
  </body>
</html>
