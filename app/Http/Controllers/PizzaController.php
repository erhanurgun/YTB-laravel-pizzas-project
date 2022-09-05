<?php
// hata yakalayıcılar
// dd() ve error_log()
// ------------------
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
        // $pizza = Pizza::find($id);       // id değeri varsa getir
        $pizza = Pizza::findOrFail($id);    // id değeri varsa getir yoksa 404'e gönder

        return view('pizzas.show', ['pizza' => $pizza]);
    }

    public function create()
    {
        return view('pizzas.create');
    }

    public function store()
    {
        $pizza = new Pizza();

        $pizza->name = request('name');
        $pizza->type = request('type');
        $pizza->base = request('base');
        $pizza->toppings = request('toppings');

        // error_log($pizza);
        $pizza->save();

        return redirect('/')->with('mssg', 'Thank you for your order');
    }

    public function destroy($id)
    {
        $pizza = Pizza::findOrFail($id);
        $pizza->delete();

        // return redirect('/pizzas');
        return redirect('/pizzas')->with('mssg', 'Order confirmed');
    }
}
