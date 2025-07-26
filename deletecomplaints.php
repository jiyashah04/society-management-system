<?php
/*
$servername = "localhost";
$username = "ayesha";
$password = "ayesha@123";
$dbname = "society";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$id = $_POST['id'];

$sql = "DELETE FROM complaints WHERE id='$id' ";

if ($conn->query($sql) === TRUE) {
    echo "Complaint deleted successfully!";
} else {
    echo "Error deleting record: " . $conn->error;
}

$conn->close();
header("Location: view_complaints.php");
exit;
?>
*/