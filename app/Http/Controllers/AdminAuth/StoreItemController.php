<?php

namespace App\Http\Controllers\AdminAuth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\StoreItem;

class StoreItemController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $items = StoreItem::all();
        return view('admin.store_items.index', compact('items'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.store_items.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'price' => 'required|numeric',
            'quantity' => 'required|integer',
            'image' => 'nullable|image|max:2048'
        ]);

        if ($request->hasFile('image')) {
            $validated['image'] = $request->file('image')->store('store_items', 'public');
        }

        StoreItem::create($validated);

        return redirect()->route('admin.store_items.index')->with('success', 'Item added!');

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $store_item = StoreItem::findOrFail($id);
        return view('admin.store_items.edit', compact('store_item'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'price' => 'required|numeric',
            'quantity' => 'required|integer',
            'image' => 'nullable|image|max:2048'
        ]);

        if ($request->hasFile('image')) {
            $validated['image'] = $request->file('image')->store('store_items', 'public');
        }

        $store_item = StoreItem::findOrFail($id);
        $store_item->update($validated);

        return redirect()->route('admin.store_items.index')->with('success', 'Item updated!');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $store_item = StoreItem::findOrFail($id);
        $store_item->delete();
        return redirect()->route('admin.store_items.index')->with('success', 'Item deleted!');
 
    }
}
