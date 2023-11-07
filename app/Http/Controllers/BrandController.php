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

        // set the validation rules for the data
        $rules =[
            'name'=> 'required|string|unique:brands,name|min:2|max:150',
            'founded'=> 'required|string|min:4|max:4',
            'location'=> 'required|string|min:5|max:30',

        ];
        // display the message if the brand is not a unique name
        $messages=[
            'brand.unique'=>'Brand name should be unique'
        ];
        // this requests the rules from above for the validation process
        $request->validate($rules, $messages);


        $brand = new Brand;
        $brand->name = $request->name;
        $brand->founded = $request->founded;
        $brand->location = $request->location;
        $brand->save();

        return redirect()->route('brands.index')->with('status', 'Created a new Brand');
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
        $brand = Brand::findOrFail($id);
        // returns the brands edit page so it knows the rules for the edit
        return view('brands.edit', [
            'brand' => $brand
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $rules =[
            'name'=> "required|string|unique:brands,name,{$id}|min:3|max:50",
            'founded'=> 'required|string|min:4|max:4',
            'location'=> 'required|string|min:5|max:1000',

        ];

        $messages=[
            'name.unique'=>'Brand title should be unique'
        ];

        $request->validate($rules, $messages);


        $brand = Brand::findOrFail($id);
        $brand->name = $request->name;
        $brand->founded = $request->founded;
        $brand->location = $request->location;
        $brand->save();

        return redirect()       
            ->route('brands.index')
            ->with('status', ' Updated a Brand');
    
}

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $brand = Brand::findOrFail($id);
        $brand->delete();

        return redirect()->route('brands.index')->with('status', 'Brand deleted successfully');
    }

}