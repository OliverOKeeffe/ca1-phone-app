<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Phone;

class PhoneController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $phones = Phone::paginate(10);
        return view('admin.phones.index')->with('phone', $phone);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $retailers = Retailer::all();
        $brands = Brand::all();

        return view('admin.phones.create')->with('Retailers', $retailers)
                                   ->with('Brands', $brands);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
         //dd($request->title)

        //validation rules
        $rules =[
            'model_name'=> 'required|string|unique:phones,model_name|min:2|max:150',
            'year'=> 'required|string|min:4|max:4',
            'battery_life'=> 'required|string|min:5|max:30',
            'height'=> 'required|string|min:5|max:30',
            'weight'=> 'required|string|min:2|max:30',
            'brand_id'=> 'required|string|min:1|max:30',

        ];

        $messages=[
            'phone.unique'=>'Phone model_name should be unique'
        ];

        $request->validate($rules, $messages);


        $phone = new Phone;
        $phone->model_name = $request->model_name;
        $phone->year = $request->year;
        $phone->battery_life = $request->battery_life;
        $phone->height = $request->height;
        $phone->weight = $request->weight;
        $phone->brand_id = $request->brand_id;
        $phone->save();

        return redirect()->route('phones.index')->with('status', 'Created a new Phone');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $phone = Phone::findOrFail($id);

        return view('admin.phones.show', [
            'phone' =>$phone
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $phone = Phone::findOrFail($id);
        return view('phones.edit', [
            'phone' => $phone
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $rules =[
            'model_name'=> "required|string|unique:phones,model_name,{$id}|min:3|max:50",
            'year'=> 'required|string|min:4|max:4',
            'battery_life'=> 'required|string|min:3|max:100',
            'height'=> 'required|string|min:3|max:100',
            'weight'=> 'required|string|min:2|max:100',
            'brand_id'=> 'required|string|min:1|max:100',

        ];

        $messages=[
            'model_name.unique'=>'Phone model name should be unique'
        ];

        $request->validate($rules, $messages);


        $phone = Phone::findOrFail($id);
        $phone->model_name = $request->model_name;
        $phone->year = $request->year;
        $phone->battery_life = $request->battery_life;
        $phone->height = $request->height;
        $phone->weight = $request->weight;
        $phone->brand_id = $request->brand_id;
        $phone->save();

        return redirect()       
            ->route('phones.index')
            ->with('status', ' Updated a Phone');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $phone = Phone::findOrFail($id);
        $phone->delete();

        return redirect()->route('phones.index')->with('status', 'Phone deleted successfully');
    }
}
