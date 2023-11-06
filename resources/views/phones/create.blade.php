@extends('layouts.myApp')

@section('content')
<h3>Create Phone</h3>    

{{-- @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif --}}

<form action="{{ route('Phones.store') }}" method="post">
    @csrf
    <div>
        <label for="">Model Name</label>
        <input type="text" name="model_name" id="model_name" value="{{  old('model_name') }}"/>
        @if($errors->has('model_name'))
        <span>{{ $errors->first('model_name') }}</span>
        @endif
    </div>
    <div>
        <label for="">year</label>
        <input type="text" name="year" id="year" value="{{  old('year') }}"/>
        @if($errors->has('year'))
        <span>{{ $errors->first('year') }}</span>
        @endif
    </div>
    <div>
        <label for="">battery_life</label>
        <input type="text" name="battery_life" id="battery_life" value="{{  old('battery_life') }}"/>
        @if($errors->has('battery_life'))
        <span>{{ $errors->first('battery_life') }}</span>
        @endif
    </div>
    <div>
        <label for="">height</label>
        <input type="text" name="height" id="height" value="{{  old('height') }}"/>
        @if($errors->has('height'))
        <span>{{ $errors->first('height') }}</span>
        @endif
    </div>
    <div>
        <label for="">weight</label>
        <input type="text" name="weight" id="weight" value="{{  old('weight') }}"/>
        @if($errors->has('weight'))
        <span>{{ $errors->first('weight') }}</span>
        @endif
    </div>
    <div>
        <label for="">brand_id</label>
        <input type="text" name="brand_id" id="brand_id" value="{{  old('brand_id') }}"/>
        @if($errors->has('brand_id'))
        <span>{{ $errors->first('brand_id') }}</span>
        @endif
    </div>
    <button type="submit" class="text-green-700 hover:text-white border border-green-700 hover:bg-green-800 focus:ring-4 focus:outline-none focus:ring-green-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-2 mb-2 dark:border-green-500 dark:text-green-500 dark:hover:text-white dark:hover:bg-green-600 dark:focus:ring-green-800">Create</button>
</form>
@endsection



