@include('layouts.navigation')
<x-app-layout>
    <div class="max-w-4xl p-6 mx-auto">
        <div class="flex justify-between mb-4">
            <h2 class="text-2xl font-bold">Daftar Pemasok</h2>
            <a href="{{ route('suppliers.create') }}" class="px-4 py-2 text-white bg-blue-600 rounded">Tambah</a>
        </div>
        <table class="w-full border table-auto">
            <thead class="bg-gray-100">
                <tr>
                    <th class="p-2">Nama</th>
                    <th class="p-2">Kontak</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($suppliers as $supplier)
                    <tr class="border-t">
                        <td class="p-2">{{ $supplier->name }}</td>
                        <td class="p-2">{{ $supplier->contact_info }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</x-app-layout>
