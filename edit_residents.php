<?php
// Database connection
$conn = new mysqli("localhost", "ayesha", "ayesha@123", "society");

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $user_id = $_POST['user_id'];

    // If the form is submitted for editing
    if (isset($_POST['update'])) {
        $name = $_POST['name'];
        $phone = $_POST['phone'];
        $wing = $_POST['wing'];
        $flat = $_POST['flat'];
        $email = $_POST['email'];

        // Update resident data
        $update_sql = "UPDATE user SET name=?, phone=?, wing=?, flat=?, email=? WHERE user_id=?";
        $stmt = $conn->prepare($update_sql);
        $stmt->bind_param("sssssi", $name, $phone, $wing, $flat, $email, $user_id);

        if ($stmt->execute()) {
            echo "<script>alert('Resident updated successfully');</script>";
        } else {
            echo "<script>alert('Error updating resident');</script>";
        }
        $stmt->close();
        header("Location: RD_temp.php");
        exit;
    } elseif (isset($_POST['action']) && $_POST['action'] === 'edit') {
        // Fetch resident data to edit
        $query = "SELECT * FROM user WHERE user_id = ?";
        $stmt = $conn->prepare($query);
        $stmt->bind_param("i", $user_id);
        $stmt->execute();
        $result = $stmt->get_result();
        $resident = $result->fetch_assoc();
        $stmt->close();
    }
}

$conn->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Edit Resident</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 text-gray-800">
    <div class="container mx-auto mt-10 p-6 bg-white shadow-md rounded-lg">
        <h2 class="text-2xl font-bold mb-4 text-gray-700">Edit Resident Information</h2>
        
        <?php if (isset($resident)) : ?>
        <form method="POST" action="edit_residents.php">
            <input type="hidden" name="user_id" value="<?php echo $resident['user_id']; ?>">

            <div class="mb-4">
                <label class="block text-gray-700 font-semibold">Name:</label>
                <input type="text" name="name" value="<?php echo $resident['name']; ?>" required class="w-full px-4 py-2 border rounded-md">
            </div>
            <div class="mb-4">
                <label class="block text-gray-700 font-semibold">Phone:</label>
                <input type="text" name="phone" value="<?php echo $resident['phone']; ?>" required class="w-full px-4 py-2 border rounded-md">
            </div>
            <div class="mb-4">
                <label class="block text-gray-700 font-semibold">Wing:</label>
                <input type="text" name="wing" value="<?php echo $resident['wing']; ?>" required class="w-full px-4 py-2 border rounded-md">
            </div>
            <div class="mb-4">
                <label class="block text-gray-700 font-semibold">Flat No:</label>
                <input type="text" name="flat" value="<?php echo $resident['flat']; ?>" required class="w-full px-4 py-2 border rounded-md">
            </div>
            <div class="mb-4">
                <label class="block text-gray-700 font-semibold">Email:</label>
                <input type="email" name="email" value="<?php echo $resident['email']; ?>" required class="w-full px-4 py-2 border rounded-md">
            </div>

            <button type="submit" name="update" class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600">Update Resident</button>
            <a href="RD_temp.php" class="bg-gray-400 text-white px-4 py-2 rounded hover:bg-gray-500 ml-2">Cancel</a>
        </form>
        <?php else : ?>
            <p>Resident not found.</p>
            <a href="RD_temp.php" class="text-blue-600 underline">Back to Directory</a>
        <?php endif; ?>
    </div>
</body>
</html>
