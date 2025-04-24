@include('layouts.navigation')
<x-app-layout>
    <div class="max-w-xl p-6 mx-auto bg-white rounded shadow">
        <h2 class="mb-4 text-xl font-bold">Tambah Barang</h2>
        <form method="POST" action="{{ route('items.store') }}">
            @csrf
            <div class="mb-4">
                <label class="block font-medium">Nama</label>
                <input type="text" name="name" class="w-full p-2 border rounded" required>
            </div>
            <div class="mb-4">
                <label class="block font-medium">Harga</label>
                <input type="number" name="price" class="w-full p-2 border rounded" required>
            </div>
            <div class="mb-4">
                <label class="block font-medium">Stok</label>
                <input type="number" name="quantity" class="w-full p-2 border rounded" required>
            </div>
            <div class="mb-4">
                <label class="block font-medium">Kategori</label>
                <select name="category_id" class="w-full p-2 border rounded" required>
                    @foreach ($categories as $category)
                        <option value="{{ $category->id }}">{{ $category->name }}</option>
                    @endforeach
                </select>
            </div>
            <div class="mb-4">
                <label class="block font-medium">Pemasok</label>
                <select name="supplier_id" class="w-full p-2 border rounded" required>
                    @foreach ($suppliers as $supplier)
                        <option value="{{ $supplier->id }}">{{ $supplier->name }}</option>
                    @endforeach
                </select>
            </div>
            <button type="submit" class="px-4 py-2 text-white bg-blue-600 rounded">Simpan</button>
        </form>
    </div>
</x-app-layout>
