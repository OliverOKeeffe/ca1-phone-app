@extends('layouts.myApp')

@section('content')
<h1>Show Phone</h1>

<p>{{ $phone->model_name }}</p>
<p>{{ $phone->year }}</p>
<p>{{ $phone->battery_life }}</p>
<p>{{ $phone->height }}</p>
<p>{{ $phone->weight }}</p>
<p>{{ $phone->brand_id }}</p>

<div>
<button type="button" class="text-blue-700 hover:text-white border border-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-2 mb-2 dark:border-blue-500 dark:text-blue-500 dark:hover:text-white dark:hover:bg-blue-500 dark:focus:ring-blue-800"><a href="{{ route('phones.edit', $phone->id) }}">Edit</a></button>

    <form method="POST" action="{{ route('phones.destroy' , $phone->id) }}">
        @csrf
        @method('DELETE')
        <button type="submit" class="text-red-700 hover:text-white border border-red-700 hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-red-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-2 mb-2 dark:border-red-500 dark:text-red-500 dark:hover:text-white dark:hover:bg-red-600 dark:focus:ring-red-900">Delete</button>
        <button type="submit" class="text-gray-900 hover:text-white border border-gray-800 hover:bg-gray-900 focus:ring-4 focus:outline-none focus:ring-gray-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-2 mb-2 dark:border-gray-600 dark:text-gray-400 dark:hover:text-white dark:hover:bg-gray-600 dark:focus:ring-gray-800"><a href="{{ route('phones.index') }}">Back</a></button>

    </form>
    
</div>

@endsection