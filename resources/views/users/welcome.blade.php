<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome User</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100">
    <nav class="bg-white shadow-md">
        <div class="container mx-auto px-6 py-3">
            <div class="flex justify-between items-center">
                <div class="text-xl font-bold text-gray-800">Rental Service</div>
                <div>
                    <a href="#" class="text-gray-800 hover:text-gray-600 mx-4">Home</a>
                    <a href="#" class="text-gray-800 hover:text-gray-600 mx-4">Profile</a>
                    <a href="#" class="text-gray-800 hover:text-gray-600 mx-4">Logout</a>
                </div>
            </div>
        </div>
    </nav>

    <div class="container mx-auto px-6 py-8">
        <h1 class="text-3xl font-semibold text-gray-800">Welcome, User!</h1>
        <p class="mt-4 text-gray-600">Here are some items available for rent:</p>

        <div class="mt-8 grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            <!-- Example Item Card -->
            <div class="bg-white shadow-md rounded-lg overflow-hidden">
                <img src="https://via.placeholder.com/400x300" alt="Item Image" class="w-full h-48 object-cover">
                <div class="p-4">
                    <h2 class="text-xl font-semibold text-gray-800">Item Name</h2>
                    <p class="mt-2 text-gray-600">Item description goes here. It provides a brief detail about the item.</p>
                    <div class="flex justify-between items-center mt-4">
                        <span class="text-gray-800 font-bold">$20/day</span>
                        <a href="#" class="text-indigo-600 hover:text-indigo-800">Rent Now</a>
                    </div>
                </div>
            </div>
            <!-- Repeat Item Card as needed -->
        </div>
    </div>
</body>
</html>
