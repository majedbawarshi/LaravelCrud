@extends('layout')

@section('title', 'Details for ' .$customer->name )

@section('content')
    @include('customers.nav')
    <h1>Details for {{ $customer->name }}</h1>

    <div class="row">
        <div class="col-1">
            <a href="/customers/{{ $customer->id }}/edit">
                <button class="btn btn-primary" type="submit">Edit</button>
            </a>
        </div>
        <div class="col-1">
            <form action="/customers/{{ $customer->id }}" method="POST">
                @method('DELETE')
                @csrf
                <button class="btn btn-danger" type="submit">Delete</button>
            </form>
        </div>
    </div>
    <br>
    <div class="row">
        <div class="col-12">
            <h4><strong>Name</strong> {{ $customer->name }}</h4>
            <br>
            <h4><strong>Email</strong> {{ $customer->email }}</h4>
            <br>
            <h4><strong>Company</strong> {{ $customer->company->name }}</h4>
        </div>
    </div>
@endsection
