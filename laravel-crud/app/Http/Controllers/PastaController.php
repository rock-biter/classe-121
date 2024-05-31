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

    public function store(Request $request)
    {

        $request->validate([
            'title' => 'required|max:100|min:3',
            'type' => ['required', 'max:50'],
            'image' => 'required|max:255|url',
            'weight' => 'required|max:20',
            'cooking_time' => 'required|max:20',
            'description' => 'nullable|max:2000'
        ]);
        // recuperiamo i parametri che arrivano dal form
        $form_data = $request->all();

        // dd($form_data);

        // crea l'istanza, la popola con i dati e la salva nel db
        $new_pasta = Pasta::create($form_data);

        // creare l'istanza di Pasta
        // $new_pasta = new Pasta();

        // // popoliamo l'istanza con i dati che sono arrivati dal form
        // $new_pasta->title = $form_data['title'];
        // $new_pasta->image = $form_data['image'];
        // $new_pasta->weight = $form_data['weight'];
        // $new_pasta->cooking_time = $form_data['cooking_time'];
        // $new_pasta->description = $form_data['description'];
        // $new_pasta->type = $form_data['type'];

        // // salviamo l'istanza ->save()
        // $new_pasta->save();

        // dump($new_pasta);
        // redirect alla rotta show di pasta 
        // return redirect()->route('pastas.show', $new_pasta);
        return to_route('pastas.show', $new_pasta);
        // return redirect()->route('pastas.index');
    }

    public function edit(Pasta $pasta)
    {
        return view('pastas.edit', compact('pasta'));
    }

    public function update(Request $request, Pasta $pasta)
    {
        $request->validate([
            'title' => 'required|max:100|min:3',
            'type' => ['required', 'max:50'],
            'image' => 'required|max:255|url',
            'weight' => 'required|max:20',
            'cooking_time' => 'required|max:20',
            'description' => 'nullable|max:2000'
        ]);

        $form_data = $request->all();
        // dd($request->all());
        // dd($pasta);
        $pasta->fill($form_data); //non salva automaticamente sul db
        // se qui dobbiamo fare qualcos'altro
        $pasta->save();
        // $pasta->update($form_data);

        // redirect alla rotta show di pasta 
        return to_route('pastas.show', $pasta);
    }

    public function destroy(Pasta $pasta)
    {

        $pasta->delete();

        return to_route('pastas.index');
    }
}
