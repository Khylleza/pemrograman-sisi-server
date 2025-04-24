<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Supplier;

class SupplierController extends Controller
{
    public function index()
    {
        $suppliers = Supplier::all();
        return view('dashboard.suppliers.index', compact('suppliers'));
    }

    public function create()
    {
        return view('dashboard.suppliers.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required',
            'contact_info' => 'nullable',
        ]);
        // tambahkan field created_by
        $validated['created_by'] = auth('admin')->user()?->id;

        Supplier::create($validated);

        return redirect()->route('suppliers.index')->with('success', 'Pemasok berhasil ditambahkan');
    }
}
