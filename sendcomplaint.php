<html>
<head>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-yellow-50 min-h-screen flex items-center justify-center">
    <div class="w-full h-full p-8">
        <a href="user.php" class="block mb-4 text-white bg-blue-600 py-4 px-8 rounded text-left text-lg">Back to Dashboard</a>
        <h2 class="text-2xl font-bold text-center text-black mb-6">Society Complaint Form</h2>
        <form class="h-full">
            <div class="mb-4">
                <label class="block text-gray-700 mb-2" for="name">Name:</label>
                <input class="w-full px-3 py-2 border rounded" type="text" id="name" name="name">
            </div>
            <div class="mb-4">
                <label class="block text-gray-700 mb-2" for="email">Email:</label>
                <input class="w-full px-3 py-2 border rounded" type="email" id="email" name="email">
            </div>
            <div class="mb-4">
                <label class="block text-gray-700 mb-2" for="phone">Phone:</label>
                <input class="w-full px-3 py-2 border rounded" type="text" id="phone" name="phone">
            </div>
            <div class="mb-4">
                <label class="block text-gray-700 mb-2" for="flat">Flat No:</label>
                <input class="w-full px-3 py-2 border rounded" type="text" id="flat" name="flat">
            </div>
            <div class="mb-4">
                <label class="block text-gray-700 mb-2" for="complaint">Complaint:</label>
                <textarea class="w-full px-3 py-2 border rounded" id="complaint" name="complaint" rows="4"></textarea>
            </div>
            <div class="text-center">
                <button class="bg-blue-600 text-white py-2 px-4 rounded w-full" type="submit">Submit</button>
            </div>
        </form>
    </div>
</body>
</html>