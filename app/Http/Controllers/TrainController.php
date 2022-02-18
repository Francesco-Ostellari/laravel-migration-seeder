<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Train;
use Carbon\Carbon;

class TrainController extends Controller
{
    public function index()
    {
        $trains = Train::where ('departure_date', '>=', Carbon::today())->get();
        $data = ["trains"=>$trains];

        return view ("home", $data);
    }
}
