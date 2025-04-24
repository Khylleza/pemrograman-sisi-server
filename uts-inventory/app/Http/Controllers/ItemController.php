<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Item;
use App\Models\Category;
use App\Models\Supplier;

class ItemController extends Controller
{
    public function index()
    {
        $items = Item::with(['category', 'supplier'])->get();
        return view('dashboard.items.index', compact('items'));
    }

    public function create()
    {
        $categories = Category::all();
        $suppliers = Supplier::all();
        return view('dashboard.items.create', compact('categories', 'suppliers'));
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name'        => 'required|string|max:100',
            'price'       => 'required|numeric',
            'quantity'    => 'required|integer|min:0',
            'category_id' => 'required|exists:categories,id',
            'supplier_id' => 'required|exists:suppliers,id',
        ]);

        // tambahkan field created_by
        $validated['created_by'] = auth('admin')->user()?->id;

        Item::create($validated);

        return redirect()->route('items.index')->with('success', 'Item berhasil ditambahkan');
    }
}
