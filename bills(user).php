
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Maintenance Bills</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-blue-50">
    <div class="container mx-auto mt-8">
        <h1 class="text-3xl font-bold text-center text-blue-700 mb-6">My Maintenance Bills</h1>
        <div class="overflow-x-auto">
            <table class="min-w-full bg-white rounded-lg shadow-md">
                <thead class="bg-yellow-300 text-white">
                    <tr>
                        <th class="py-3 px-4">Bill ID</th>
                        <th class="py-3 px-4">Due Date</th>
                        <th class="py-3 px-4">Amount</th>
                        <th class="py-3 px-4">Date of Issue</th>
                        <th class="py-3 px-4">Status</th>
                        <th class="py-3 px-4">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    session_start();
                    $userId = $_SESSION['user_id']; // Assume user_id is stored in session

                    try {
                        $conn = new PDO("mysql:host=localhost;dbname=society", 'ayesha', 'ayesha@123');
                        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

                        $stmt = $conn->prepare("SELECT * FROM maintenance_bills WHERE UserID = :userId");
                        $stmt->bindParam(':userId', $userId);
                        $stmt->execute();

                        while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
                            echo "<tr class='border-b hover:bg-gray-100'>";
                            echo "<td class='py-3 px-4 text-center'>{$row['BILLID']}</td>";
                            echo "<td class='py-3 px-4 text-center'>{$row['DueDate']}</td>";
                            echo "<td class='py-3 px-4 text-center'>{$row['total_amount']}</td>";
                            echo "<td class='py-3 px-4 text-center'>{$row['month_year']}</td>";
                            echo "<td class='py-3 px-4 text-center'>{$row['Status']}</td>";
                            echo "<td class='py-3 px-4 text-center'>";
                            if ($row['Status'] == 'Unpaid') {
                                echo "<a href='pay_bill.php?bill_id={$row['BILLID']}' class='bg-green-600 text-white px-4 py-2 rounded hover:bg-green-700'>Pay</a>";
                            } else {
                                echo "<span class='text-gray-500'>Paid</span>";
                            }
                            echo "</td>";
                            echo "</tr>";
                        }
                    } catch (PDOException $e) {
                        echo "<tr><td colspan='6' class='text-center py-3'>Error fetching bills: " . $e->getMessage() . "</td></tr>";
                    }
                    ?>
                </tbody>
            </table>
        </div>
        <div class="mt-4 text-center">
            <a href="user.php" class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700">Back to Dashboard</a>
        </div>
    </div>
</body>
</html>
