<?php

namespace App\Http\Controllers;

use App\Models\Address;
use App\Http\Requests\StoreAddressRequest;
use App\Http\Requests\UpdateAddressRequest;

class AddressController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $addresses = Address::all();
        if($addresses->isEmpty()){
            $data = [
            'message'=> 'No hay addresses',
            'status' => 200
        ];
        return response()->json($addresses, 404);
        }
        $data = [
            'addresses' => $addresses,
            'status' => 200
        ];

        return response()->json($data, 200);
    }
    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreaddressRequest $request)
    {
        $address = Address::create([
            'name' => $request->name,
            'quantity' => $request->quantity,
            'price' => $request->price
        ]);

        if(!$address){
            $data = [
                'message' => 'Error al crear el address',
                'status' => 500
            ];
            return response()->json($data, 500);
        }
        $data = [
            'address' => $address,
            'status' => 201
        ];
        return response()->json($data, 201);
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $address = Address::find($id);

        if(!$address){
            $data = [
            'message'=> 'address no encontrado',
            'status' => 404
        ];
        return response()->json($data, 404);
        }
        $data = [
            'address' => $address,
            'status' => 200
        ];
        return response()->json($data, 200);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateaddressRequest $request, address $address)
    {
        $address->update($request->validated());
        return response()->json($address,200);
    }
    

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $address = Address::find($id);

        if(!$address){
            $data = [
            'message'=> 'address no encontrado',
            'status' => 404
        ];
        return response()->json($data, 404);
        }

        $address->delete();

        $data = [
            'address' => $address,
            'status' => 200
        ];
        return response()->json($data, 200);
    }
}

