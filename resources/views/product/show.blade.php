@extends('layouts.app')

@section('content')
    <h2 class="text-center">View Details</h2>
    <div class="container">
        <div class="col-5 m-auto">

            <div class="row">
                <div class="my-3">
                    <ul class="list-group">
                        <li class="list-group-item"><strong>Name : </strong> {{ $product->name }}</li>
                        <li class="list-group-item"><strong>Description : </strong> {{ $product->description }}</li>
                        <li class="list-group-item"><strong>Price : </strong>{{ $product->price }}</li>
                        <li class="list-group-item"><strong>Quantity : </strong> {{ $product->quantity }}</li>
                    </ul>
                </div>
            </div>

            <div class="mt-3">
                <a href="{{route('product.edit', $product->id)}}" class="btn btn-primary">Edit</a>
                <a href="{{ route('product.index') }}" class="btn btn-primary">Back</a>
            </div>
        </div>
    </div>
@endsection
