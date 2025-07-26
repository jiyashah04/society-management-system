

<html>
<head>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
</head>
<body class="bg-gray-100 text-gray-800 font-roboto">
    <div class="container mx-auto mt-10 p-6 bg-white shadow-lg rounded-lg">
        <div class="flex justify-end">
            <a href="admin1.php" class="bg-blue-500 text-white underline px-4 py-2 inline-block rounded hover:bg-blue-600 transition duration-300">Back to Dashboard</a>
        </div>
        <h1 class="text-4xl font-bold mt-4 text-blue-700">Add New Resident</h1>
        <form class="mt-6" action="addresidentsDB.php" method="POST">
            <div class="mb-4">
                <label class="block text-lg mb-2 text-gray-700" for="resident-name">Resident Name:</label>
                <input class="w-full border border-gray-300 p-2 rounded focus:outline-none focus:ring-2 focus:ring-blue-500" type="text" id="name" name="name">
            </div>
            <div class="mb-4">
                <label class="block text-lg mb-2 text-gray-700" for="contact-number">Contact Number:</label>
                <input class="w-full border border-gray-300 p-2 rounded focus:outline-none focus:ring-2 focus:ring-blue-500" type="text" id="phone" name="phone">
            </div>
            <div class="mb-4">
                <label class="block text-lg mb-2 text-gray-700" for="flat-number">Wing:</label>
                <input class="w-full border border-gray-300 p-2 rounded focus:outline-none focus:ring-2 focus:ring-blue-500" type="text" id="wing" name="wing">
            </div>
            <div class="mb-4">
                <label class="block text-lg mb-2 text-gray-700" for="flat-number">Flat Number:</label>
                <input class="w-full border border-gray-300 p-2 rounded focus:outline-none focus:ring-2 focus:ring-blue-500" type="text" id="flat" name="flat">
            </div>
            <div class="mb-4">
                <label class="block text-lg mb-2 text-gray-700" for="email">Email:</label>
                <input class="w-full border border-gray-300 p-2 rounded focus:outline-none focus:ring-2 focus:ring-blue-500" type="email" id="email" name="email">
            </div>
            <div class="mb-4">
                <label for="password" class="block text-lg mb-2 text-gray-700">Password:</label>
                <input type="password" id="password" name="password" required minlength="6" title="Password must be at least 6 characters long" class="w-full border border-gray-300 p-2 rounded focus:outline-none focus:ring-2 focus:ring-blue-500">
            </div>
            <button class="bg-green-500 text-white px-4 py-2 rounded hover:bg-green-600 transition duration-300" type="submit">Add Resident</button>
        </form>
    </div>
</body>
</html>