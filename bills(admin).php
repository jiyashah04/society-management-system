
<?php
session_start();
$conn = new mysqli("localhost", "ayesha", "ayesha@123", "society");

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Query to fetch all unpaid maintenance bills
$sql = "SELECT maintenance_bills.*, user.name, user.wing, user.flat 
        FROM maintenance_bills 
        INNER JOIN user ON maintenance_bills.UserID = user.user_id 
        WHERE maintenance_bills.status = 'Unpaid'";
$result = $conn->query($sql);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>All Due Maintenance Bills</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100 flex items-center justify-center min-h-screen">
    <div class="container mx-auto p-4">
    <div class="flex justify-end mb-4">
            <a href="admin1.php" class="bg-blue-500 text-white px-8 py-4 rounded shadow-md hover:bg-blue-600 text-xl font-semibold">Back to Dashboard</a>
        </div>
        <h2 class="text-2xl font-semibold text-gray-800 mb-4 text-center">All Due Maintenance Bills</h2>
        <div class="overflow-x-auto shadow-lg rounded-lg">
            <table class="min-w-full bg-white rounded-lg">
                <thead class="bg-gray-800 text-white">
                    <tr>
                        <th class="py-2 px-4 text-left">Resident Name</th>
                        <th class="py-2 px-4 text-left">Wing</th>
                        <th class="py-2 px-4 text-left">Flat Number</th>
                        <th class="py-2 px-4 text-left">Month & Year</th>
                        <th class="py-2 px-4 text-left">Total Amount</th>
                        <th class="py-2 px-4 text-left">Due Date</th>
                        <th class="py-2 px-4 text-left">Status</th>
                    </tr>
                </thead>
                <tbody class="text-gray-700">
                    <?php while ($row = $result->fetch_assoc()) { ?>
                        <tr class="border-b">
                            <td class="py-2 px-4"><?php echo $row['name']; ?></td>
                            <td class="py-2 px-4"><?php echo $row['wing']; ?></td>
                            <td class="py-2 px-4"><?php echo $row['flat']; ?></td>
                            <td class="py-2 px-4"><?php echo date("F Y", strtotime($row['month_year'])); ?></td>
                            <td class="py-2 px-4"><?php echo "₹" . number_format($row['total_amount'], 2); ?></td>
                            <td class="py-2 px-4"><?php echo $row['DueDate']; ?></td>
                            <td class="py-2 px-4">
                                <span class="px-2 py-1 text-xs font-semibold leading-tight 
                                    <?php echo ($row['Status'] == 'Unpaid') ? 'text-red-700 bg-red-200' : 'text-green-700 bg-green-200'; ?> rounded-full">
                                    <?php echo $row['Status']; ?>
                                </span>
                            </td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </div>
</body>
</html>

<?php
$conn->close();
?>

