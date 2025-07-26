<html>
<head>
    <title>Send Notice</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Roboto', sans-serif;
        }
    </style>
</head>
<body class="bg-gradient-to-r from-blue-100 to-blue-200 flex items-center justify-center min-h-screen">
    <div class="w-full max-w-2xl bg-white rounded-lg shadow-lg p-8">
        <div class="flex justify-between items-center mb-6">
            <h1 class="text-3xl font-bold text-blue-600">Send Notice</h1>
            <a href="admin1.php" class="text-white bg-blue-600 hover:bg-blue-700 border border-blue-600 rounded px-2 py-1">Back to Dashboard</a>
        </div>

        <form action="sendnoticeDB.php" method="POST">
            <div class="mb-4">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="NoticeTitle">
                    Notice Title:
                </label>
                <input type="text" id="NoticeTiltle" name = "NoticeTitle" required>
               
            </div>
            <div class="mb-4">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="NoticeContent">
                    Notice Content:
                </label>
                <textarea id="NoticeContent" name="NoticeContent" rows="5" required></textarea>
            </div>
            <div class="mb-4">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="DateOfNotice">
                    Notice date:
                </label>
                <input type="Date" id="date" name="DateOfNotice" required>
            </div>
           
            <div class="flex items-center justify-center">
                <button class="bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline" Button type="submit">
                    Send Notice
                </button>
            </div>
        </form>
    </div>
</body>
</html>