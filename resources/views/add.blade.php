@extends('layout')

@section('content')
    <div class="col-sm-6">
        <form method="post" action="{{ route('restaurant.add') }}">
           @csrf
            <div class="mb-3">
                <label>Name</label>
                <input type="text" name= "name" class="form-control" placeholder="Enter Name">
            </div>
            <div class="mb-3">
                <label>Email</label>
                <input type="email" name= "email" class="form-control" placeholder="Enter email">
            </div>
            <div class="mb-3">
                <label>Address</label>
                <input type="text" name= "address" class="form-control" placeholder="Enter Address">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
@endsection
