@extends('layouts.app')

@section('title', 'Create Order')

@section('content')
    <div class="wrapper create-pizza">
        <h2 class="mb-4">Create a New Pizza</h2>

        <form class="frm-order" action="{{ route('pizzas.store') }}" method="POST">
            @csrf {{-- güvenli form gönderme için gerekli --}}
            <table>
                <tr>
                    <td><label class="f-r" for="name">Your name:</label></td>
                    <td><input type="text" name="name" id="name" placeholder="enter your name"></td>
                </tr>
                <tr>
                    <td><label class="f-r" for="type">Choose pizza type:</label></td>
                    <td>
                        <select name="type" id="type">
                            <option value="0" disabled selected>--- choose action ---</option>
                            <option value="margherita">Margherita</option>
                            <option value="hawaiian">Hawaiian</option>
                            <option value="veg supreme">Veg Supreme</option>
                            <option value="volcano">Volcano</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td><label class="f-r" for="base">Choose base type:</label></td>
                    <td>
                        <select name="base" id="base">
                            <option value="0" disabled selected>--- choose action ---</option>
                            <option value="chessy crust">Chessy Crust</option>
                            <option value="garlic crust">Garlic Crust</option>
                            <option value="thin & crispy">Thin & Crispy</option>
                            <option value="thick">Thick</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td><label class="f-r">Extra toppings:</label></td>
                    <td>
                        <table>
                            <tr>
                                <td><input type="checkbox" name="toppings[]" value="mushrooms" id="mushrooms"></td>
                                <td><label for="mushrooms">&nbsp; Mushrooms</label></td>
                            </tr>
                            <tr>
                                <td><input type="checkbox" name="toppings[]" value="peppers" id="peppers"></td>
                                <td><label for="peppers">&nbsp; Peppers</label></td>
                            </tr>
                            <tr>
                                <td><input type="checkbox" name="toppings[]" value="garlic" id="garlic"></td>
                                <td><label for="garlic">&nbsp; Garlic</label></td>
                            </tr>
                            <tr>
                                <td><input type="checkbox" name="toppings[]" value="olives" id="olives"></td>
                                <td><label for="olives">&nbsp; Olives</label></td>
                            </tr>
                        </table>
                    </td>
                </tr>
                <tr>
                    <td colspan="2"><input type="submit" value="Order Pizza"></td>
                </tr>
            </table>
        </form>
    </div>

    <a class="back" href="{{ route('pizzas.index') }}"><- Back to homepage</a>
@endsection
