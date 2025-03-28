<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use App\Http\Requests\StoreCustomerRequest;
use App\Http\Requests\UpdateCustomerRequest;

class CustomerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $customers = Customer::all();
        if($customers->isEmpty()){
            $data = [
            'message'=> 'No hay customers',
            'status' => 200
        ];
        return response()->json($customers, 404);
        }
        $data = [
            'customers' => $customers,
            'status' => 200
        ];

        return response()->json($data, 200);
    }
    /**
     * Store a newly created resource in storage.
     */
    public function store(StorecustomerRequest $request)
    {
        $customer = Customer::create([
            'name' => $request->name,
            'quantity' => $request->quantity,
            'price' => $request->price
        ]);

        if(!$customer){
            $data = [
                'message' => 'Error al crear el customer',
                'status' => 500
            ];
            return response()->json($data, 500);
        }
        $data = [
            'customer' => $customer,
            'status' => 201
        ];
        return response()->json($data, 201);
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $customer = Customer::find($id);

        if(!$customer){
            $data = [
            'message'=> 'cliente no encontrado',
            'status' => 404
        ];
        return response()->json($data, 404);
        }
        $data = [
            'customer' => $customer,
            'status' => 200
        ];
        return response()->json($data, 200);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatecustomerRequest $request, customer $customer)
    {
        $customer->update($request->validated());
        return response()->json($customer,200);
    }
    

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $customer = Customer::find($id);

        if(!$customer){
            $data = [
            'message'=> 'cliente no encontrado',
            'status' => 404
        ];
        return response()->json($data, 404);
        }

        $customer->delete();

        $data = [
            'customer' => $customer,
            'status' => 200
        ];
        return response()->json($data, 200);
    }
}

