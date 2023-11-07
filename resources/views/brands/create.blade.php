@extends('layouts.myApp')

@section('content')
<h3>Create Brand</h3>    

{{-- @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif --}}

<form action="{{ route('brands.store') }}" method="post">
    @csrf

    <div class="grid gap-6 mb-6 md:grid-cols-2">
        <div>
            <label for="name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Name</label>
            <input type="text" id="name" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required>
        </div>
        <div>
            <label for="founded" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Founded</label>
            <input type="text" id="founded" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required>
        </div>
        <div>
            <label for="location" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Location</label>
            <input type="text" id="location" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required>
        </div> 
    <!-- edited the create button using tailwind css -->
    <button type="submit" class="text-green-700 hover:text-white border border-green-700 hover:bg-green-800 focus:ring-4 focus:outline-none focus:ring-green-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-2 mb-2 dark:border-green-500 dark:text-green-500 dark:hover:text-white dark:hover:bg-green-600 dark:focus:ring-green-800">Create</button>
    <!-- Created a back button that brought you back to your previous page and then styled it using tailwind -->
    <button type="submit" class="text-blue-700 hover:text-white border border-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-2 mb-2 dark:border-blue-500 dark:text-blue-500 dark:hover:text-white dark:hover:bg-blue-500 dark:focus:ring-blue-800"><a href="{{ route('brands.index') }}">Back</a></button>
</form>

<!-- <div>
        <label for="">Name</label>
        <input type="text" name="name" id="name" value="{{  old('name') }}"/>
        @if($errors->has('name'))
        <span>{{ $errors->first('name') }}</span>
        @endif
    </div>
    <div>
        <label for="">founded</label>
        <input type="text" name="founded" id="founded" value="{{  old('founded') }}"/>
        @if($errors->has('founded'))
        <span>{{ $errors->first('founded') }}</span>
        @endif
    </div>
    <div>
        <label for="">location</label>
        <input type="text" name="location" id="location" value="{{  old('location') }}"/>
        @if($errors->has('location'))
        <span>{{ $errors->first('location') }}</span>
        @endif
    </div> -->

@endsection



