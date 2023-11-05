@extends('layouts.myApp')

@section('header')
<h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
    Retailers
</h2>
@endsection

@section('content')

<a href="{{ route('retailers.create') }}">Create</a>



<div class="relative overflow-x-auto shadow-md sm:rounded-lg">
    <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
            <tr>
                <th scope="col" class="px-6 py-3">
                    Name
                </th>
                <th scope="col" class="px-6 py-3">
                    Founded
                </th>
                <th scope="col" class="px-6 py-3">
                    Created
                </th>
                <th scope="col" class="px-6 py-3">
                    Action
                </th>
            </tr>
        </thead>
        <tbody>
     @forelse($retailers as $retailer)
        <tr class="bg-white border-b dark:bg-gray-900 dark:border-gray-700">
            <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                {{ $retailer->name }}
            </th>
            <td class="px-6 py-4">
                {{ $retailer->founded }}
            </td>
            <td class="px-6 py-4">
                {{ $retailer->num_location }}
            </td>
            <td class="px-6 py-4">
                <a href="{{ route('retailers.show', $retailer->id) }}">Read more</a>
            </td>
        </tr>

        @empty
        <h4>No Retailers Found!</h4>
        @endforelse
    </tbody>
</table>
@endsection