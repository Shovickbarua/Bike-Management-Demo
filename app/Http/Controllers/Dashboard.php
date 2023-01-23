<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Sale;
use App\Models\Bikesale;
use App\Models\Bike;
use App\Models\BikeService;
class Dashboard extends Controller
{
    public function dash()
    {
        $sales = Sale::orderBy('id','DESC')->take(5)->get();
        $bikesales = Bikesale::orderBy('id','DESC')->take(5)->get();
        //dd($sales);
        return view('dashboards.dashboard',compact('sales','bikesales'));
    }
}
