<?php

namespace App\Http\Controllers;

use App\Models\Address;
use Illuminate\Http\Request;

class AddressController extends Controller
{
    public function create()
    {
        return view('address.create');
    }

    /**
     * Address store
     */


    public function store(Request $request)
    {
        // return $request->all();

        //validation
        $validatedAddress = $request->validate([
            'village' => 'required|string|max:100',
            'union' => 'required|string|max:100',
            'upazila' => 'required|string|max:100',
            'district' => 'nullable|string|max:100',
            'division' => 'nullable|string|max:100',
            'country' => 'nullable',
        ]);

        // return $validatedAddress;

        Address::create($validatedAddress);
        return 'data save successfully';
        
    }
}
