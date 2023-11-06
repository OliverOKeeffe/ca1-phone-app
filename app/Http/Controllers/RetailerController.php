<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Retailer;

class RetailerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $retailers = Retailer::orderBy('created_at', 'desc')->paginate(8);

        return view('retailers.index', [
            'retailers' => $retailers 
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('retailers.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $rules =[
            'name'=> 'required|string|unique:retailers,name|min:2|max:150',
            'founded'=> 'required|string|min:4|max:4',
            'num_locations'=> 'required|string|min:1|max:100',

        ];

        $messages=[
            'retailer.unique'=>'Retailer name should be unique'
        ];

        $request->validate($rules, $messages);


        $retailer = new Retailer;
        $retailer->name = $request->name;
        $retailer->founded = $request->founded;
        $retailer->num_locations = $request->num_locations;
        $retailer->save();

        return redirect()->route('retailers.index')->with('status', 'Created a new Retailer');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $retailer = Retailer::findOrFail($id);
        return view('retailers.show', [
            'retailer' => $retailer
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $retailer = Retailer::findOrFail($id);
        return view('retailers.edit', [
            'retailer' => $retailer
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $rules =[
            'name'=> "required|string|unique:retailers,name,{$id}|min:3|max:50",
            'founded'=> 'required|string|min:4|max:4',
            'num_locations'=> 'required|string|min:1|max:1000',

        ];

        $messages=[
            'name.unique'=>'Retailer title should be unique'
        ];

        $request->validate($rules, $messages);


        $retailer = Retailer::findOrFail($id);
        $retailer->name = $request->name;
        $retailer->founded = $request->founded;
        $retailer->founded = $request->founded;
        $retailer->num_locations = $request->num_locations;
        $retailer->save();

        return redirect()       
            ->route('retailers.index')
            ->with('status', ' Updated a Retailer');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $retailer = Retailer::findOrFail($id);
        $retailer->delete();

        return redirect()->route('retailers.index')->with('status', 'Retailer deleted successfully');
    }
}
