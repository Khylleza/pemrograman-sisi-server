@include('layouts.navigation')
<x-app-layout>

    <div class="px-4 py-8 mx-auto space-y-10 max-w-7xl sm:px-6 lg:px-8">

        <h1 class="text-3xl font-bold text-gray-900">📊 Dashboard Ringkasan</h1>

        {{-- Ringkasan Sistem --}}
        <div class="p-6 bg-white shadow rounded-2xl">
            <h2 class="mb-4 text-xl font-semibold text-gray-800">Ringkasan Sistem</h2>
            <div class="grid grid-cols-1 gap-4 text-gray-700 sm:grid-cols-2 lg:grid-cols-3">
                <div class="p-4 shadow-sm bg-gray-50 rounded-xl">
                    <div class="text-sm text-gray-500">Total Barang</div>
                    <div class="text-xl font-bold">{{ $systemSummary['total_items'] }}</div>
                </div>
                <div class="p-4 shadow-sm bg-gray-50 rounded-xl">
                    <div class="text-sm text-gray-500">Total Stok</div>
                    <div class="text-xl font-bold">{{ $systemSummary['total_stock'] }}</div>
                </div>
                <div class="p-4 shadow-sm bg-gray-50 rounded-xl">
                    <div class="text-sm text-gray-500">Nilai Stok</div>
                    <div class="text-xl font-bold">Rp{{ number_format($systemSummary['total_value'], 0, ',', '.') }}
                    </div>
                </div>
                <div class="p-4 shadow-sm bg-gray-50 rounded-xl">
                    <div class="text-sm text-gray-500">Rata-Rata Harga</div>
                    <div class="text-xl font-bold">Rp{{ number_format($systemSummary['average_value'], 0, ',', '.') }}
                    </div>
                </div>
                <div class="p-4 shadow-sm bg-gray-50 rounded-xl">
                    <div class="text-sm text-gray-500">Jumlah Kategori</div>
                    <div class="text-xl font-bold">{{ $systemSummary['total_categories'] }}</div>
                </div>
                <div class="p-4 shadow-sm bg-gray-50 rounded-xl">
                    <div class="text-sm text-gray-500">Jumlah Pemasok</div>
                    <div class="text-xl font-bold">{{ $systemSummary['total_suppliers'] }}</div>
                </div>
            </div>
        </div>

        {{-- Barang Stok Rendah --}}
        <div class="p-6 bg-white shadow rounded-2xl">
            <h2 class="mb-4 text-xl font-semibold text-gray-800">🔻 Barang dengan Stok Rendah (&lt; 5)</h2>
            @if ($lowStockItems->isEmpty())
                <div class="text-green-600">✅ Semua stok aman</div>
            @else
                <ul class="space-y-1 text-sm text-red-600 list-disc list-inside">
                    @foreach ($lowStockItems as $item)
                        <li><strong>{{ $item->name }}</strong> — Stok: {{ $item->quantity }}</li>
                    @endforeach
                </ul>
            @endif
        </div>

        {{-- Ringkasan per Kategori --}}
        <div class="p-6 overflow-x-auto bg-white shadow rounded-2xl">
            <h2 class="mb-4 text-xl font-semibold text-gray-800">📁 Ringkasan per Kategori</h2>
            <table class="min-w-full text-sm divide-y divide-gray-200">
                <thead class="font-semibold text-gray-600 bg-gray-100">
                    <tr>
                        <th class="p-3 text-left">Kategori</th>
                        <th class="p-3 text-right">Jumlah Barang</th>
                        <th class="p-3 text-right">Total Nilai</th>
                        <th class="p-3 text-right">Rata-rata Harga</th>
                    </tr>
                </thead>
                <tbody class="text-gray-700 divide-y divide-gray-100">
                    @foreach ($categorySummary as $cat)
                        <tr>
                            <td class="p-3">{{ $cat['name'] }}</td>
                            <td class="p-3 text-right">{{ $cat['total_items'] }}</td>
                            <td class="p-3 text-right">Rp{{ number_format($cat['total_value'], 0, ',', '.') }}</td>
                            <td class="p-3 text-right">Rp{{ number_format($cat['avg_price'], 0, ',', '.') }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>

        {{-- Ringkasan per Pemasok --}}
        <div class="p-6 overflow-x-auto bg-white shadow rounded-2xl">
            <h2 class="mb-4 text-xl font-semibold text-gray-800">🚚 Ringkasan per Pemasok</h2>
            <table class="min-w-full text-sm divide-y divide-gray-200">
                <thead class="font-semibold text-gray-600 bg-gray-100">
                    <tr>
                        <th class="p-3 text-left">Pemasok</th>
                        <th class="p-3 text-right">Jumlah Barang</th>
                        <th class="p-3 text-right">Total Nilai</th>
                    </tr>
                </thead>
                <tbody class="text-gray-700 divide-y divide-gray-100">
                    @foreach ($supplierSummary as $sup)
                        <tr>
                            <td class="p-3">{{ $sup['name'] }}</td>
                            <td class="p-3 text-right">{{ $sup['total_items'] }}</td>
                            <td class="p-3 text-right">Rp{{ number_format($sup['total_value'], 0, ',', '.') }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</x-app-layout>
