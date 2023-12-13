<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Phone;

class PhoneController extends Controller
{
    // made a specific user controller so that if you are logged in as a user you can't create, edit and delete anything in the database

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $phones = Phone::paginate(10);
        return view('user.phones.index')->with('phones', $phones);
    }

    public function show(string $id)
    {
        $phone = Phone::findOrFail($id);

        return view('user.phones.show')->with('phone', $phone);
    }
 
}
