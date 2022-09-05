@extends('layouts.app')

@section('title', 'Homepage')

@section('content')
    <div
        class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center py-4 sm:pt-0">
        <div class="max-w-6xl mx-auto sm:px-6 lg:px-8">
            <div class="text-center justify-center">
                <div class="pt-8 sm:justify-start sm:pt-0">
<!--                    <img src="/img/pizza-house.png" alt="Pizza">
                    <h1 class="title">The North's <span>Best</span> Pizza</h1>-->
                    <img class="mb-4 img-hand" src="/img/hand_2.png" alt="Pizza">
                </div>

                @if(session('mssg'))
                    <p class="mssg">{{ session('mssg')  }}</p>
                @endif

                <a class="button-o" href="{{ url('/pizzas') }}">All Pizza </a>
                <a class="button" href="{{ url('/pizzas/create') }}">Order a Pizza </a>
            </div>
        </div>
    </div>
@endsection
