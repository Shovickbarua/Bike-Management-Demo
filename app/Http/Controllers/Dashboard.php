<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Sale;
use App\Models\Bikesale;
use App\Models\Bike;
use App\Models\BikeService;
use Carbon\Carbon;
class Dashboard extends Controller
{
    public function dash()
    {
        $sales = Sale::where('dob',[Carbon::now()->format('Y-m-d')])
                ->orderBy('id','DESC')->take(5)->get();
        $bikesales = Bikesale::orderBy('id','DESC')->take(5)->get();
        $bikeservices = BikeService::where('first_service',[Carbon::now()->format('Y-m-d')])
                    ->orWhere('second_service',[Carbon::now()->format('Y-m-d')])
                    ->orWhere('third_service',[Carbon::now()->format('Y-m-d')])
                    ->orWhere('fourth_service',[Carbon::now()->format('Y-m-d')])
                    ->orWhere('fifth_service',[Carbon::now()->format('Y-m-d')])
                    ->orWhere('sixth_service',[Carbon::now()->format('Y-m-d')])
                    ->orWhere('seventh_service',[Carbon::now()->format('Y-m-d')])
                    ->orWhere('eighth_service',[Carbon::now()->format('Y-m-d')])
                    ->orderBy('id','DESC')->get();
        //dd($sales);
        return view('dashboards.dashboard',compact('sales','bikesales','bikeservices'));
    }
}
