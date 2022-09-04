@extends('layouts.layout')

@section('content')
    <div class="wrapper pizza-details">
        <h1>Order for <span>{{ $pizza->name }}</span></h1>
        <p class="type"><b>Type:</b> {{ $pizza->type }}</p>
        <p class="base"><b>Base:</b> {{ $pizza->base }}</p>
    </div>
    <a href="/pizzas" class="back"><- Back to all pizzas</a>
@endsection
