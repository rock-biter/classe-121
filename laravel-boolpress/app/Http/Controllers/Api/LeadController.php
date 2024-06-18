<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Mail\NewLead;
use App\Models\Lead;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;

class LeadController extends Controller
{
    public function store(Request $request)
    {

        // validiamo la request: i dati che arrivano dal form
        $data = $request->all();

        $validator = Validator::make($data, [
            'name' => 'required|max:255',
            'email' => 'required|email|max:255',
            'message' => 'required'
        ]);

        // se la validatioze `3 fallita
        // return una response in json con gli errori fatti
        if ($validator->fails()) {
            return response()->json([
                'success' => false,
                'errors' => $validator->errors()
            ]);
        }

        // altrimenti
        // salviamo il nuovo lead nel DB
        $lead = Lead::create($data);
        // inviamo la mail
        Mail::to('giangi@gmail.com')->send(new NewLead($lead));
        // returniamo una response json con indicato il risultato di successo

        return response()->json([
            'success' => true
        ]);
    }
}
