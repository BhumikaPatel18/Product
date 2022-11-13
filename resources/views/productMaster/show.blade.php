@extends('layouts.app')

@section('content')
    <h2 class="text-center">View Details</h2>
    <div class="container">
        <div class="col-5 m-auto">

            <div class="row">
                <div class="my-3">
                    <ul class="list-group">
                        <li class="list-group-item"><strong>Name : </strong> {{ $productMaster->productName }}</li>
                        <li class="list-group-item"><strong>Owner : </strong> {{ $productMaster->owner }}</li>
                    </ul>
                </div>
            </div>

            <div class="mt-3">
                <a href="{{route('productMaster.edit', $productMaster->id)}}" class="btn btn-primary">Edit</a>
                <a href="{{ route('productMaster.index') }}" class="btn btn-primary">Back</a>
            </div>
        </div>
    </div>
@endsection
