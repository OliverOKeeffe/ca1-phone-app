<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Retailer;

class RetailerController extends Controller
{
    // made a specific user controller so that if you are logged in as a user you can't create, edit and delete anything in the database

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $retailers = Retailer::paginate(10);
        return view('user.retailers.index')->with('retailers', $retailers);
    }

    public function show(string $id)
    {
        $retailer = Retailer::findOrFail($id);

        return view('user.retailers.show')->with('retailer', $retailer);
    }
 
}
