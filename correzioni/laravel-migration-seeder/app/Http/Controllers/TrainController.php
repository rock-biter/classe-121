<?php

namespace App\Http\Controllers;

use App\Models\Train;
use Illuminate\Http\Request;

class TrainController extends Controller
{
    public function index()
    {

        // recupeare i treni in partenza oggi
        $trains = Train::whereDate('departure_time', today())->get();
        // dd($trains);

        // ritornare la vista welcome passando i treni

        return view('welcome', compact('trains'));
    }
}
