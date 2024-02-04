<?php

namespace App\Http\Controllers;

use App\Models\Bikesale;
use App\Models\Bike;
use App\Models\methods;
use App\Models\BikeService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Barryvdh\DomPDF\Facade\Pdf;
use Carbon\Carbon;




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

    //Old bike Sale Add
    public function add_old_bike_sale()
    {
        $methods= methods::all();
        return view('bikes.add_order_old',compact('methods'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //dd($request->invoiceId);
        if(!$request->invoiceId )
        {

        $invoice = Bikesale::orderBy('id','DESC')->first();
        if ($invoice == null) {
    		$firstReg = 0;
    		$invoiceID = $firstReg+1;
    		if ($invoiceID < 10) {
    			$id_no = '0'.$invoiceID;
    		}elseif ($invoiceID < 100) {
    			$id_no = $invoiceID;
    		}
    	}else{
        $invoice = Bikesale::orderBy('id','DESC')->first()->id;
     	$invoiceID = $invoice+1;
     	if ($invoiceID < 10) {
    			$id_no = '0'.$invoiceID;
    		}elseif ($invoiceID < 100) {
    			$id_no = $invoiceID;
    		}

    	}

        $date =  new Carbon($request->dob);
        
        $invoiceId ='HF'.$date->format('Y').$id_no;
        //dd($invoiceId);
        $product = Bike::where('bikes.id','LIKE','%'.$request->bike_id.'%')
                    ->first();
        $bike = new Bikesale();
        if($request->has('cus_photo')){
             $cus_photo = $request->file('cus_photo');
             $name = time().uniqid().'.'.$cus_photo->extension();
             $cus_photo->move(public_path('products'),$name);
             $bike->cus_photo = $name;
         }
         if($request->has('b_copy')){
             $b_copy = $request->file('b_copy');
             $name = time().uniqid().'.'.$b_copy->extension();
             $b_copy->move(public_path('products'),$name);
             $bike->b_copy = $name;
         }
         if($request->has('r_slip')){
             $r_slip = $request->file('r_slip');
             $name = time().uniqid().'.'.$r_slip->extension();
             $r_slip->move(public_path('products'),$name);
             $bike->r_slip = $name;
         }
         if($request->has('t_token')){
             $t_token = $request->file('t_token');
             $name = time().uniqid().'.'.$t_token->extension();
             $t_token->move(public_path('products'),$name);
             $bike->t_token = $name;
         }
        $bike->invoiceId = $invoiceId;
        $bike->client_name = $request->client_name;
        $bike->fName = $request->fName;
        $bike->nid = $request->nid;
        $bike->method_id = $request->method_id;
        $bike->dob =$request->dob;
        $bike->contact = $request->contact;
        $bike->address = $request->address;
        $bike->brand = $product->brand;
        $bike->bike_name = $product->bike_name;
        $bike->bsquantity = $request->bsquantity;
        $bike->engine_no = $product->engine_no;
        $bike->chas_no = $product->chas_no;
        $bike->m_veh =$product->m_veh;
        $bike->manu =$product->manu;
        $bike->cc =$product->cc;
        $bike->seat_cap =$product->seat_cap;
        $bike->brake =$product->brake;
        $bike->ftyre =$product->ftyre;
        $bike->rtyre =$product->rtyre;
        $bike->color =$request->color;
        $bike->weight =$product->weight;
        $bike->sale_price = $request->sale_price;
        $bike->registration = $request->registration;
        $bike->bank_draft = $request->bank_draft;
        $bike->brta = $request->brta;
        $bike->profit = ($request->sale_price * $request->bsquantity) - ($product->bcost * $request->bsquantity) + ($request->registration-($request->bank_draft + $request->brta));
        $bike->total = ($request->sale_price * $request->bsquantity) + $request->registration + $request->bank_draft + $request->brta ;
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
        $service->service_type      = "first";
        $service->first_service     =(new Carbon($request->dob))->addDays(20);
        $service->second_service    =(new Carbon($request->dob))->addDays(35);
        $service->third_service     =(new Carbon($request->dob))->addDays(140);
        $service->fourth_service    =(new Carbon($request->dob))->addDays(200);
        $service->fifth_service     =(new Carbon($request->dob))->addDays(260);
        $service->sixth_service     =(new Carbon($request->dob))->addDays(320);
        $service->seventh_service   =(new Carbon($request->dob))->addDays(380);
        $service->eighth_service    =(new Carbon($request->dob))->addDays(440);

        $service->f_date            =(new Carbon($service->first_service))->addDays(10);
        $service->s_date            =(new Carbon($service->second_service))->addDays(10);
        $service->t_date            =(new Carbon($service->third_service))->addDays(10);
        $service->four_date         =(new Carbon($service->fourth_service))->addDays(10);
        $service->fifth_date        =(new Carbon($service->fifth_service))->addDays(10);
        $service->six_date          =(new Carbon($service->sixth_service))->addDays(10);
        $service->seven_date        =(new Carbon($service->seventh_service))->addDays(10);
        $service->eighth_date       =(new Carbon($service->eighth_service))->addDays(10);
        $service->save();
        
 
    }
    else{

        $bike = new Bikesale();
        if($request->has('cus_photo')){
            $cus_photo = $request->file('cus_photo');
            $name = time().uniqid().'.'.$cus_photo->extension();
            $cus_photo->move(public_path('products'),$name);
            $bike->cus_photo = $name;
        }
        if($request->has('b_copy')){
            $b_copy = $request->file('b_copy');
            $name = time().uniqid().'.'.$b_copy->extension();
            $b_copy->move(public_path('products'),$name);
            $bike->b_copy = $name;
        }
        if($request->has('r_slip')){
            $r_slip = $request->file('r_slip');
            $name = time().uniqid().'.'.$r_slip->extension();
            $r_slip->move(public_path('products'),$name);
            $bike->r_slip = $name;
        }
        if($request->has('t_token')){
            $t_token = $request->file('t_token');
            $name = time().uniqid().'.'.$t_token->extension();
            $t_token->move(public_path('products'),$name);
            $bike->t_token = $name;
        }
        $bike->invoiceId = $request->invoiceId;
        $bike->client_name = $request->client_name;
        $bike->fName = $request->fName;
        $bike->nid = $request->nid;
        $bike->method_id = $request->method_id;
        $bike->dob =$request->dob;
        $bike->contact = $request->contact;
        $bike->address = $request->address;
        $bike->brand = $request->brand;
        $bike->bike_name = $request->bike_name;
        $bike->bsquantity = $request->bsquantity;
        $bike->engine_no = $request->engine_no;
        $bike->chas_no = $request->chas_no;
        $bike->m_veh =$request->m_veh;
        $bike->manu =$request->manu;
        $bike->cc =$request->cc;
        $bike->seat_cap =$request->seat_cap;
        $bike->brake =$request->brake;
        $bike->ftyre =$request->ftyre;
        $bike->rtyre =$request->rtyre;
        $bike->color =$request->color;
        $bike->weight =$request->weight;
        $bike->sale_price = $request->sale_price;
        $bike->registration = $request->registration;
        $bike->bank_draft = $request->bank_draft;
        $bike->brta = $request->brta;
        $bike->profit = ($request->sale_price * $request->bsquantity) - ($request->bcost * $request->bsquantity) + ($request->registration-($request->bank_draft + $request->brta));
        $bike->total = ($request->sale_price * $request->bsquantity) + $request->registration + $request->bank_draft + $request->brta ;
        $bike->save();

        //Bike Service

        $service = new BikeService();
        $service->invoiceId         = $request->invoiceId;
        $service->client_name       = $request->client_name;
        $service->contact           = $request->contact;
        $service->address           = $request->address;
        $service->bike_name         = $request->bike_name;
        $service->bsquantity        = $request->bsquantity;
        $service->service_type      = "first";
        $service->first_service     =(new Carbon($request->dob))->addDays(20);
        $service->second_service    =(new Carbon($request->dob))->addDays(35);
        $service->third_service     =(new Carbon($request->dob))->addDays(140);
        $service->fourth_service    =(new Carbon($request->dob))->addDays(200);
        $service->fifth_service     =(new Carbon($request->dob))->addDays(260);
        $service->sixth_service     =(new Carbon($request->dob))->addDays(320);
        $service->seventh_service   =(new Carbon($request->dob))->addDays(380);
        $service->eighth_service    =(new Carbon($request->dob))->addDays(440);
        $service->save();
         
    }
    return redirect(route('bike_sale.index'));
    }


    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Bikesale  $bikesale
     * @return \Illuminate\Http\Response
     */
    // Bike Sale Invoice
    public function saledetails(Request $request)
    {
        $bike = Bikesale::where('bikesales.invoiceId','LIKE','%'.$request->invoiceId.'%')
                    ->first();

       return view('bikes.bike_details',compact('bike'));
    } 
    
    // Bike Sale Invoice
    public function bikeinvoice(Request $request)
    {
        $bike = Bikesale::where('bikesales.invoiceId','LIKE','%'.$request->invoiceId.'%')
                    ->first();
        return view('bikes.invoice_bike',compact('bike'));
    } 

     /* Search Sale by date */
     public function bike_reports(Request $request)
     {
         if(Session::has("fdob")){
             Session::forget('fdob','ldob');
         }else{
 
         }
         $bikes =Bikesale::whereBetween('dob',[$request->fdob, $request->ldob])
                     ->get();
         $profit =Bikesale::whereBetween('dob',[$request->fdob, $request->ldob])
                     ->sum('profit');
             Session::put([
                 'fdob'     => $request->fdob,
                 'ldob'     => $request->ldob
             ]);
 
         return view('reports.bike_bydate',compact('bikes','profit'));
     }
     
     /*Search Sale by date pdf */
     public function bike_pdf(Request $request)
     {
         $bikes =Bikesale::whereBetween('dob',[session('fdob'), session('ldob')])
                     ->get();
         $profit  =Bikesale::whereBetween('dob',[session('fdob'), session('ldob')])
                     ->sum('profit'); 
         $path = base_path('Capture.png');
         $type = pathinfo($path, PATHINFO_EXTENSION);
         $data = file_get_contents($path);
         $pic ='data:image/'.$type . ';base64,' .base64_encode($data); 
         $pdf = Pdf::setOptions([
             'isHtml5ParserEnabled' => true,
             'isRemoteEnabled' => true
         ])->loadView('reports.bike_report', compact('bikes','profit','pic'));
         return $pdf->download('bike_sale_report.pdf');
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
    public function destroy($bike)
    {
        Bikesale::destroy($bike->id);
        return redirect(route('bike.index'));
    }
}
