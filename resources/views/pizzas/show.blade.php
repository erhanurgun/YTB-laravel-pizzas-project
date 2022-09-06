@extends('layouts.app')

@section('title', 'Order Detail')

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
        <form action="{{ route('pizzas.destroy', $pizza->id) }}" method="POST">
            @csrf
            @method('DELETE')
            <button class="button" type="submit">Complete Order</button>
        </form>
    </div>

    <a class="back" href="{{ route('pizzas.index') }}"><- Back to all pizzas</a>
@endsection
