<?php

namespace App\Http\Controllers;

use App\Recipe;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Http\Request;

class RecipeController extends Controller
{
    public $rules = [
        'title' => 'required|min:5|max:255',
        'text' => 'required',
    ];
    public function index()
    {
        $recipes = Recipe::on()->paginate(9);
        return view('recipe.recipes', ['recipes'=>$recipes]);
    }
    public function create()
    {
        return view('recipe.form');
    }
    public function store(Request $request)
    {
        $data = $this->validate($request, $this->rules);
        /**
         * @var HasMany $recipes
         */
        $recipes = auth()->user()->recipes();
        $new = $recipes->create($data);
        return redirect()->route('recipe.show', ['recipe' => $new]);
    }
    public function show(Recipe $recipe)
    {
        return view('recipe.show', [ 'recipe' => $recipe]);
    }

    public function edit(Recipe $recipe)
    {
        return view('recipe.form', ['recipe' => $recipe]);
    }
    public function update(Request $request, Recipe $recipe)
    {
        $data = $this->validate($request, $this->rules);
        $recipe->update($data);
        return redirect()->route('recipe.show', ['recipe' => $recipe]);
    }
    public function destroy(Recipe $recipe)
    {
        $recipe->delete();
        return redirect()->route('recipe.index');
    }
    public function like(Recipe $recipe)
    {
    }
}
