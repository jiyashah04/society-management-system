

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Send Complaint</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100 flex items-center justify-center min-h-screen">

    <div class="w-full max-w-md bg-white shadow-lg rounded-lg p-6">
        <h2 class="text-2xl font-semibold text-gray-800 text-center mb-2">Submit a Complaint</h2>
        <p class="text-gray-600 text-center mb-4">Please add your Wing along with Flat Number</p>
        <form action="send_complaintsDB.php" method="POST" class="space-y-4">
            <div>
                <label for="flat" class="block text-gray-700 font-medium">Flat Number:</label>
                <input type="text" id="flat" name="flat" required
                       class="w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-400">
            </div>
            
            <div>
                <label for="name" class="block text-gray-700 font-medium">Resident Name:</label>
                <input type="text" id="name" name="name" required
                       class="w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-400">
            </div>
            
            <div>
                <label for="email" class="block text-gray-700 font-medium">Email:</label>
                <input type="email" id="email" name="email" required
                       class="w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-400">
            </div>
            
            <div>
                <label for="complaints" class="block text-gray-700 font-medium">Complaint Description:</label>
                <textarea id="complaints" name="complaints" rows="5" required
                          class="w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-400"></textarea>
            </div>

            <div>
                <label for="date" class="block text-gray-700 font-medium">Date:</label>
                <input type="date" id="date" name="date" required
                       class="w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-400">
            </div>
            
            <button type="submit" class="w-full bg-green-500 hover:bg-green-600 text-white font-semibold py-2 px-4 rounded-md focus:outline-none focus:ring-2 focus:ring-green-400">
                Submit Complaint
            </button>
        </form>
    </div>

</body>
</html>
