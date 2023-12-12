@extends('layouts.admin')

@section('content')
<h3>Edit Brand</h3>    

{{-- @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif --}}

<form action="{{ route('admin.brands.update', $brand->id ) }}" method="post">
    @csrf
    @method('PUT')
    <div>
        <label for="">Name</label>

        <input type="text" name="name" id="name" value="{{ old('name')? : $brand->name }}"/>

        @if($errors->has('name'))
            <span>{{ $errors->first('name') }}</span>
        @endif
    </div>
    <div>
        <label for="">founded</label>
        <input type="text" name="founded" id="founded" value="{{ old('founded')? : $brand->founded }}"/>
        @if($errors->has('founded'))
        <span>{{ $errors->first('founded') }}</span>
        @endif
    </div>
    <div>
        <label for="">location</label>
        <input type="text" name="location" id="location" value="{{ old('location')? : $brand->location }}"/>
        @if($errors->has('location'))
        <span>{{ $errors->first('location') }}</span>
        @endif
    </div>



    <button type="submit" class="text-green-700 hover:text-white border border-green-700 hover:bg-green-800 focus:ring-4 focus:outline-none focus:ring-green-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-2 mb-2 dark:border-green-500 dark:text-green-500 dark:hover:text-white dark:hover:bg-green-600 dark:focus:ring-green-800">Save Book</button>
    <button type="submit" class="text-gray-900 hover:text-white border border-gray-800 hover:bg-gray-900 focus:ring-4 focus:outline-none focus:ring-gray-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-2 mb-2 dark:border-gray-600 dark:text-gray-400 dark:hover:text-white dark:hover:bg-gray-600 dark:focus:ring-gray-800"><a href="{{ route('admin.brands.index') }}">Back</a></button>

</form>
@endsection