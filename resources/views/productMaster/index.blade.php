@extends('layouts.app')

@section('content')

<div class="container">
    <a href="{{route('productMaster.create')}}" class="btn btn-primary float-end">Insert New Record</a>
        <table class="table table-striped table-inverse table-responsive">
            <thead class="thead-inverse">
                <tr>
                    <th>ProductName</th>
                    <th>Owner</th>
                    <th>Action</th>
                </tr>
                </thead>
                @foreach ($productMasters as $productMaster)
                <tbody>
                    <tr>
                        <td>{{$productMaster->productName}}</td>
                        <td>{{$productMaster->owner}}</td>
                        <td><a href="{{route('productMaster.show',$productMaster->id)}}" class="btn btn-primary">Show</a></td>
                        <td>
                            <form action="{{route('productMaster.destroy',$productMaster->id)}}" method="post">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Delete</button>
                            </form>
                        </td>
                    </tr>
                </tbody>
                @endforeach
        </table>
</div>

@endsection

