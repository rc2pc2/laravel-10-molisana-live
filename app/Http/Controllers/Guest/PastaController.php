<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use App\Models\Pasta;
use Illuminate\Http\Request;

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
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
