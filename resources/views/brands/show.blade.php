@extends('layouts.myApp')

@section('content')
<h1>Show brand</h1>

<p>{{ $brand->name }}</p>
<p>{{ $brand->founded }}</p>
<p>{{ $brand->location }}</p>

<div>
    <a href="{{ route('brands.edit', $brand->id) }}">Edit</a>

    <form method="POST" action="{{ route('brands.destroy' , $brand->id) }}">
        @csrf
        @method('DELETE')
        <button type="submit">Delete</button>
    </form>
    
</div>

@endsection