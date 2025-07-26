<html>
<head>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gradient-to-r from-blue-50 to-blue-100 text-gray-800">
    <div class="container mx-auto mt-8 p-4">
        <div class="flex justify-end mb-4">
            <a href="admin1.php" class="bg-blue-500 text-white px-8 py-4 rounded shadow-md hover:bg-blue-600 text-xl font-semibold">Back to Dashboard</a>
        </div>
        <h1 class="text-4xl font-bold mb-6 text-blue-700">Complaints</h1>
        <div class="bg-white shadow-lg rounded-lg overflow-hidden">
            <table class="min-w-full bg-white">
                <thead class="bg-yellow-200">
                    <tr>
                        <th class="py-3 px-4 border-b border-yellow-300 text-left text-yellow-800 font-semibold">Complaint ID</th>
                        <th class="py-3 px-4 border-b border-yellow-300 text-left text-yellow-800 font-semibold">Flat No</th>
                        <th class="py-3 px-4 border-b border-yellow-300 text-left text-yellow-800 font-semibold">Resident Name</th>
                        <th class="py-3 px-4 border-b border-yellow-300 text-left text-yellow-800 font-semibold">Complaint Description</th>
                        <th class="py-3 px-4 border-b border-yellow-300 text-left text-yellow-800 font-semibold">Status</th>
                        <th class="py-3 px-4 border-b border-yellow-300 text-left text-yellow-800 font-semibold">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <tr class="hover:bg-yellow-50">
                        <td class="py-3 px-4 border-b border-yellow-300">#001</td>
                        <td class="py-3 px-4 border-b border-yellow-300">A-101</td>
                        <td class="py-3 px-4 border-b border-yellow-300">John Doe</td>
                        <td class="py-3 px-4 border-b border-yellow-300">Leakage in bathroom</td>
                        <td class="py-3 px-4 border-b border-yellow-300">Pending</td>
                        <td class="py-3 px-4 border-b border-gray-300 flex items-center">
                        <button class="bg-red-500 text-white px-3 py-1 rounded-full mr-2">Delete</button>
                    </td>
                    </tr>
                    <tr class="hover:bg-yellow-50">
                        <td class="py-3 px-4 border-b border-yellow-300">#002</td>
                        <td class="py-3 px-4 border-b border-yellow-300">B-202</td>
                        <td class="py-3 px-4 border-b border-yellow-300">Jane Smith</td>
                        <td class="py-3 px-4 border-b border-yellow-300">No hot water</td>
                        <td class="py-3 px-4 border-b border-yellow-300">In Progress</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</body>
</html>