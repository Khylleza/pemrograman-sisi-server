<nav class="sticky top-0 z-50 bg-white border-b border-gray-200 shadow-sm">
    <div class="px-4 mx-auto max-w-7xl sm:px-6 lg:px-8">
        <div class="flex items-center justify-between h-16">
            <div class="flex items-center space-x-4">
                <a href="/dashboard" class="text-lg font-semibold text-gray-800 hover:text-blue-600">Dashboard</a>
                <a href="/dashboard/items"
                    class="text-sm font-medium text-gray-600 transition hover:text-blue-500">Item</a>
                <a href="/dashboard/categories"
                    class="text-sm font-medium text-gray-600 transition hover:text-blue-500">Kategori</a>
                <a href="/dashboard/suppliers"
                    class="text-sm font-medium text-gray-600 transition hover:text-blue-500">Pemasok</a>
            </div>
            <div class="flex items-center space-x-4">
                <form action="{{ route('admin.logout') }}" method="POST">
                    @csrf
                    <button type="submit"
                        class="text-sm font-medium text-red-500 transition hover:text-red-700">Logout</button>
                </form>
            </div>
        </div>
    </div>
</nav>
