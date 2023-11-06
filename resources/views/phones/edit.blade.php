@extends('layouts.myApp')

@section('content')
<h3>Edit Phone</h3>    

{{-- @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif --}}

<form action="{{ route('phoness.update', $phone->id ) }}" method="post">
    @csrf
    @method('PUT')
    <div>
        <label for="">Model Name</label>

        <input type="text" name="model_name" id="model_name" value="{{ old('model_name')? : $phone->model_name }}"/>

        @if($errors->has('model_name'))
            <span>{{ $errors->first('model_name') }}</span>
        @endif
    </div>
    <div>
        <label for="">year</label>
        <input type="text" name="year" id="year" value="{{ old('year')? : $phone->year }}"/>
        @if($errors->has('year'))
        <span>{{ $errors->first('year') }}</span>
        @endif
    </div>
    <div>
        <label for="">battery_life</label>
        <input type="text" name="battery_life" id="battery_life" value="{{ old('battery_life')? : $phone->battery_life }}"/>
        @if($errors->has('battery_life'))
        <span>{{ $errors->first('battery_life') }}</span>
        @endif
    </div>
    <div>
        <label for="">height</label>
        <input type="text" name="height" id="height" value="{{ old('height')? : $phone->height }}"/>
        @if($errors->has('height'))
        <span>{{ $errors->first('height') }}</span>
        @endif
    </div>
    <div>
        <label for="">weight</label>
        <input type="text" name="weight" id="weight" value="{{ old('weight')? : $phone->weight }}"/>
        @if($errors->has('weight'))
        <span>{{ $errors->first('weight') }}</span>
        @endif
    </div>
    <div>
        <label for="">brand_id</label>
        <input type="text" name="brand_id" id="brand_id" value="{{ old('brand_id')? : $phone->brand_id }}"/>
        @if($errors->has('brand_id'))
        <span>{{ $errors->first('brand_id') }}</span>
        @endif
    </div>
    <button type="submit">Create</button>
</form>
@endsection