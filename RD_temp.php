<html>
<head>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gradient-to-r from-blue-50 to-blue-100 text-gray-800">
    <div class="container mx-auto mt-8 p-4">
        <div class="flex justify-end mb-4">
            <a href="admin1.php" class="bg-blue-500 text-white px-8 py-4 rounded shadow-md hover:bg-blue-600 text-xl font-semibold">Back to Dashboard</a>
        </div>
        <h1 class="text-4xl font-bold mb-6 text-blue-700">Resident Directory</h1>
        <div class="bg-white shadow-lg rounded-lg overflow-hidden">
        <table class="min-w-full bg-white">
                <thead class="bg-yellow-200">
                    <tr>
                        <th class="py-3 px-4 border-b border-yellow-300 text-left text-yellow-800 font-semibold">User ID</th>
                        <th class="py-3 px-4 border-b border-yellow-300 text-left text-yellow-800 font-semibold">Resident Name</th>
                        <th class="py-3 px-4 border-b border-yellow-300 text-left text-yellow-800 font-semibold">Phone No.</th>
                        <th class="py-3 px-4 border-b border-yellow-300 text-left text-yellow-800 font-semibold">Wing</th>
                        <th class="py-3 px-4 border-b border-yellow-300 text-left text-yellow-800 font-semibold">Flat No.</th>
                        <th class="py-3 px-4 border-b border-yellow-300 text-left text-yellow-800 font-semibold">Email ID</th>
                        <th class="py-3 px-4 border-b border-yellow-300 text-left text-yellow-800 font-semibold">Action</th>
                       
                    </tr>
                </thead>
        <tbody>
            <?php
           
            
        
          $conn = new mysqli("localhost", "ayesha", "ayesha@123", "society");

            if ($conn->connect_error) {
                die("Connection failed: " . $conn->connect_error);
            }

            $sql = "SELECT * FROM user";
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                    echo "<tr>";
                    echo "<td>" . $row['user_id'] . "</td>";
                    echo "<td>" . $row['name'] . "</td>";
                    echo "<td>" . $row['phone'] . "</td>";
                    echo "<td>" . $row['wing'] . "</td>";
                    echo "<td>" . $row['flat'] . "</td>";
                    echo "<td>" . $row['email'] . "</td>";
                    echo"<td>";
                    echo '<form method="POST" action="edit_residents.php" style="display:inline;">
                    <input type="hidden" name="user_id" value="' . $row['user_id'] . '">
                    <button type="submit" name="action" value="edit" style="background-color: green; color: white; border: none; padding: 5px 10px; cursor: pointer;">Edit</button>
                     
                </form>';
                    echo "</td>";
                    echo "</tr>";
                }
            } else {
                echo "<tr><td colspan='6'>No residents found</td></tr>";
            }

            $conn->close();
            ?>
        </tbody>
    </table>
        </div>
    </div>
</body>
</html>