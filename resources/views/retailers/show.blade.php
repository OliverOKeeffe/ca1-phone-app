@extends('layouts.myApp')

@section('content')
<h1>Show retailer</h1>

<p>{{ $retailer->name }}</p>
<p>{{ $retailer->founded }}</p>
<p>{{ $retailer->num_location }}</p>

<div>
    <a href="{{ route('retailers.edit', $retailer->id) }}">Edit</a>

    <form method="POST" action="{{ route('retailers.destroy' , $retailer->id) }}">
        @csrf
        @method('DELETE')
        <button type="submit">Delete</button>
    </form>
    
</div>

@endsection