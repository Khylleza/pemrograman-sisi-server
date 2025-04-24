@include('layouts.navigation')
<x-app-layout>
    <div class="p-6 mx-auto max-w-7xl">
        <div class="flex justify-between mb-4">
            <h2 class="text-2xl font-bold">Daftar Barang</h2>
            <a href="{{ route('items.create') }}" class="px-4 py-2 text-white bg-blue-600 rounded">Tambah</a>
        </div>
        <table class="w-full border table-auto">
            <thead class="bg-gray-100">
                <tr>
                    <th class="p-2">Nama</th>
                    <th class="p-2">Kategori</th>
                    <th class="p-2">Pemasok</th>
                    <th class="p-2">Harga</th>
                    <th class="p-2">Stok</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($items as $item)
                    <tr class="border-t">
                        <td class="p-2">{{ $item->name }}</td>
                        <td class="p-2">{{ $item->category->name }}</td>
                        <td class="p-2">{{ $item->supplier->name }}</td>
                        <td class="p-2">Rp{{ number_format($item->price) }}</td>
                        <td class="p-2">{{ $item->quantity }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

</x-app-layout>
