<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-200 font-sans antialiased">
    <div class="flex h-screen">
        <!-- Sidebar -->
        <div class="w-64 bg-white shadow-md">
            <div class="p-6">
                <h1 class="text-2xl font-bold mb-6">Dashboard</h1>
                <ul>
                    <li class="mb-4">
                        <a href="{{ url('/') }}" class="text-gray-700 hover:bg-blue-500 hover:text-white block p-2 rounded">Home</a>
                    </li>
                    <li class="mb-4">
                        <a href="{{ url('/about') }}" class="text-gray-700 hover:bg-blue-500 hover:text-white block p-2 rounded">About</a>
                    </li>
                    <li class="mb-4">
                        <a href="{{ url('/products') }}" class="text-gray-700 hover:bg-blue-500 hover:text-white block p-2 rounded">Products CRUD</a>
                    </li>
                </ul>
                <form action="{{ route('logout') }}" method="POST" class="mt-6">
                    @csrf
                    <button type="submit" class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded w-full">
                        Logout
                    </button>
                </form>
            </div>
        </div>

        <!-- Main Content -->
        <div class="flex-1 p-6">
            <div class="bg-white shadow-md rounded-lg p-6">
                <h1 class="text-3xl font-bold mb-6">Welcome to Your Dashboard</h1>
                <p class="text-gray-700 mb-4">Manage your application using the links in the sidebar.</p>
                <p class="text-gray-700">Use the sidebar to navigate to different sections of your application, such as:</p>
                <ul class="list-disc list-inside mt-2">
                    <li><a href="{{ url('/') }}" class="text-blue-500 hover:underline">Home</a></li>
                    <li><a href="{{ url('/about') }}" class="text-blue-500 hover:underline">About</a></li>
                    <li><a href="{{ url('/products') }}" class="text-blue-500 hover:underline">Products CRUD</a></li>
                </ul>
            </div>
        </div>
    </div>
</body>
</html>
