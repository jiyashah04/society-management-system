<?php
session_start();

// Check if the user is logged in
if (!isset($_SESSION['user_id'])) {
    // Redirect to login page if not logged in
    header("Location: login1.php");
    exit();
}

// Retrieve the user's name from the session
$userName = $_SESSION['name'];
?>
<html>
<head>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gradient-to-r from-blue-100 to-purple-100 min-h-screen flex items-center justify-center">
    <div class="bg-white p-8 rounded-lg shadow-lg w-full max-w-3xl">
        <div class="bg-blue-700 text-white p-4 rounded-lg flex justify-between items-center mb-6">
            <h1 class="text-2xl font-bold">Resident Dashboard</h1>
            <button class="bg-white text-blue-700 px-4 py-2 rounded shadow"><a href="login1.php">Logout</a></button>
            <button class="bg-white text-blue-700 px-4 py-2 rounded shadow"><a href="Changepass.php">Change Password</a></button>
            </div>
            <h1 class="text-3xl font-bold text-gray-800 mb-4">Welcome, <?php echo htmlspecialchars($userName); ?>!</h1>
        
        <div class="space-y-6">
            <div class="bg-yellow-100 p-6 rounded-lg shadow">
                <h2 class="text-xl font-semibold mb-2 text-blue-700">Maintenance Bills</h2>
                <p class="mb-4 text-gray-700">View and manage your maintenance bills.</p>
                <button class="bg-green-600 text-white px-4 py-2 rounded shadow hover:bg-green-700"><a href="bills(user).php">View Bills</a></button>
            </div>
            <div class="bg-yellow-100 p-6 rounded-lg shadow">
                <h2 class="text-xl font-semibold mb-2 text-blue-700">Complaint Box</h2>
                <p class="mb-4 text-gray-700">Submit a complaint or track the status of existing complaints.</p>
                <button class="bg-green-600 text-white px-4 py-2 rounded shadow hover:bg-green-700"><a href="send_complaints.php">Open Complaint Box</button>
            </div>
            <div class="bg-yellow-100 p-6 rounded-lg shadow">
                <h2 class="text-xl font-semibold mb-2 text-blue-700">View past complaints</h2>
                <p class="mb-4 text-gray-700">Check what complaints you have sent.</p>
                <button class="bg-green-600 text-white px-4 py-2 rounded shadow hover:bg-green-700"><a href="viewComplaintsUSER.php">View Complaints</button>
            </div>
            <div class="bg-yellow-100 p-6 rounded-lg shadow">
                <h2 class="text-xl font-semibold mb-2 text-blue-700">Notices/Announcements</h2>
                <p class="mb-4 text-gray-700">View important notices and announcements from the management.</p>
                <button class="bg-green-600 text-white px-4 py-2 rounded shadow hover:bg-green-700"><a href="view_noticeUSER.php">View Notices</a></button>
            </div>
        </div>
    </div>
    </body>
</html>