<?php

namespace App\Http\Controllers;

use App\Models\Item;
use App\Models\Category;
use App\Models\Supplier;

class DashboardController extends Controller
{
    public function index()
    {
        $items = Item::with(['category', 'supplier'])->get();
        $categories = Category::all();
        $suppliers = Supplier::all();

        // Total Stok dan Nilai
        $totalStock = $items->sum('quantity');
        $totalValue = $items->sum(fn($item) => $item->price * $item->quantity);
        $averagePrice = $items->avg('price');

        // Barang stok di bawah 5
        $lowStockItems = $items->where('quantity', '<', 5);

        // Ringkasan per kategori
        $categorySummary = $categories->map(function ($category) use ($items) {
            $categoryItems = $items->where('category_id', $category->id);
            return [
                'name'         => $category->name,
                'total_items'  => $categoryItems->count(),
                'total_value'  => $categoryItems->sum(fn($item) => $item->price * $item->quantity),
                'avg_price'    => $categoryItems->avg('price') ?? 0,
            ];
        });

        // Ringkasan per pemasok
        $supplierSummary = $suppliers->map(function ($supplier) use ($items) {
            $supplierItems = $items->where('supplier_id', $supplier->id);
            return [
                'name'         => $supplier->name,
                'total_items'  => $supplierItems->count(),
                'total_value'  => $supplierItems->sum(fn($item) => $item->price * $item->quantity),
            ];
        });

        // Ringkasan sistem
        $systemSummary = [
            'total_items'     => $items->count(),
            'total_stock'     => $totalStock,
            'total_value'     => $totalValue,
            'average_value'     => $averagePrice,
            'total_categories' => $categories->count(),
            'total_suppliers' => $suppliers->count(),
        ];

        return view('dashboard.index', compact(
            'totalStock',
            'totalValue',
            'averagePrice',
            'lowStockItems',
            'categorySummary',
            'supplierSummary',
            'systemSummary'
        ));
    }
}
