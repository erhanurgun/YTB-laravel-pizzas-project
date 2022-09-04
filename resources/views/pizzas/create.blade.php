@extends('layouts.layout')

@section('content')
    <div class="wrapper create-pizza">
        <h1>Create a new<span>pizza</span>
            <form action="/pizzas" method="POST">
                @csrf {{-- güvenli form gönderme için gerekli --}}
                <label for="name">Your name:</label>
                <input type="text" name="name" id="name">

                <label for="type">Choose pizza type:</label>
                <select name="type" id="type">
                    <option value="margherita">Margherita</option>
                    <option value="hawaiian">Hawaiian</option>
                    <option value="veg supreme">Veg Supreme</option>
                    <option value="volcano">Volcano</option>
                </select>

                <label for="base">Choose base type:</label>
                <select name="base" id="base">
                    <option value="chessy crust">Chessy Crust</option>
                    <option value="garlic crust">Garlic Crust</option>
                    <option value="thin & crispy">Thin & Crispy</option>
                    <option value="thick">Thick</option>
                </select>

                <input type="submit" value="Order Pizza">
            </form>
        </h1>
    </div>
@endsection
