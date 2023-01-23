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
        $bikeservice = BikeService::all();
        return view('service.first_service',compact('bikeservice')); 
    }
    public function second()
    {
        $bikeservice = BikeService::all();
        return view('service.second_service',compact('bikeservice')); 
    }
    public function third()
    {
        $bikeservice = BikeService::all();
        return view('service.third_service',compact('bikeservice'));  
    }
    public function fourth()
    {
        $bikeservice = BikeService::all();
        return view('service.fourth_service',compact('bikeservice'));  
    }
    public function fifth()
    {
        $bikeservice = BikeService::all();
        return view('service.fifth_service',compact('bikeservice'));  
    }
    public function sixth()
    {
        $bikeservice = BikeService::all();
        return view('service.sixth_service',compact('bikeservice')); 
    }
    public function seventh()
    {
        $bikeservice = BikeService::all();
        return view('service.seventh_service',compact('bikeservice'));  
    }
    public function eighth()
    {
        $bikeservice = BikeService::all();
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
    public function update(Request $request, BikeService $bikeService)
    {
        //
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
