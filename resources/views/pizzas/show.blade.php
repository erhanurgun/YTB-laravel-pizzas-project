@extends('layouts.layout')

@section('content')
    <div class="wrapper pizza-details">
        <h2>Order for <span>{{ $pizza->name }}</span></h2>
        <p class="type"><b>Type:</b> {{ $pizza->type }}</p>
        <p class="base"><b>Base:</b> {{ $pizza->base }}</p>
        <p class="toppings"><b>Extra toppings:</b></p>
        <ul>
            @foreach($pizza->toppings as $topping)
                <li>{{ $topping }}</li>
            @endforeach
        </ul>
        <form action="/pizzas/{{ $pizza->id }}" method="POST">
            @csrf
            @method('DELETE')
            <button class="btn" type="submit">Complete Order</button>
        </form>
    </div>

    <a class="back" href="/pizzas"><- Back to all pizzas</a>
@endsection
