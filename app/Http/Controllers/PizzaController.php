<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pizza;

class PizzaController extends Controller
{
    public function index()
    {
        // veri getirme yöntemleri
        // $pizzas = Pizza::all();                              // tümünü getir
        // $pizzas = Pizza::orderBy('name', 'DESC')->get();     // z'den a'tya getir
        // $pizzas = Pizza::where('type', 'hawaiian')->get();   // koşula göre getir
        $pizzas = Pizza::latest()->get();                       // en son eklenene göre getir

        return view('pizzas.index', ['pizzas' => $pizzas]);
    }

    public function show($id)
    {
        return view('pizzas.show', ['id' => $id]);
    }

    public function create(){
        return view('pizzas.create');
    }
}
