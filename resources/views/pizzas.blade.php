@extends('layouts.layout')

@section('content')
    <div
        class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center py-4 sm:pt-0">
        <div class="max-w-6xl mx-auto sm:px-6 lg:px-8">

            <div class="flex justify-center pt-8 sm:justify-start sm:pt-0">
                <h1 class="font-size-50px"><span>Pizza</span>'s List</h1>
            </div>
            <div class="text-center">

                @foreach($pizzas as $pizza)
                    <div>
                        {{-- veri tabanının tablo adları! --}}
                        <b>{{ $pizza->name  }}</b> - {{ $pizza['type'] }} - {{ $pizza->base  }}
                    </div>
                @endforeach

            </div>
        </div>
    </div>
@endsection
