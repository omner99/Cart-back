<?php

namespace App\Http\Controllers;

use App\Models\Item;
use App\Http\Requests\StoreItemRequest;
use App\Http\Requests\UpdateItemRequest;
use Illuminate\Support\Facades\Validator;

class ItemController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $items = Item::all();
        if($items->isEmpty()){
            $data = [
            'message'=> 'No hay Items',
            'status' => 200
        ];
        return response()->json($items, 404);
        }
        $data = [
            'items' => $items,
            'status' => 200
        ];

        return response()->json($data, 200);
    }
    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreItemRequest $request)
    {
        $item = Item::create([
            'name' => $request->name,
            'quantity' => $request->quantity,
            'price' => $request->price
        ]);

        if(!$item){
            $data = [
                'message' => 'Error al crear el Item',
                'status' => 500
            ];
            return response()->json($data, 500);
        }
        $data = [
            'item' => $item,
            'status' => 201
        ];
        return response()->json($data, 201);
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $item = Item::find($id);

        if(!$item){
            $data = [
            'message'=> 'Item no encontrado',
            'status' => 404
        ];
        return response()->json($data, 404);
        }
        $data = [
            'item' => $item,
            'status' => 200
        ];
        return response()->json($data, 200);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateItemRequest $request, Item $item)
    {
        $item->update($request->validated());
        return response()->json($item,200);
    }
    

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $item = Item::find($id);

        if(!$item){
            $data = [
            'message'=> 'Item no encontrado',
            'status' => 404
        ];
        return response()->json($data, 404);
        }

        $item->delete();

        $data = [
            'item' => $item,
            'status' => 200
        ];
        return response()->json($data, 200);
    }
}
