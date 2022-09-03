<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PizzaController extends Controller
{
    public function index()
    {
        $pizzas = [
            ['type' => 'hawaiian', 'base' => 'chessy crust'],
            ['type' => 'volcano', 'base' => 'thin & crispy'],
            ['type' => 'veg supreme', 'base' => 'garlic crust']
        ];
        return view('pizzas', ['pizzas' => $pizzas]);
    }

    public function show($id)
    {
        return view('details', ['id' => $id]);
    }
}
