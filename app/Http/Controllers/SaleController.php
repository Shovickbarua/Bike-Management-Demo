<?php

namespace App\Http\Controllers;

use App\Models\Sale;
use App\Models\Product;
use App\Models\Category;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;

class SaleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $sales=Sale::all();
        return view('sales.sale_list',compact('sales'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       
    } 
    public function add_sales(Request $request)
    {
      
        $products = Product::where('products.product_name','LIKE','%'.$request->product_name.'%')
                    ->first();
        //dd($products);
       // die();
       return view('sales.add_sale',compact('products'));
       
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $invoice = Sale::orderBy('id','DESC')->first();
        if ($invoice == null) {
    		$firstReg = 0;
    		$invoiceID = $firstReg+1;
    		if ($invoiceID < 10) {
    			$id_no = '000'.$invoiceID;
    		}elseif ($invoiceID < 100) {
    			$id_no = '00'.$invoiceID;
    		}elseif ($invoiceID < 1000) {
    			$id_no = '0'.$invoiceID;
    		}
    	}else{
        $invoice = Sale::orderBy('id','DESC')->first()->id;
     	$invoiceID = $invoice+1;
     	if ($invoiceID < 10) {
    			$id_no = '000'.$invoiceID;
    		}elseif ($invoiceID < 100) {
    			$id_no = '00'.$invoiceID;
    		}elseif ($invoiceID < 1000) {
    			$id_no = '0'.$invoiceID;
    		}

    	}

        $invoiceId = '2022'.$id_no;
        $product = Product::where('products.product_name','LIKE','%'.$request->product_name.'%')
                    ->first();

        $sale = new Sale();
        $sale->invoiceId = $invoiceId;
        $sale->product_name = $request->product_name;
        $sale->cus_name = $request->cus_name;
        $sale->pro_quantity = $request->pro_quantity;
        $sale->contact = $request->contact;
        $sale->dob =$request->dob;
        //$quantity = Product::where('product_name', $sale->product_name)->pluck('sale')->first();
        $sale->total = $product->sale * $request->pro_quantity ;
        $sale->save();
       // $product = Product::where('product_name', $sale->product_name)->first();

        $product->update([
            'quantity' => $product->quantity - $request->pro_quantity, // quantity of product from order
        ]);

        return redirect(route('sale.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Sale  $sale
     * @return \Illuminate\Http\Response
     */
    public function invoice(Request $request){
        $products = Sale::where('sales.invoiceId','LIKE','%'.$request->invoiceId.'%')
                    ->first();
        $pdf = Pdf::loadView('sales.invoice', compact('products'));
        return $pdf->download('invoice.pdf');
    }
    public function show(Sale $sale)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Sale  $sale
     * @return \Illuminate\Http\Response
     */
    public function edit(Sale $sale)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Sale  $sale
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Sale $sale)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Sale  $sale
     * @return \Illuminate\Http\Response
     */
    public function destroy(Sale $sale)
    {
        //
    }
}
