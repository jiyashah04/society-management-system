<!DOCTYPE html>
 <head>
  <title>
   Society Management System
  </title>
  <script src="https://cdn.tailwindcss.com">
  </script>
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet"/>
 </head>
 <body class="bg-white">
  <header class="flex justify-between items-center p-4"> 
  <div class="flex-1">
   </div>
   <h1 class="text-xl font-bold flex-1 text-center">
    Somaiya Society
   </h1>
   <nav class="flex-1 flex justify-end space-x-4">
    <a class="text-xl font-bold border border-blue-500 text-blue-500 px-4 py-2 rounded hover:bg-blue-500 hover:text-white transition duration-300" href="login1.php">
     Login
    </a>
   </nav>
  </header>
  <main class="flex flex-col items-center text-center mt-10">
   <h2 class="text-5xl font-bold mb-6">
    ONE STOP DESTINATION FOR EFFECTIVE MANAGEMENT OF A SOCIETY
   </h2>
  </main>
  <div class="flex justify-center mt-10">
   <img alt="Illustration of a cityscape with buildings and a sun in the background" class="w-1/3" height="300" src="https://appsociety.in/css/content/images/home-page-building.jpg" width="300"/>
  </div>
  <footer class="bg-gray-400 text-center py-4 mt-10">
   <h1 class="text-2xl font-bold">
    OUR FEATURES
   </h1>
  </footer>
 </body>
<head>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
</head>
<body class="bg-gray-200">
    <div class="flex justify-center py-8 bg-white">
        <div class="grid grid-cols-5 gap-8">
            <button class="text-center p-4 border rounded-lg shadow-lg hover:bg-gray-100 focus:outline-none">
                <div class="flex justify-center items-center mb-4">
                    <div class="w-24 h-24 bg-yellow-200 rounded-full flex items-center justify-center">
                        <i class="fas fa-home text-4xl text-yellow-600"></i>
                    </div>
                </div>
                <h2 class="text-lg font-semibold text-gray-700">Manage Flats</h2>
            </button>
            <button class="text-center p-4 border rounded-lg shadow-lg hover:bg-gray-100 focus:outline-none">
                <div class="flex justify-center items-center mb-4">
                    <div class="w-24 h-24 bg-green-200 rounded-full flex items-center justify-center">
                        <i class="fas fa-users text-4xl text-green-600"></i>
                    </div>
                </div>
                <h2 class="text-lg font-semibold text-gray-700">Manage Users</h2>
            </button>
            <button class="text-center p-4 border rounded-lg shadow-lg hover:bg-gray-100 focus:outline-none">
                <div class="flex justify-center items-center mb-4">
                    <div class="w-24 h-24 bg-purple-200 rounded-full flex items-center justify-center">
                        <i class="fas fa-money-bill text-4xl text-purple-600"></i>
                    </div>
                </div>
                <h2 class="text-lg font-semibold text-gray-700">Manage Bills</h2>
            </button>
            <button class="text-center p-4 border rounded-lg shadow-lg hover:bg-gray-100 focus:outline-none">
                <div class="flex justify-center items-center mb-4">
                    <div class="w-24 h-24 bg-red-200 rounded-full flex items-center justify-center">
                        <i class="fas fa-user-friends text-4xl text-red-600"></i>
                    </div>
                </div>
                <h2 class="text-lg font-semibold text-gray-700">Event Announcements</h2>
            </button>
            <button class="text-center p-4 border rounded-lg shadow-lg hover:bg-gray-100 focus:outline-none">
                <div class="flex justify-center items-center mb-4">
                    <div class="w-24 h-24 bg-blue-200 rounded-full flex items-center justify-center">
                        <i class="fas fa-clipboard text-4xl text-blue-600"></i>
                    </div>
                </div>
                <h2 class="text-lg font-semibold text-gray-700">Manage Complaints</h2>
            </button>
        </div>
    </div>
    <div class="text-center py-4 bg-gray-400">
        <h1 class="text-2xl font-bold">KNOW MORE</h1>
    </div>
</body>

<head>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <script>
        function toggleDropdown(id) {
            const content = document.getElementById(id);
            const icon = content.previousElementSibling.querySelector('i');
            if (content.classList.contains('hidden')) {
                content.classList.remove('hidden');
                icon.classList.remove('fa-plus');
                icon.classList.add('fa-minus');
            } else {
                content.classList.add('hidden');
                icon.classList.remove('fa-minus');
                icon.classList.add('fa-plus');
            }
        }
    </script>
</head>
<body class="bg-gray-100">
    
    <div class="max-w-4xl mx-auto mt-8">
        <div class="bg-yellow-200 rounded-lg shadow-md mb-4">
            <div class="flex justify-between items-center p-4 cursor-pointer" onclick="toggleDropdown('content1')">
                <span class="font-semibold">Maintenance Management</span>
                <i class="fas fa-plus"></i>
            </div>
            <div id="content1" class="hidden p-4">
                <p>Track maintenance dues and payments. Residents can view payment history and pending amounts.</p>
            </div>
        </div>
        <div class="bg-yellow-200 rounded-lg shadow-md mb-4">
            <div class="flex justify-between items-center p-4 cursor-pointer" onclick="toggleDropdown('content2')">
                <span class="font-semibold">Shoutbox</span>
                <i class="fas fa-plus"></i>
            </div>
            <div id="content2" class="hidden p-4">
                <p>Residents can log maintenance issues or requests. Admin can view and respond to these complaints.</p>
            </div>
        </div>
        <div class="bg-yellow-200 rounded-lg shadow-md mb-4">
            <div class="flex justify-between items-center p-4 cursor-pointer" onclick="toggleDropdown('content3')">
                <span class="font-semibold">Notice Board</span>
                <i class="fas fa-plus"></i>
            </div>
            <div id="content3" class="hidden p-4">
                <p>A place where admins can post important announcements. A section where society events or notices can be posted.
                Admin can create and update events; residents can view them.</p>
            </div>
        </div>
        <div class="bg-yellow-200 rounded-lg shadow-md mb-4">
            <div class="flex justify-between items-center p-4 cursor-pointer" onclick="toggleDropdown('content4')">
                <span class="font-semibold">Resident Directory</span>
                <i class="fas fa-plus"></i>
            </div>
            <div id="content4" class="hidden p-4">
                <p>A simple directory to view the list of residents in the society (with basic details like apartment number).</p>
            </div>
        </div>
        
    </div>
</body>
</html>