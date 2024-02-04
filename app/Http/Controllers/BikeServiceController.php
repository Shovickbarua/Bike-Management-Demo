<?php

namespace App\Http\Controllers;

use App\Models\BikeService;
use Illuminate\Http\Request;

class BikeServiceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $bikeservice = BikeService::where('service_type','first')->get();
        return view('service.first_service',compact('bikeservice')); 
    }
    public function second()
    {
        $bikeservice = BikeService::where('service_type','second')->get();
        return view('service.second_service',compact('bikeservice')); 
    }
    public function third()
    {
        $bikeservice = BikeService::where('service_type','third')->get();
        return view('service.third_service',compact('bikeservice'));  
    }
    public function fourth()
    {
        $bikeservice = BikeService::where('service_type','fourth')->get();
        return view('service.fourth_service',compact('bikeservice'));  
    }
    public function fifth()
    {
        $bikeservice = BikeService::where('service_type','fifth')->get();
        return view('service.fifth_service',compact('bikeservice'));  
    }
    public function sixth()
    {
        $bikeservice = BikeService::where('service_type','sixth')->get();
        return view('service.sixth_service',compact('bikeservice')); 
    }
    public function seventh()
    {
        $bikeservice = BikeService::where('service_type','seventh')->get();
        return view('service.seventh_service',compact('bikeservice'));  
    }
    public function eighth()
    {
        $bikeservice = BikeService::where('service_type','eighth')->get();
        return view('service.eighth_service',compact('bikeservice')); 
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\BikeService  $bikeService
     * @return \Illuminate\Http\Response
     */
    public function show(BikeService $bikeService)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\BikeService  $bikeService
     * @return \Illuminate\Http\Response
     */
    public function edit(BikeService $bikeService)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\BikeService  $bikeService
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
        $service = BikeService::find($id);
        $service->service_type = $request->service_type;
        $service->save();

        return redirect(route('dash'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\BikeService  $bikeService
     * @return \Illuminate\Http\Response
     */
    public function destroy(BikeService $bikeService)
    {
        //
    }
}
