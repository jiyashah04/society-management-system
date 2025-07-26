
<html>
<head>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100">
    <div class="w-full bg-blue-800 p-4 flex justify-between items-center">
        <h1 class="text-white text-2xl font-bold">Admin Dashboard</h1>
        <button class="text-blue-800 bg-white px-4 py-2 rounded shadow-lg hover:bg-gray-200"><a href="login1.php">logout</a></button>
    </div>

    <div class="container mx-auto mt-8">
        <div class="grid grid-cols-2 gap-8">
            <div class="bg-white p-6 rounded-lg shadow-md hover:shadow-lg transition-shadow duration-300">
                <h2 class="text-xl font-bold mb-2 text-blue-800">See Complaints</h2>
                <p class="text-gray-700 mb-4">View and manage resident complaints</p>
                <button class="bg-green-500 text-white px-4 py-2 rounded shadow hover:bg-green-600"><a href="viewComplaintsADMIN.php">View</a></button>
            </div>
            <div class="bg-white p-6 rounded-lg shadow-md hover:shadow-lg transition-shadow duration-300">
                <h2 class="text-xl font-bold mb-2 text-blue-800">See Maintenance Due</h2>
                <p class="text-gray-700 mb-4">View and manage maintenance schedules</p>
                <button class="bg-green-500 text-white px-4 py-2 rounded shadow hover:bg-green-600"><a href="generate_bill(FE).php">Generate Bills</a></button>
                <button class="bg-green-500 text-white px-4 py-2 rounded shadow hover:bg-green-600"><a href="bills(admin).php">View</a></button>
            </div>
            <div class="bg-white p-6 rounded-lg shadow-md hover:shadow-lg transition-shadow duration-300">
                <h2 class="text-xl font-bold mb-2 text-blue-800">Resident Directory</h2>
                <p class="text-gray-700 mb-4">View and manage resident information</p>
                <button class="bg-green-500 text-white px-4 py-2 rounded shadow hover:bg-green-600"><a href="RD_temp.php">View</a></button>
            </div>
            <div class="bg-white p-6 rounded-lg shadow-md hover:shadow-lg transition-shadow duration-300">
                <h2 class="text-xl font-bold mb-2 text-blue-800">Add New Resident</h2>
                <p class="text-gray-700 mb-4">Add new residents to the directory</p>
                <button class="bg-green-500 text-white px-4 py-2 rounded shadow hover:bg-green-600"><a href="addresidents.php">Add</a></button>
                
               
            </div>
            <div class="col-span-2 bg-white p-6 rounded-lg shadow-md hover:shadow-lg transition-shadow duration-300">
                <h2 class="text-xl font-bold mb-2 text-blue-800">Send Notices</h2>
                <p class="text-gray-700 mb-4">Send notices to residents</p>
                <button class="bg-green-500 text-white px-4 py-2 rounded shadow hover:bg-green-600"><a href="sendnotice.php">Send</a></button>
                <button class="bg-blue-500 text-white px-4 py-2 rounded shadow hover:bg-blue-600 ml-4"><a href="view_noticesADMIN.php">View Sent Notices</a></button>
            </div>
        </div>
    </div>
</body>
</html>