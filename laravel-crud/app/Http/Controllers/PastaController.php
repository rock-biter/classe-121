<?php

namespace App\Http\Controllers;

use App\Models\Pasta;
use Illuminate\Http\Request;

class PastaController extends Controller
{
    //
    public function index()
    {

        $pastas = Pasta::all();

        return view('pastas.index', compact('pastas'));
    }

    public function show(Pasta $pasta)
    {

        // $pasta = Pasta::findOrFail($id);

        // if ($pasta === null) {
        //     abort('404');
        // }

        return view('pastas.show', compact('pasta'));
    }

    public function create()
    {
        return view('pastas.create');
    }

    public function store()
    {

        dump('Metodo store');
    }
}
