<?php

namespace App\Http\Controllers;

use App\Recipe;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class RecipeController extends Controller
{
    public $rules = [
        'title' => 'required',
        'name' => 'required',
    ];
    public function index()
    {
        $recipes = Recipe::all();
        return view('recipes', ['recipes'=>$recipes]);
    }
    public function create()
    {
        $title = request()->get('title');
        $text = request()->get('text');
        if(is_null($title) || is_null($text))
            return response()->redirectTo('/')->withErrors('Forma ne zapolnena');
        $recipe = new Recipe();
        $recipe->title = $title;
        $recipe->text = $text;
        $recipe->user_id = auth()->user()->id;
        $recipe->save();
        return response()->redirectTo('/');
    }
    public function store(Request $request)
    {
//        $this->validate($request, $this->rules);
//
//        return redirect()->withErrors();
//        хех, не понял
    }
    public function show(Recipe $recipe)
    {
        //
    }

    public function edit(Recipe $recipe)
    {
        //
    }
    public function update(Request $request, Recipe $recipe)
    {
        //
    }
    public function destroy(Recipe $recipe)
    {
        //
    }
    public function like(Recipe $recipe)
    {
    }
}
