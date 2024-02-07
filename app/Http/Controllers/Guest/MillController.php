<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use App\Models\Mill;
use Illuminate\Http\Request;

class MillController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $mills = Mill::orderBy('id', 'DESC')->get();
        return view('guest.mills.index', compact('mills'));
    }

        /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $mill = Mill::findOrFail($id);
        return view('guest.mills.show', compact('mill'));
    }


    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('guest.mills.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->all();
        $data['watermill'] = isset($data['watermill']);

        // ? Metodo a manina
        // $newMill = new Mill();
        // $newMill->name = $data['name'];
        // $newMill->watermill = $data['watermill'];
        // $newMill->region = $data['region'];
        // $newMill->country = $data['country'];
        // $newMill->size = $data['size'];
        // $newMill->mills_no = $data['mills_no'];
        // $newMill->picture = $data['picture'];
        // $newMill->save();

        $newMill = Mill::create($data);


        return redirect()->route('guest.mills.show', $newMill->id);
    }


    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Mill $mill)
    {
        return view('guest.mills.edit', compact('mill'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Mill $mill)
    {
        $data = $request->all();
        $data['watermill'] = isset($data['watermill']);

        $mill->update($data);
        return redirect()->route('guest.mills.show', $mill->id);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
