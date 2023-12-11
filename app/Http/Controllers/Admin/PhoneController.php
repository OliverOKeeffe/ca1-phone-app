<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Phone;
use App\Models\Retailer;
use App\Models\Brand;
use Auth;

class PhoneController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $phones = Phone::paginate(10);
        return view('admin.phones.index')->with('phones', $phones);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $retailers = Retailer::all();
        $brands = Brand::all();

        return view('admin.phones.create')->with('retailers', $retailers)
                                          ->with('brands', $brands);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'model_name' => 'required|string|unique:phones,model_name|min:2|max:150',
            'year' => 'required|string|min:4|max:4',
            'battery_life' => 'required|string|min:5|max:30',
            'height' => 'required|string|min:5|max:30',
            'weight' => 'required|string|min:2|max:30',
          //  'retailer' =>'required',
            //'phone_image' => 'file|image|dimensions:width=300,height=400'
            // 'phone_image' => 'file|image',
            'brand_id' => 'required',
            'retailers' =>['required' , 'exists:retailers,id']
        ]);

        // $phone_image = $request->file('phone_image');
        // $extension = $phone_image->getClientOriginalExtension();
        // // $filename = date('Y-m-d-His') . '_' . $request->title . '.' . $extension;
        // // dd($filename);
        // $filename = date('Y-m-d-His') . '.' . $extension;


        // $phone_image->storeAs('public/images' , $filename);

        $phone = Phone::create([
            'model_name' => $request->model_name,
            'year' => $request->year,
            'battery_life' => $request->battery_life,
            'height' => $request->height,
            'weight' => $request->weight,
            // 'phone_image' => $filename,
        //    'retailer' => $request->retailer,
            'brand_id' => $request->brand_id
        ]);

        // $phone = new Phone();
        // $phone->title = $request->title

        $phone->retailers()->attach($request->retailers);

        return to_route('admin.phones.index');
    }

    /**
     * Display the specified resource.
     */
        
        
        //dd($request->title)

        //validation rules
    //     $rules =[
    //         'model_name'=> 'required|string|unique:phones,model_name|min:2|max:150',
    //         'year'=> 'required|string|min:4|max:4',
    //         'battery_life'=> 'required|string|min:5|max:30',
    //         'height'=> 'required|string|min:5|max:30',
    //         'weight'=> 'required|string|min:2|max:30',
    //         'brand_id'=> 'required|string|min:1|max:30',

    //     ];

    //     $messages=[
    //         'phone.unique'=>'Phone model_name should be unique'
    //     ];

    //     $request->validate($rules, $messages);


    //     $phone = new Phone;
    //     $phone->model_name = $request->model_name;
    //     $phone->year = $request->year;
    //     $phone->battery_life = $request->battery_life;
    //     $phone->height = $request->height;
    //     $phone->weight = $request->weight;
    //     $phone->brand_id = $request->brand_id;
    //     $phone->save();

    //     return redirect()->route('phones.index')->with('status', 'Created a new Phone');
    // }

    // /**
    //  * Display the specified resource.
    //  */
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
        $retailers = Retailer::all();
        $brands = Brand::all();
        return view('admin.phones.edit', ['phone' => $phone])->with('retailers', $retailers)
                                                             ->with('brands', $brands);
        
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
            ->route('admin.phones.index')
            ->with('status', ' Updated a Phone');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $phone = Phone::findOrFail($id);
        $phone->retailers()->detach();

        $phone->delete();

        return redirect()->route('admin.phones.index')->with('status', 'Phone deleted successfully');
    }
}
