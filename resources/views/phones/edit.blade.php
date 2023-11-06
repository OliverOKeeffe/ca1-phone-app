@extends('layouts.myApp')

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

<form action="{{ route('brands.update', $brand->id ) }}" method="post">
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
    <button type="submit">Create</button>
</form>
@endsection