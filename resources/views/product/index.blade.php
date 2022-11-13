@extends('layouts.app')

@section('content')

<div class="container">
    <a href="{{route('product.create') }}" class="btn btn-primary float-end">Insert new Record </a>
        <table class="table table-striped table-inverse table-responsive">
            <thead class="thead-inverse">
                <tr>
                    <th>Name</th>
                    <th>Description</th>
                    <th>Price</th>
                    <th>Quantity</th>
                    <th>Total</th>
                    <th>Owner</th>
                    <th>Action</th>

                </tr>
                </thead>
                <tbody>
                    @foreach ($products as $product)
                        <tr>
                            {{-- <td><img src="{{ asset('storage\uploads\/').$product->image}}" class="rounded-circle m-auto" width="40" height="40" ></td> --}}
                            <td>{{$product->name}}</td>
                            <td>{{$product->description}}</td>
                            <td>{{$product->price}}</td>
                            <td>{{$product->quantity}}</td>
                            <td>{{$product->price + $product->quantity}}</td>
                            <td>{{$product->owner}}</td>
                            <td><a href="{{route('product.show',$product->id)}}" class="btn btn-primary">Show</a></td>
                            <td>
                                <form action="{{route('product.destroy',$product->id)}}" method="post">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger">Delete</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
        </table>

</div>
@endsection
