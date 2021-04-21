<?php

namespace App\Http\Controllers\Admin;

use App\BusBookedSeats;
use App\Http\Controllers\Controller;
use App\UserBookedSeats;
use Illuminate\Http\Request;

class BusBookedSeatsController extends Controller
{
    public function __construct()
    {
        $this->middleware(['auth','verified']);
    }

    public function report(Request $request)
    {
        $bus_report = BusBookedSeats::where('bus_id','=',$request['bus_id'])->get();
        return view('admin.busses.report',compact('bus_report'));

    }

}
