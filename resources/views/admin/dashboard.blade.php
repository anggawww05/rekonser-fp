<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    {{-- <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet"> --}}
    @vite('resources/css/app.css')
</head>
<body class="bg-gray-100">
    <div class="flex flex-col md:flex-row">
        <!-- Sidebar -->
        <div class="w-full md:w-64 bg-gray-800 h-auto md:h-screen p-4">
            <div class="text-white text-2xl mb-6">Admin Dashboard</div>
            <form action="/logout" method="POST">
                @csrf
                <button type="submit" class="w-full bg-red-500 text-white py-2 px-4 rounded hover:bg-red-600">
                    Logout
                </button>
            </form>
        </div>
        <!-- Main Content -->
        <div class="flex-1 p-6">
            <h1 class="text-3xl font-bold">Welcome to the Admin Dashboard</h1>
            <!-- Add your main content here -->
        </div>
    </div>
</body>
</html>
