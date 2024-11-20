@extends('layout')

@section('content')
    <div class="col-sm-6">
        <h1>Edit Restaurant Details</h1>
        <form method="post" action="/edit/{{$data->id}}">
            @csrf
            @method('PUT')
            <input type="hidden" name="id" value="{{$data->id}}">
            <div class="mb-3">
                <label>Name</label>
                <input type="text" name="name" class="form-control" value="{{$data->name}}" placeholder="Enter Name">
            </div>
            <div class="mb-3">
                <label>Email</label>
                <input type="email" name="email" class="form-control" value="{{$data->email}}" placeholder="Enter email">
            </div>
            <div class="mb-3">
                <label>Address</label>
                <input type="text" name="address" class="form-control" value="{{$data->address}}" placeholder="Enter Address">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
@endsection
