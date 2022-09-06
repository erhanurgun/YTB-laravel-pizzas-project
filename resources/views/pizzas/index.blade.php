@extends('layouts.app')

@section('title', 'Order List')

@section('content')
    <div
        class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center py-4 sm:pt-0">
        <div class="max-w-6xl mx-auto sm:px-6 lg:px-8">

            <div class="flex justify-center pt-8 sm:justify-start sm:pt-0">
                <h1 class="title">
                    List of Ordered <span>Pizza</span>'s
                </h1>
            </div>
            <div class="pizza-details">

                @if(count($pizzas) > 0)
                    <table class="table table-hover">
                        <thead class="thead-dark">
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col"><i class="fa fa-calendar"></i> Order Date</th>
                            <th scope="col"><i class="fa fa-user"></i> User</th>
                            <th scope="col"><i class="fa fa-flag"></i> Order Type</th>
                            <th scope="col"><i class="fa fa-deaf"></i> Order Base</th>
                            <th scope="col"><i class="fa fa-link"></i> Go</th>
                        </tr>
                        </thead>
                        @foreach($pizzas as $key => $pizza)
                            <tbody>
                            <tr>
                                <th scope="row">{{ $key + 1 }}</th>
                                <td>
                                    <i class="fa fa-calendar-alt"></i>
                                    {{ $pizza->created_at->format('d.m.Y') }}
                                    <i class="fa fa-clock"></i>
                                    {{ $pizza->created_at->format('H:i:s') }}
                                </td>
                                <td>{{ $pizza->name  }}</td>
                                <td>{{ $pizza->type }}</td>
                                <td>{{ $pizza->base  }}</td>
                                <td class="text-center">
                                    <a class="btn btn-sm btn-outline-warning"
                                       href="{{ route('pizzas.show', $pizza->id) }}"
                                       data-toggle="tooltip" data-placement="top" title="See order details">
                                        <i class="fa fa-link"></i>
                                    </a>
                                </td>
                            </tr>
                            </tbody>

                        @endforeach
                    </table>

                @else
                    <div class="no-data txt-x"> {{ __('No data found!') }} </div>
                @endif

            </div>

            @if(session('mssg'))
                <p class="mssg mt-4 text-center">{{ session('mssg')  }}</p>
            @endif

            <a class="back" href="{{ url('/') }}"><- Back to homepage</a>

        </div>
    </div>
@endsection
