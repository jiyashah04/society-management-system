<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Registration</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100 flex items-center justify-center min-h-screen">
    <div class="bg-white p-8 rounded-lg shadow-md w-96">
   
        <h1 class="text-2xl font-bold text-center mb-6">User  Registration</h1>
        <form id="registration-form" action="registerDB.php" method="POST">

            <div class="mb-4">
                <label for="wing" class="block text-sm font-medium text-gray-700">Wing:</label>
                <input type="text" id="wing" name="wing" required class="mt-1 block w-full border border-gray-300 rounded-md p-2 focus:outline-none focus:ring focus:ring-blue-500">
            </div>
            <div class="mb-4">
                <label for="flat-no" class="block text-sm font-medium text-gray-700">Flat No:</label>
                <input type="text" id="flat-no" name="flat-no" required class="mt-1 block w-full border border-gray-300 rounded-md p-2 focus:outline-none focus:ring focus:ring-blue-500">
            </div>
            <div class="mb-4">
                <label for="phone" class="block text-sm font-medium text-gray-700">Phone Number:</label>
                <input type="tel" id="phone" name="phone" required pattern="[0-9]{10}" title="Please enter a valid 10-digit phone number" class="mt-1 block w-full border border-gray-300 rounded-md p-2 focus:outline-none focus:ring focus:ring-blue-500">
            </div>
            <div class="mb-4">
                <label for="name" class="block text-sm font-medium text-gray-700">Name:</label>
                <input type="text" id="name" name="name" required class="mt-1 block w-full border border-gray-300 rounded-md p-2 focus:outline-none focus:ring focus:ring-blue-500">
            </div>
            <div class="mb-4">
                <label for="email" class="block text-sm font-medium text-gray-700">Email:</label>
                <input type="email" id="email" name="email" required class="mt-1 block w-full border border-gray-300 rounded-md p-2 focus:outline-none focus:ring focus:ring-blue-500">
            </div>
            <div class="mb-4">
                <label for="password" class="block text-sm font-medium text-gray-700">Password:</label>
                <input type="password" id="password" name="password" required minlength="6" title="Password must be at least 6 characters long" class="mt-1 block w-full border border-gray-300 rounded-md p-2 focus:outline-none focus:ring focus:ring-blue-500">
            </div>
            <button type="submit" class="w-full bg-blue-500 text-white font-bold py-2 rounded hover:bg-blue-600">Register</button>
        </form>
    </div>

    <script src="regscript.js"></script>
</body>
</html>