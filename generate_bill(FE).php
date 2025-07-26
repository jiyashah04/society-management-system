<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Enter Monthly Charges</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 flex items-center justify-center min-h-screen">
    <div class="bg-white shadow-md rounded-lg p-8 w-full max-w-md">
        <h1 class="text-2xl font-bold mb-6 text-center">Monthly Charges Entry</h1>
        <form action="generate_bills.php" method="POST">
            <div class="mb-4">
                <label for="month_year" class="block text-sm font-medium text-gray-700">Month & Year:</label>
                <input type="date" id="month_year" name="month_year" required class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 p-2">
            </div>

            <div class="mb-4">
                <label for="service_charges" class="block text-sm font-medium text-gray-700">Service Charges:</label>
                <input type="number" step="0.01" name="service_charges" required class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 p-2">
            </div>
            
            <div class="mb-4">
                <label for="property_tax" class="block text-sm font-medium text-gray-700">Property Tax:</label>
                <input type="number" step="0.01" name="property_tax" required class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 p-2">
            </div>

            <div class="mb-4">
                <label for="water_charges" class="block text-sm font-medium text-gray-700">Water Charges:</label>
                <input type="number" step="0.01" name="water_charges" required class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 p-2">
            </div>

            <div class="mb-4">
                <label for="repair_maintenance_charges" class="block text-sm font-medium text-gray-700">Repair & Maintenance Charges:</label>
                <input type="number" step="0.01" name="repair_maintenance_charges" required class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 p-2">
            </div>

            <div class="mb-4">
                <label for="lift_repair_charges" class="block text-sm font-medium text-gray-700">Lift Repair Charges:</label>
                <input type="number" step="0.01" name="lift_repair_charges" required class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 p-2">
            </div>

            <div class="mb-4">
                <label for="miscellaneous_charges" class="block text-sm font-medium text-gray-700">Miscellaneous Charges:</label>
                <input type="number" step="0.01" name="miscellaneous_charges" required class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 p-2">
            </div>

            <button type="submit" class="w-full bg-blue-600 text-white font-semibold py-2 rounded-md hover:bg-blue-500 focus:outline-none focus:ring-2 focus:ring-blue-400">Generate Bills</button>
        </form>
    </div>
</body>
</html>

