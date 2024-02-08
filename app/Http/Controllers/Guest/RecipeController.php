<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use App\Models\Recipe;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class RecipeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $recipes = Recipe::orderBy('id', 'DESC')->get();
        return view('guest.recipes.index', compact('recipes'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('guest.recipes.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $data = $request->validate([
            'name' => ['required', 'min:4', 'max:40', Rule::unique('recipes')],
            'image' => ['required', 'min:4', 'url:http,https'],
            'complexity' => ['required', 'integer', 'min:1', 'max:10'],
            'preparation_time' => ['required', 'digits_between:1,4'],
            'cooking_time' => ['required', 'digits_between:1,4'],
            'description' => ['required', 'min:10', 'max:3000'],
        ], [
            'image.required' => 'La ricetta deve avere un\'immagine! Altrimenti come la postiamo su tardagram?'
        ]);

        // $recipe = new Recipe();
        // $recipe->name = $data['name'];
        // $recipe->image = $data['image'];
        // $recipe->complexity = $data['complexity'];
        // $recipe->cooking_time = $data['cooking_time'];
        // $recipe->preparation_time = $data['preparation_time'];
        // $recipe->description = $data['description'];
        // $recipe->save();

        $recipe = Recipe::create($data);

        return redirect()->route('guest.recipes.show', $recipe->id);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $recipe = Recipe::findOrFail($id);
        return view('guest.recipes.show', compact('recipe'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Recipe $recipe)
    {
        return view('guest.recipes.edit', compact('recipe'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Recipe $recipe)
    {

        $data = $request->validate([
            'name' => ['required', 'min:4', 'max:40', Rule::unique('recipes')->ignore($recipe->id)],
            'image' => ['required', 'min:4', 'url:http,https'],
            'complexity' => ['required', 'integer', 'min:1', 'max:10'],
            'preparation_time' => ['required', 'digits_between:1,4'],
            'cooking_time' => ['required', 'digits_between:1,4'],
            'description' => ['required', 'min:10', 'max:3000'],
        ], [
            'image.required' => 'La ricetta deve avere un\'immagine! Altrimenti come la postiamo su tardagram?'
        ]);

        $recipe->update($data);

        return redirect()->route('guest.recipes.show', $recipe->id);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
