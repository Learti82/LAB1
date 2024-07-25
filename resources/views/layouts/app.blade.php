<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Your App</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 h-screen antialiased leading-none font-sans">
    <nav class="bg-blue-600 p-4">
        <div class="container mx-auto flex justify-between items-center">
            <a href="{{ url('/') }}" class="text-white text-lg font-bold">Your App</a>
            <div>
                <a href="{{ route('dashboard') }}" class="text-white px-4">Dashboard</a>
                <a href="{{ route('products.index') }}" class="text-white px-4">Products</a>
                <a href="{{ route('profile.edit') }}" class="text-white px-4">Profile</a>
                <form action="{{ route('logout') }}" method="POST" class="inline">
                    @csrf
                    <button type="submit" class="text-white px-4">Logout</button>
                </form>
            </div>
        </div>
    </nav>
    <!-- Content goes here -->
    @yield('content')
</body>
</html>
