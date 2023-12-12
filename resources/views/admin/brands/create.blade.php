@extends('layouts.admin')

@section('content')
<h3><strong>Create Brand</strong></h3>    

{{-- @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif --}}
<!-- Creating the text boxes to add data to to create brands -->
<form action="{{ route('admin.brands.store') }}" method="post">    
    @csrf
    <div>
        <label for="">Name</label>
        <input type="text" name="name" id="name" value="{{  old('name') }}"/>
        @if($errors->has('name'))
        <span>{{ $errors->first('name') }}</span>
        @endif
    </div>
    <div>
        <label for="">Founded</label>
        <input type="text" name="founded" id="founded" value="{{  old('founded') }}"/>
        @if($errors->has('founded'))
        <span>{{ $errors->first('founded') }}</span>
        @endif
    </div>
    <div>
        <label for="">Location</label>
        <input type="text" name="location" id="location" value="{{  old('location') }}"/>
        @if($errors->has('location'))
        <span>{{ $errors->first('location') }}</span>
        @endif
    </div>

 

    <button type="submit" class="text-green-700 hover:text-white border border-green-700 hover:bg-green-800 focus:ring-4 focus:outline-none focus:ring-green-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-2 mb-2 dark:border-green-500 dark:text-green-500 dark:hover:text-white dark:hover:bg-green-600 dark:focus:ring-green-800">Create</button>
    <button type="submit" class="text-blue-700 hover:text-white border border-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-2 mb-2 dark:border-blue-500 dark:text-blue-500 dark:hover:text-white dark:hover:bg-blue-500 dark:focus:ring-blue-800"><a href="{{ route('admin.brands.index') }}">Back</a></button>
</form>
@endsection



