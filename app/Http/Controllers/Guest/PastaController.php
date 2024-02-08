<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use App\Models\Pasta;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class PastaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $pastas = Pasta::orderBy('id', 'DESC')->get();
        return view('guest.pastas.index', compact('pastas'));
    }

    /**
     * Display the specified resource.
     */
    public function show(Pasta $pasta)
    {
        // dd($pasta);
        return view('guest.pastas.show', compact('pasta'));
    }


    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('guest.pastas.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $request->validate([
            'titolo' => ['required', 'unique:pastas', 'min:4', 'max:40'],
            'tipo' => ['required', 'min:4', 'max:20'],
            'cottura' => ['required', 'min:1', 'max:10'],
            'peso' => ['required', 'min:1', 'max:15'],
            'descrizione' => ['required', 'min:10', 'max:2000'],
            'src' => ['required', 'min:4', 'url:http,https'],
        ], [
            'titolo.required' => 'Non va bene, inserisci un titolo'
        ]);


        $formData = $request->all();
        // ? ['titolo'] => 'Spaghetto alla chitarra'
        // ? ['cottura'] => '10 minuti'

        // $newPasta = new Pasta();
        // $newPasta->titolo = $formData['titolo'];
        // $newPasta->tipo = $formData['tipo'];
        // $newPasta->cottura = $formData['cottura'];
        // $newPasta->peso = $formData['peso'];
        // $newPasta->src = $formData['src'];
        // $newPasta->descrizione = $formData['descrizione'];
        // $newPasta->save();



        $newPasta = Pasta::create($formData);

        return redirect()->route('guest.pastas.show', $newPasta->id);
    }



    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $pasta = Pasta::findOrFail($id);
        return view('guest.pastas.edit', compact('pasta'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Pasta $pasta)
    {

        $request->validate([
            'titolo' => ['required', 'min:4', 'max:40', Rule::unique('pastas')->ignore($pasta->id)],
            'tipo' => ['required', 'min:4', 'max:20'],
            'cottura' => ['required', 'min:1', 'max:10'],
            'peso' => ['required', 'min:1', 'max:15'],
            'descrizione' => ['required', 'min:10', 'max:2000'],
            'src' => ['required', 'min:4', 'url:http,https'],
        ], [
            'titolo.required' => 'Non va bene, inserisci un titolo'
        ]);
        $data = $request->all();

        //? $pasta = Pasta::findOrFail($id); in automatico se D.I.

        // $pasta->titolo = $data['titolo'];
        // $pasta->tipo = $data['tipo'];
        // $pasta->cottura = $data['cottura'];
        // $pasta->peso = $data['peso'];
        // $pasta->src = $data['src'];
        // $pasta->descrizione = $data['descrizione'];
        // $pasta->save();

        $pasta->update($data);

        return redirect()->route('guest.pastas.show', $pasta->id);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Pasta $pasta)
    {
        $pasta->delete();

        return redirect()->route('guest.pastas.index');
    }

    /**
     * Shows the list of soft deleted resources.
     *
     */
    public function deletedPastas(){
        $pastas = Pasta::onlyTrashed()->orderBy('id', 'DESC')->get();
        return view('guest.pastas.deleted', compact('pastas'));
    }
}
