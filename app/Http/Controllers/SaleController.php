<?php

namespace App\Http\Controllers;

use App\Models\Sale;
use App\Models\Product;
use App\Models\methods;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
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
        $methods= methods::all();
       return view('sales.add_sale',compact('products','methods'));
       
    }
    public function show_sale(Request $request)
    { 
        if(Session::has('invoiceId')){
            $sales = Sale::where('invoiceId',session('invoiceId'))
            ->first();
            $sale = Sale::where('invoiceId',session('invoiceId'))
            ->get();
        }else{
           
        }
        return view('sales.show_sale',compact('sales','sale'));  
       
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
     
        $sale = new Sale();

        if(Session::has('invoiceId')){
            $sale->invoiceId    = session('invoiceId');
            $sale->cus_name     = session('cus_name');
            $sale->method_id    = session('method_id');
            $sale->contact      = session('contact');
            $sale->dob          = session('dob');
        }else{
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
        $sale->invoiceId = $invoiceId;
        $sale->cus_name = $request->cus_name;
        $sale->method_id = $request->method_id;
        $sale->contact = $request->contact;
        $sale->dob =$request->dob;
    }
        $product = Product::where('products.product_name','LIKE','%'.$request->product_name.'%')
                    ->first();
        $products= DB::table('products')
            ->join('categories','products.cat_id','=','categories.id')
            ->where('products.product_name','LIKE','%'.$request->product_name.'%')
            ->first();
        $sale->product_name = $request->product_name;
        $sale->cat_name     = $products->cat_name;
        $sale->cost         = $product->cost;
        $sale->SKU          = $product->SKU;
        $sale->sale         = $request->sale;
        $sale->pro_quantity = $request->pro_quantity;
        $sale->profit       = ($request->sale * $request->pro_quantity) - ($product->cost * $request->pro_quantity)  ;
        $sale->total        = $request->sale * $request->pro_quantity ;
        $sale->save();

        $product->update([
            'quantity' => $product->quantity - $request->pro_quantity, // quantity of product from order
        ]);
        if(Session::has('invoiceId')){

        }else{
            Session::put([
                'invoiceId'    => $invoiceId,
                'cus_name'     => $request->cus_name,
                'contact'      => $request->contact,
                'method_id'    => $request->method_id,
                'dob'          => $request->dob
            ]);

        }
        return redirect(route('show_sale'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Sale  $sale
     * @return \Illuminate\Http\Response
     */
    public function invoice(Request $request){
        if(Session::has("invoiceId")){
            Session::forget('invoiceId','cus_name','contact','method_id','dob');
        }else{

        }
        $product = Sale::where('sales.invoiceId','LIKE','%'.$request->invoiceId.'%')
                    ->first();
        $products = Sale::where('sales.invoiceId','LIKE','%'.$request->invoiceId.'%')
                    ->get();
        $pdf = Pdf::loadView('sales.invoice', compact('product','products'));
        return $pdf->download('invoice.pdf');
    }
    public function reports(Request $request)
    {
        $products =Sale::whereBetween('dob',[$request->fdob, $request->ldob])
                    ->get();
        $profit  =Sale::whereBetween('dob',[$request->fdob, $request->ldob])
                    ->sum('profit');
            Session::put([
                'fdob'     => $request->fdob,
                'ldob'     => $request->ldob
            ]);

        return view('reports.product_bydate',compact('products','profit'));
    }
    
    public function product_report(Request $request)
    {
        $products =Sale::whereBetween('dob',[session('fdob'), session('ldob')])
                    ->get();
        $profit  =Sale::whereBetween('dob',[session('fdob'), session('ldob')])
                    ->sum('profit'); 
        Session::forget('fdob','ldob');

        $pdf = Pdf::loadView('reports.product_report', compact('products','profit'));
        return $pdf->download('report.pdf');
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
