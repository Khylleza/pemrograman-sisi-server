<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <title>Login Admin</title>
    @vite('resources/css/app.css')
</head>

<body class="flex items-center justify-center h-screen bg-gray-100">
    <div class="w-full max-w-md p-6 bg-white rounded-lg shadow-md">
        <h2 class="mb-6 text-2xl font-semibold text-center">Login Admin</h2>

        @if ($errors->any())
            <div class="p-3 mb-4 text-red-700 bg-red-100 rounded">
                {{ $errors->first() }}
            </div>
        @endif

        <form action="{{ route('admin.login.submit') }}" method="POST">
            @csrf
            <div class="mb-4">
                <label class="block text-sm font-medium text-gray-700">Username</label>
                <input type="text" name="username" value="{{ old('username') }}"
                    class="w-full px-4 py-2 border border-gray-300 rounded focus:ring focus:outline-none" required
                    autofocus>
            </div>

            <div class="mb-6">
                <label class="block text-sm font-medium text-gray-700">Password</label>
                <input type="password" name="password"
                    class="w-full px-4 py-2 border border-gray-300 rounded focus:ring focus:outline-none" required>
            </div>

            <div class="flex items-center justify-between">
                <button type="submit" class="px-4 py-2 text-white bg-blue-600 rounded hover:bg-blue-700">Login</button>
            </div>
        </form>
    </div>
</body>

</html>
