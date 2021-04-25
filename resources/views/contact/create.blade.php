@extends('layout')

@section('title', 'Contact')

@section('content')
    <h1>Contact Prof. Dr. Majed Bawarshi for more info:</h1>

    <form action="/contact" method="POST">
        <div class="form-group">
            <label for="name">Name</label>
            <input type="text" placeholder="Name" name="name" value="{{ old('name') }}" class="form-control">
            <div class="text-danger">{{$errors->first('name')}}</div>
        </div>

        <div class="form-group">
            <label for="email">Email</label>
            <input type="text" placeholder="Email" name="email" value="{{ old('email') }}" class="form-control">
            <div class="text-danger">{{$errors->first('email')}}</div>
        </div>

        <div class="form-group">
            <label for="message">Message</label>
            <textarea name="message" id="message" cols="30" rows="10" class="form-control">{{ old('message') }}</textarea>
            <div class="text-danger">{{$errors->first('message')}}</div>
        </div>
        @csrf

        <button type="submit" class="btn btn-primary">Send Message</button>
    </form>
@endsection
