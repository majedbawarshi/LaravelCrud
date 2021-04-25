@extends('layout')

@section('title', 'Edit Details for '.$customer->name)

@section('content')
    @include('customers.nav')
    <h1>Edit Details for {{ $customer->name }}</h1>

    <br>
    <form action="/customers/{{ $customer->id }}" method="POST">
        @method('PATCH')
        @include('customers.form')

        <button class="btn btn-primary" type="submit">Save Customer</button>
    </form>
@endsection
