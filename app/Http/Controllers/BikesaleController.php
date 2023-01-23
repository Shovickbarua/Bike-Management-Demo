<?php

namespace App\Http\Controllers;

use App\Models\Bikesale;
use App\Models\Bike;
use App\Models\methods;
use App\Models\BikeService;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;
use Carbon\Carbon;
use DateInterval;
use PhpParser\Node\Expr\AssignOp\Concat;
use PhpParser\Node\Expr\BinaryOp\Concat as BinaryOpConcat;

use function PHPUnit\Framework\greaterThanOrEqual;

class BikesaleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $bikes= Bikesale::all();
        return view('bikes.bike_sale_list',compact('bikes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $bike = Bike::where('bikes.bike_name','LIKE','%'.$request->bike_name.'%')
                    ->first();
        $methods= methods::all();
        return view('bikes.add_order',compact('methods','bike'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $invoice = Bikesale::orderBy('id','DESC')->first();
        if ($invoice == null) {
    		$firstReg = 0;
    		$invoiceID = $firstReg+1;
    		if ($invoiceID < 10) {
    			$id_no = '00'.$invoiceID;
    		}elseif ($invoiceID < 100) {
    			$id_no = '0'.$invoiceID;
    		}
    	}else{
        $invoice = Bikesale::orderBy('id','DESC')->first()->id;
     	$invoiceID = $invoice+1;
     	if ($invoiceID < 10) {
    			$id_no = '00'.$invoiceID;
    		}elseif ($invoiceID < 100) {
    			$id_no = '0'.$invoiceID;
    		}

    	}

        $date =  new Carbon($request->dob);
        
        $invoiceId ='HF'.$date->format('Y').$date->format('m').$id_no;
        //dd($invoiceId);
        $product = Bike::where('bikes.id','LIKE','%'.$request->bike_id.'%')
                    ->first();
        $bike = new Bikesale();
        $bike->invoiceId = $invoiceId;
        $bike->client_name = $request->client_name;
        $bike->method_id = $request->method_id;
        $bike->dob =$request->dob;
        $bike->contact = $request->contact;
        $bike->address = $request->address;
        $bike->bike_name = $request->bike_name;
        $bike->bsquantity = $request->bsquantity;
        $bike->engine_no = $request->engine_no;
        $bike->chas_no = $request->chas_no;
        $bike->sale_price = $request->sale_price;
        $bike->registration = $request->registration;
        $bike->bank_draft = $request->bank_draft;
        $bike->brta = $request->brta;
        $bike->profit = ($request->sale_price * $request->bsquantity) - ($product->bcost * $request->bsquantity);
        $bike->total = ($product->sale_price * $request->bsquantity) + $request->registration + $request->bank_draft + $request->brta ;
        $bike->save();

        $product->update([
            'bquantity' => $product->bquantity - $request->bsquantity, // quantity of product from order
        ]);

        $service = new BikeService();
        $service->invoiceId         = $invoiceId;
        $service->client_name       = $request->client_name;
        $service->contact           = $request->contact;
        $service->address           = $request->address;
        $service->bike_name         = $request->bike_name;
        $service->bsquantity        = $request->bsquantity;
        $service->first_service     =(new Carbon($request->dob))->addDays(20);
        $service->second_service    =(new Carbon($request->dob))->addDays(35);
        $service->third_service     =(new Carbon($request->dob))->addDays(140);
        $service->fourth_service    =(new Carbon($request->dob))->addDays(200);
        $service->fifth_service     =(new Carbon($request->dob))->addDays(260);
        $service->sixth_service     =(new Carbon($request->dob))->addDays(320);
        $service->seventh_service   =(new Carbon($request->dob))->addDays(380);
        $service->eighth_service    =(new Carbon($request->dob))->addDays(440);
        $service->save();
        

        return redirect(route('bike_sale.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Bikesale  $bikesale
     * @return \Illuminate\Http\Response
     */
    public function bikeinvoice(Request $request)
    {
        $bike = Bikesale::where('bikesales.invoiceId','LIKE','%'.$request->invoiceId.'%')
                    ->first();
        $pdf = Pdf::loadView('bikes.invoice_bike', compact('bike'));
        return $pdf->download('bikeinvoice.pdf');
    } 
    public function show(Bikesale $bikesale)
    {
      
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Bikesale  $bikesale
     * @return \Illuminate\Http\Response
     */
    public function edit(Bikesale $bikesale)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Bikesale  $bikesale
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Bikesale $bikesale)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Bikesale  $bikesale
     * @return \Illuminate\Http\Response
     */
    public function destroy(Bikesale $bikesale)
    {
        //
    }
}
