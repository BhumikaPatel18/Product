@extends('layouts.app')

@section('content')
<div class="container">
    <div class="col-8 m-auto">
    <h2 class="text-center">Create Form</h2>
        <form action="{{route('product.store')}}" method="POST"> {{-- enctype = "multipart/form-data" --}}
            @csrf
            @include('product.form')

            <button type="submit" class="btn btn-primary">Save</button>
            <a href="{{route('product.index')}}" class="btn btn-primary">Cancel</a>

        </form>
</div>
@endsection

