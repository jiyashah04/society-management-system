<?php
$conn = new mysqli("localhost", "ayesha", "ayesha@123", "society");

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$today = date("Y-m-d");
$sql = "SELECT user.email, maintenance_bills.DueDate FROM maintenance_bills 
        JOIN user ON maintenance_bills.UserID = user.user_id
        WHERE maintenance_bills.Status = 'Unpaid' AND maintenance_bills.DueDate = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("s", $today);
$stmt->execute();
$result = $stmt->get_result();

while ($row = $result->fetch_assoc()) {
    $to = $row['email'];
    $subject = "Maintenance Bill Due Today";
    $message = "Dear Resident, \n\nThis is a reminder that your maintenance bill is due today.";
    $headers = "From: admin@society.com";

    mail($to, $subject, $message, $headers);
}
$stmt->close();
$conn->close();
?>
