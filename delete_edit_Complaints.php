<?php
session_start();
$conn = new mysqli("localhost", "ayesha", "ayesha@123", "society");

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $complaintID = $_POST['Complaint_ID'];
    $action = $_POST['action'];

    if ($action === 'delete') {
        // Delete Complaint
        $delete_sql = "DELETE FROM complaints WHERE Complaint_ID = ?";
        $stmt = $conn->prepare($delete_sql);
        $stmt->bind_param("i", $complaintID);

        if ($stmt->execute()) {
            echo "<script>alert('Complaint deleted successfully');</script>";
        } else {
            echo "<script>alert('Error deleting complaint');</script>";
        }
        $stmt->close();
        header("Location: viewComplaintsUSER.php");
        exit;
    } elseif ($action === 'edit') {
        // Edit Complaint - Fetch complaint data
        $edit_sql = "SELECT * FROM complaints WHERE Complaint_ID = ?";
        $stmt = $conn->prepare($edit_sql);
        $stmt->bind_param("i", $complaintID);
        $stmt->execute();
        $result = $stmt->get_result();
        $complaint = $result->fetch_assoc();
        $stmt->close();
    }
} 

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['update'])) {
    // Update Complaint
    $complaintID = $_POST['Complaint_ID'];
    $description = $_POST['ComplaintDescription'];
    $date = $_POST['DateOfComplaint'];

    $update_sql = "UPDATE complaints SET complaints = ?, date = ? WHERE Complaint_ID = ?";
    $stmt = $conn->prepare($update_sql);
    $stmt->bind_param("ssi", $description, $date, $complaintID);

    if ($stmt->execute()) {
        echo "<script>alert('Complaint updated successfully');</script>";
    } else {
        echo "<script>alert('Error updating complaint');</script>";
    }
    $stmt->close();
    header("Location: viewComplaintsUSER.php");
    exit;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Edit Complaint</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 text-gray-800">
    <div class="container mx-auto mt-10 p-6 bg-white shadow-md rounded-lg">
        <h2 class="text-2xl font-bold mb-4 text-gray-700">Edit Complaint</h2>
        <?php if (isset($complaint)) : ?>
        <form method="POST" action="delete_edit_Complaints.php">
            <input type="hidden" name="Complaint_ID" value="<?php echo $complaint['Complaint_ID']; ?>">
            
            <div class="mb-4">
                <label for="ComplaintDescription" class="block text-gray-700 font-semibold">Complaint Description:</label>
                <textarea id="ComplaintDescription" name="ComplaintDescription" rows="5" required class="w-full px-4 py-2 border rounded-md"><?php echo $complaint['complaints']; ?></textarea>
            </div>
            
            <div class="mb-4">
                <label for="DateOfComplaint" class="block text-gray-700 font-semibold">Date of Complaint:</label>
                <input type="date" id="DateOfComplaint" name="DateOfComplaint" value="<?php echo $complaint['date']; ?>" required class="w-full px-4 py-2 border rounded-md">
            </div>
            
            <button type="submit" name="update" class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600" >Update Complaint</button>
            <a href="viewComplaintsUSER.php" class="bg-gray-400 text-white px-4 py-2 rounded hover:bg-gray-500 ml-2">Cancel</a>
        </form>
        <?php else : ?>
            <p>Complaint not found.</p>
            <a href="viewComplaintsUSER.php" class="text-blue-600 underline">Back to Complaints</a>
        <?php endif; ?>
    </div>
</body>
</html>
