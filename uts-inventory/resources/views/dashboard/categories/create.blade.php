@include('layouts.navigation')
<x-app-layout>
    <div class="max-w-xl p-6 mx-auto bg-white rounded shadow">
        <h2 class="mb-4 text-xl font-bold">Tambah Kategori</h2>
        <form method="POST" action="{{ route('categories.store') }}">
            @csrf
            <div class="mb-4">
                <label class="block font-medium">Nama</label>
                <input type="text" name="name" class="w-full p-2 border rounded" required>
            </div>
            <div class="mb-4">
                <label class="block font-medium">Deskripsi</label>
                <textarea name="description" class="w-full p-2 border rounded"></textarea>
            </div>
            <button type="submit" class="px-4 py-2 text-white bg-blue-600 rounded">Simpan</button>
        </form>
    </div>
</x-app-layout>
