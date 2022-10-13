<?php

namespace App\Http\Controllers;

use App\Models\Item;
use Illuminate\Http\Request;

class ItemController extends Controller
{
    public function store(Request $request)
    {
        $item = new Item();
        $item->name = $request->name;
        $item->type = $request->type;
        $item->quantity = $request->quantity;
        $item->price = $request->price;

        $item->save();
        return response()->json(['success'=>'Data is successfully added']);
    }

    public function show() {
        $items = Item::all();
        return response()->json($items);
    }
}
