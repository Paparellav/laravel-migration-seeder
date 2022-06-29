<?php

namespace App\Http\Controllers;

use App\Train;
use Illuminate\Http\Request;

class BonusController extends Controller
{
    public function index()
    {
        $trains = Train::where('Data_partenza', '29/06/2022 15:00:00')->orWhere('Data_partenza', '29/06/2022 10:00:00')->get();
        return view('bonus', compact('trains'));
    }
}
