<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Change Password</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100 flex items-center justify-center min-h-screen">
    <div class="bg-white p-8 rounded-lg shadow-md w-96">
        <h2 class="text-2xl font-bold text-center mb-6">Change Password</h2>
        <form action="ChangepassDB.php" method="POST">
            <input type="hidden" name="user_id" value="<?php echo $_SESSION['user_id']; ?>">
            
            <div class="mb-4">
                <label for="current_password" class="block text-sm font-medium text-gray-700">Current Password:</label>
                <input type="password" id="current_password" name="current_password" required class="mt-1 block w-full border border-gray-300 rounded-md p-2 focus:outline-none focus:ring focus:ring-blue-500">
            </div>

            <div class="mb-4">
                <label for="new_password" class="block text-sm font-medium text-gray-700">New Password:</label>
                <input type="password" id="new_password" name="new_password" required class="mt-1 block w-full border border-gray-300 rounded-md p-2 focus:outline-none focus:ring focus:ring-blue-500">
            </div>

            <div class="mb-4">
                <label for="confirm_password" class="block text-sm font-medium text-gray-700">Confirm New Password:</label>
                <input type="password" id="confirm_password" name="confirm_password" required class="mt-1 block w-full border border-gray-300 rounded-md p-2 focus:outline-none focus:ring focus:ring-blue-500">
            </div>

            <button type="submit" class="w-full bg-blue-500 text-white font-bold py-2 rounded hover:bg-blue-600">Change Password</button>
        </form>
    </div>
</body>
</html>