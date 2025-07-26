<?php
$conn = new mysqli("localhost", "ayesha", "ayesha@123", "society");

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $noticeID = $_POST['NoticeID'];
    $action = $_POST['action'];

    if ($action === 'delete') {
        // Delete Notice
        $delete_sql = "DELETE FROM notices WHERE NoticeID = ?";
        $stmt = $conn->prepare($delete_sql);
        $stmt->bind_param("i", $noticeID);
        
        if ($stmt->execute()) {
            echo "<script>alert('Notice deleted successfully');</script>";
        } else {
            echo "<script>alert('Error deleting notice');</script>";
        }
        $stmt->close();
        header("Location: view_noticesADMIN.php");
        exit;
    } elseif ($action === 'edit') {
        // Edit Notice - Fetch notice data
        $edit_sql = "SELECT * FROM notices WHERE NoticeID = ?";
        $stmt = $conn->prepare($edit_sql);
        $stmt->bind_param("i", $noticeID);
        $stmt->execute();
        $result = $stmt->get_result();
        $notice = $result->fetch_assoc();
        $stmt->close();
    }
} if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['update'])) {
    // Update Notice
    $noticeID = $_POST['NoticeID'];
    $title = $_POST['NoticeTitle'];
    $content = $_POST['NoticeContent'];
    $date = $_POST['DateOfNotice'];

    $update_sql = "UPDATE notices SET NoticeTitle = ?, NoticeContent = ?, DateOfNotice = ? WHERE NoticeID = ?";
    $stmt = $conn->prepare($update_sql);
    $stmt->bind_param("sssi", $title, $content, $date, $noticeID);

    if ($stmt->execute()) {
        echo "<script>alert('Notice updated successfully');</script>";
    } else {
        echo "<script>alert('Error updating notice');</script>";
    }
    $stmt->close();
    header("Location: view_noticesADMIN.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Edit Notice</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 text-gray-800">
    <div class="container mx-auto mt-10 p-6 bg-white shadow-md rounded-lg">
        <h2 class="text-2xl font-bold mb-4 text-gray-700">Edit Notice</h2>
        <?php if (isset($notice)) : ?>
        <form method="POST" action="delete_edit.php">
            <input type="hidden" name="NoticeID" value="<?php echo $notice['NoticeID']; ?>">
            
            <div class="mb-4">
                <label for="NoticeTitle" class="block text-gray-700 font-semibold">Title:</label>
                <input type="text" id="NoticeTitle" name="NoticeTitle" value="<?php echo $notice['NoticeTitle']; ?>" required class="w-full px-4 py-2 border rounded-md">
            </div>
            
            <div class="mb-4">
                <label for="NoticeContent" class="block text-gray-700 font-semibold">Content:</label>
                <textarea id="NoticeContent" name="NoticeContent" rows="5" required class="w-full px-4 py-2 border rounded-md"><?php echo $notice['NoticeContent']; ?></textarea>
            </div>
            
            <div class="mb-4">
                <label for="DateOfNotice" class="block text-gray-700 font-semibold">Date of Notice:</label>
                <input type="date" id="DateOfNotice" name="DateOfNotice" value="<?php echo $notice['DateOfNotice']; ?>" required class="w-full px-4 py-2 border rounded-md">
            </div>
            
            <button type="submit" name="update" class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600">Update Notice</button>
            <a href="view_noticesADMIN.php" class="bg-gray-400 text-white px-4 py-2 rounded hover:bg-gray-500 ml-2">Cancel</a>
        </form>
        <?php else : ?>
            <p>Notice not found.</p>
            <a href="view_noticesADMIN.php" class="text-blue-600 underline">Back to Notices</a>
        <?php endif; ?>
    </div>
</body>
</html>
