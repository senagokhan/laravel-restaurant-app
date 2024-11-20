@extends('layout')

@section('content')
    <h1>Register New User</h1>
    @if(Session::has('status'))
        <div class="alert alert-success">
            {{ Session::get('status') }}
        </div>
    @endif
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form method="post" action="{{ route('register.submit') }}">
        @csrf
        <div class="mb-3">
            <label for="name">Name</label>
            <input type="text" id="name" name="name" class="form-control" placeholder="Enter Name" value="{{ old('name') }}" required>
        </div>
        <div class="mb-3">
            <label for="email">Email</label>
            <input type="email" id="email" name="email" class="form-control" placeholder="Enter Email" value="{{ old('email') }}" required>
        </div>
        <div class="mb-3">
            <label for="password">Password</label>
            <input type="password" id="password" name="password" class="form-control" placeholder="Enter Password" required>
        </div>
        <div class="mb-3">
            <label for="password_confirmation">Confirm Password</label>
            <input type="password" id="password_confirmation" name="password_confirmation" class="form-control" placeholder="Confirm Password" required>
        </div>
        <div class="mb-3">
            <label for="contact">Contact</label>
            <input type="text" id="contact" name="contact" class="form-control" placeholder="Enter Contact Number" value="{{ old('contact') }}">
        </div>
        <button type="submit" class="btn btn-primary">Register</button>
    </form>
@endsection
