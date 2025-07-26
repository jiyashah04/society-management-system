
<html>
<head>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <script>
        function toggleForm(role) {
            const userButton = document.getElementById('userButton');
            const adminButton = document.getElementById('adminButton');
            const userForm = document.getElementById('userForm');
            const adminForm = document.getElementById('adminForm');

            if (role === 'user') {
                userButton.classList.add('bg-black', 'text-white');
                userButton.classList.remove('text-gray-500');
                adminButton.classList.add('text-gray-500');
                adminButton.classList.remove('bg-black', 'text-white');
                userForm.classList.remove('hidden');
                adminForm.classList.add('hidden');
            } else {
                adminButton.classList.add('bg-black', 'text-white');
                adminButton.classList.remove('text-gray-500');
                userButton.classList.add('text-gray-500');
                userButton.classList.remove('bg-black', 'text-white');
                adminForm.classList.remove('hidden');
                userForm.classList.add('hidden');
            }
        }
    </script>
</head>
<body class="h-screen flex items-center justify-center" style="background-image: url('http://wonderfulengineering.com/wp-content/uploads/2014/01/beautiful-wallpaper-29.jpg'); background-size: cover;">
    <div class="bg-white p-8 rounded-lg shadow-lg w-96">
        <div class="flex justify-between mb-4">
            <button id="userButton" class="bg-black text-white px-4 py-2 rounded" onclick="toggleForm('user')">User</button>
            <button id="adminButton" class="text-gray-500 px-4 py-2"onclick="toggleForm('admin')">Admin</button>
        </div>
        <form id="userForm" action="authentication.php" method="POST">
    <input type="hidden" name="userForm" value="true">
    <div class="mb-4 flex items-center">
        <i class="fas fa-building text-gray-700 mr-2"></i>
        <input type="text" name="wing" placeholder="Enter your Wing" class="w-full p-2 border-b-2 border-gray-300 focus:outline-none focus:border-black">
    </div>
    <div class="mb-4 flex items-center">
        <i class="fas fa-door-open text-gray-700 mr-2"></i>
        <input type="text" name="flat" placeholder="Enter your Flat Number" class="w-full p-2 border-b-2 border-gray-300 focus:outline-none focus:border-black">
    </div>
    <div class="mb-4 flex items-center">
        <i class="fas fa-lock text-gray-700 mr-2"></i>
        <input type="password" name="password" placeholder="Enter Password" class="w-full p-2 border-b-2 border-gray-300 focus:outline-none focus:border-black">
    </div>
    <button type="submit" class="w-full bg-black text-white py-2 rounded">Login</button>
    <button class="bg-gray-200 text-black py-2 px-4 w-full rounded" onclick="window.open('register.php')">Register</button>
</form>

        <form id="adminForm" action="authentication.php" method="POST" class="hidden">
    <input type="hidden" name="adminForm" value="true">
    <div class="mb-4 flex items-center">
        <i class="fas fa-user text-gray-700 mr-2"></i>
        <input type="text" name="admin_id" placeholder="Enter Admin ID" class="w-full p-2 border-b-2 border-gray-300 focus:outline-none focus:border-black">
    </div>
    <div class="mb-4 flex items-center">
        <i class="fas fa-lock text-gray-700 mr-2"></i>
        <input type="password" name="password" placeholder="Enter Password" class="w-full p-2 border-b-2 border-gray-300 focus:outline-none focus:border-black">
    </div>
    <button type="submit" class="w-full bg-black text-white py-2 rounded">Login</button>
</form>

    </div>
</body>
</html>