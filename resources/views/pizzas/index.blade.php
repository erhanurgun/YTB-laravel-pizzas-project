@extends('layouts.layout')

@section('content')
    <div
        class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center py-4 sm:pt-0">
        <div class="max-w-6xl mx-auto sm:px-6 lg:px-8">

            <div class="flex justify-center pt-8 sm:justify-start sm:pt-0">
                <h1 class="title">
                    <img src="/img/pizza.png" alt="Pizza's Icon">
                    <span>Pizza</span>'s List
                </h1>
            </div>
            <div class="pizza-details">

                @foreach($pizzas as $pizza)
                    <div>
                        {{-- veri tabanının tablo adları! --}}
                        <a class="a-link" href="/pizzas/{{ $pizza->id  }}">
                            <b>{{ $pizza->name  }}</b> - {{ $pizza['type'] }} - {{ $pizza->base  }}
                        </a>
                    </div>
                @endforeach

            </div>
            <a class="back" href="/"><- Back to homepage</a>

        </div>
    </div>
@endsection
