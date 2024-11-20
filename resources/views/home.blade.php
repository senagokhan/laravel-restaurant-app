@extends('layout')

@section('content')

    <div class="text-center py-5">
        <h1 class="display-4 text-primary font-weight-bold">Welcome to the World of Restaurants!</h1>
        <hr class="my-4">
    </div>

    <div class="text-center py-4">
        <h2 class="font-weight-bold text-secondary">Popular Restaurants</h2>
        <p class="lead text-muted">Explore the popular restaurants chosen by food lovers.</p>
    </div>

    <div class="row text-center py-4">
        <div class="col-md-4">
            <h3 class="font-weight-bold text-info">500+</h3>
            <p class="text-muted">Number of restaurants added so far</p>
        </div>
        <div class="col-md-4">
            <h3 class="font-weight-bold text-success">10</h3>
            <p class="text-muted">Restaurants added this week</p>
        </div>
        <div class="col-md-4">
            <h3 class="font-weight-bold text-warning">100</h3>
            <p class="text-muted">Popular restaurants</p>
        </div>
    </div>
    <div class="text-center py-5">
        <h2 class="font-weight-bold text-dark">Discover Restaurants</h2>
        <hr class="my-4">
        <p class="h4 text-dark">For more information about restaurants, check out our full list.</p>
    </div>
@endsection
