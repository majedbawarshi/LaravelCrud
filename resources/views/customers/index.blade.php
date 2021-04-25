@extends('layout')

@section('title', 'Customers')

@section('content')
    @include('customers.nav')
    <h1>Our Customers</h1>
    <div class="row">
        <div class="col-12">
            <table class="table table-bordered table-hover">
                <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Name</th>
                    <th scope="col">Company</th>
                    <th scope="col">Status</th>
                </tr>
                </thead>
                <tbody>
                @foreach($customers as $customer)
                    <tr>
                        <th scope="row">{{$customer->id}}</th>
                        <td>
                            <a href="/customers/{{ $customer->id }}">{{$customer->name}}</a>
                        </td>
                        <td>{{$customer->company->name}}</td>
                        <td><span class="{{ $customer->active == 'Active' ? 'text-primary' : 'text-danger' }}"> {{ $customer->active }} </span></td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
    {{--<div class="row">
        <div class="col-12">
            <h3>Companies customers</h3><br>
        </div>
        @foreach($companies as $company)
            <div class="col-3">
                <h4>{{ $company->name }}</h4>
                <ul>
                    @foreach($company->customers as $customer)
                        <li>{{ $customer->name }}</li>
                    @endforeach
                </ul>
            </div>
        @endforeach
    </div>--}}
@endsection
