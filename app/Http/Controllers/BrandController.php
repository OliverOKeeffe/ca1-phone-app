<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Brand;

class BrandController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $brands = Brand::orderBy('created_at', 'desc')->paginate(8);

        return view('brands.index', [
            'brands' => $brands 
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('brands.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //dd($request->title)

        //validation rules
        $rules =[
            'name'=> 'required|string|unique:brands,title|min:2|max:150',
            'founded'=> 'required|string|min:4|max:4',
            'location'=> 'required|string|min:5|max:30',

        ];

        $messages=[
            'brand.unique'=>'Brand name should be unique'
        ];

        $request->validate($rules, $messages);


        $brand = new Brand;
        $brand->name = $request->name;
        $brand->founded = $request->founded;
        $brand->location = $request->location;
        $brand->save();

        return redirect()->route('brands.index')->with('status', 'Created a new Brand');
    }

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $brand = Brand::findOrFail($id);
        return view('brands.show', [
            'brand' => $brand
        ]);

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
