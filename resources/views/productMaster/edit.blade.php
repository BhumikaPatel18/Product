@extends('layouts.app')

@section('content')
<div class="container">
    <h2 class="text-center">Edit Form</h2>
    <form action="{{route('productMaster.update',$productMaster->id)}}" method="Post"> {{--enctype = "multipart/form-data"--}}
        @csrf
        @method('PATCH')
        @include('productMaster.form')
        <button type="submit" class="btn btn-primary">Update Detail</button>
        <a href="{{route('productMaster.index')}}" class="btn btn-primary">Cancel</a>
    </form>
</div>

@endsection

