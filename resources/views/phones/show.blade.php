@extends('layouts.myApp')

@section('content')
<h1>Show brand</h1>

<p>{{ $brand->name }}</p>
<p>{{ $brand->founded }}</p>
<p>{{ $brand->location }}</p>

<div>
<button type="button" class="text-blue-700 hover:text-white border border-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-2 mb-2 dark:border-blue-500 dark:text-blue-500 dark:hover:text-white dark:hover:bg-blue-500 dark:focus:ring-blue-800"><a href="{{ route('brands.edit', $brand->id) }}">Edit</a></button>

    <form method="POST" action="{{ route('brands.destroy' , $brand->id) }}">
        @csrf
        @method('DELETE')
        <button type="submit" class="text-red-700 hover:text-white border border-red-700 hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-red-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-2 mb-2 dark:border-red-500 dark:text-red-500 dark:hover:text-white dark:hover:bg-red-600 dark:focus:ring-red-900">Delete</button>
    </form>
    
</div>

@endsection