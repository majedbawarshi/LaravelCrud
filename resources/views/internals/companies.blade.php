@extends('layout')

@section('title', 'Companies')

@section('content')
    <h1>We are glad to have you as a participated company in our system.</h1>

    <br>
    <form action="companies" method="POST">
        <h6>Join the registered companies now!</h6>
        @csrf
        <div class="form-group">
            <label for="name">Company's name</label>
            <input type="text" placeholder="Name" name="name" value="{{old('name')}}" class="form-control">
            <div class="text-danger">{{$errors->first('name')}}</div>
        </div>

        <div class="form-group">
            <label for="email">Phone</label>
            <input type="text" placeholder="Phone" name="phone" value="{{old('phone')}}" class="form-control">
            <div class="text-danger">{{$errors->first('phone')}}</div>
        </div>

        <button class="btn btn-primary" type="submit">Join</button>
    </form>
    <hr>


    <br><br>
    <h4>Our Currently registered companies</h4><br>
    <div class="row">
        <div class="col-12">
            <table class="table table-bordered table-hover">
                <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Name</th>
                    <th scope="col">Email</th>
                </tr>
                </thead>
                <tbody>
                @foreach($companies as $company)
                    <tr>
                        <th scope="row">{{$company->id}}</th>
                        <td>{{$company->name}}</td>
                        <td>{{$company->phone}}</td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
