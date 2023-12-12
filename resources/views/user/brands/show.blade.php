@extends('layouts.myApp')

@section('content')
<h1><strong>Show Brand</strong></h1>

<p>{{ $brand->name }}</p>
<p>{{ $brand->founded }}</p>
<p>{{ $brand->location }}</p>
<p>{{ $brand->phone_id }}</p>

<div>
        @csrf
        @method('DELETE')
        <button type="submit" class="text-gray-900 hover:text-white border border-gray-800 hover:bg-gray-900 focus:ring-4 focus:outline-none focus:ring-gray-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-2 mb-2 dark:border-gray-600 dark:text-gray-400 dark:hover:text-white dark:hover:bg-gray-600 dark:focus:ring-gray-800"><a href="{{ route('brands.index') }}">Back</a></button>

    </form>
    
</div>

@endsection