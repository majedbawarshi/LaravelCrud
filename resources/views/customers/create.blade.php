@extends('layout')

@section('title', 'Add Customer')

@section('content')
    @include('customers.nav')
    <h1>Add New Customer</h1>

    <br>
    <form action="/customers" method="POST">
        @include('customers.form')

        <button class="btn btn-primary" type="submit">Add Customer</button>
    </form>
@endsection
