@extends('layouts.app')

@section('title', 'Dashboard')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Dashboard') }}</div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif

                        {{ __('You are logged in!') }}
                        <p class="mt-4">
                            <a class="button-o" href="{{ route('pizzas.index') }}">View All Pizza Orders</a>
                            <a class="button-o" href="{{ route('pizzas.create') }}">Order a New Pizza</a>
                            <a class="button-o" href="{{ url('/') }}">Goto Welcome Page</a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
