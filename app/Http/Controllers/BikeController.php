<?php

namespace App\Http\Controllers;

use App\Models\Bike;
use App\Models\methods;
use Illuminate\Http\Request;

class BikeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $bikes=Bike::all();
        return view('bikes.bike_list',compact('bikes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('bikes.add_bike');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $bike = new Bike();
        if($request->has('image')){
            // dd($request);
             $image = $request->file('image');
             $name = time().uniqid().'.'.$image->extension();
             $image->move('storage/app/products',$name);
             $bike->image = $name;
         }
        $bike->bike_name = $request->bike_name;
        $bike->bquantity = $request->bquantity;
        $bike->bcost = $request->bcost;
        $bike->dob =$request->dob;
        $bike->save();

        return redirect(route('bike.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Bike  $bike
     * @return \Illuminate\Http\Response
     */
    public function show(Bike $bike)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Bike  $bike
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $bike = Bike::find($id);
        return view('bikes.bike_edit',compact('bike'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Bike  $bike
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Bike $bike)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Bike  $bike
     * @return \Illuminate\Http\Response
     */
    public function destroy(Bike $bike)
    {
        Bike::destroy($bike->id);
        return redirect(route('bike.index'));
    }
}
