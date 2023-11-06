@extends('layouts.myApp')

@section('header')
<h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
    Brands
</h2>
@endsection

@section('content')

<button type="submit" class="text-green-700 hover:text-white border border-green-700 hover:bg-green-800 focus:ring-4 focus:outline-none focus:ring-green-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-2 mb-2 dark:border-green-500 dark:text-green-500 dark:hover:text-white dark:hover:bg-green-600 dark:focus:ring-green-800"><a href="{{ route('brands.create') }}">Create</a></button>



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
     @forelse($brands as $brand)
        <tr class="bg-white border-b dark:bg-gray-900 dark:border-gray-700">
            <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                {{ $brand->name }}
            </th>
            <td class="px-6 py-4">
                {{ $brand->founded }}
            </td>
            <td class="px-6 py-4">
                {{ $brand->location }}
            </td>
            <td class="px-6 py-4">
            <button type="button" class="text-gray-900 bg-white border border-gray-300 focus:outline-none hover:bg-gray-100 focus:ring-4 focus:ring-gray-200 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-gray-800 dark:text-white dark:border-gray-600 dark:hover:bg-gray-700 dark:hover:border-gray-600 dark:focus:ring-gray-700"><a href="{{ route('brands.show', $brand->id) }}">Read more</a></button>
            </td>
        </tr>

        @empty
        <h4>No Brands Found!</h4>
        @endforelse
    </tbody>
</table>
@endsection