<?php
session_start();
//include 'database.php'; // Replace with your actual database connection file
$servername = "localhost"; // Change if necessary
$username = "ayesha"; // Change if necessary
$password = "ayesha@123"; // Change if necessary
$dbname = "society"; // Change to your database name

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

/*if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $user_id = $_POST['user_id'];
    $current_password = $_POST['current_password'];
    $new_password = $_POST['new_password'];
    $confirm_password = $_POST['confirm_password'];

    // Check if new passwords match
    if ($new_password != $confirm_password) {
        echo "New passwords do not match!";
        exit();
    }

    // Fetch current password from database
    $query = "SELECT password FROM user WHERE user_id = ?";
    $stmt = $conn->prepare($query);
    $stmt->bind_param("i", $user_id);
    $stmt->execute();
    $stmt->bind_result($db_password);
    $stmt->fetch();
    $stmt->close();

    // Verify current password
    if ($current_password !== $db_password) {
        echo "Current password is incorrect!";
        exit();
    }

    // Update the password in the database without hashing
    $update_query = "UPDATE user SET password = ? WHERE user_id = ?";
    $update_stmt = $conn->prepare($update_query);
    $update_stmt->bind_param("si", $new_password, $user_id);

    if ($update_stmt->execute()) {
        echo "Password successfully updated!";
    } else {
        echo "Error updating password!";
    }
    $update_stmt->close();
    $conn->close();
}
    */
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $user_id = $_POST['user_id'];
        $current_password = $_POST['current_password'];
        $new_password = $_POST['new_password'];
        $confirm_password = $_POST['confirm_password'];
    
        // Check if new passwords match
        if ($new_password != $confirm_password) {
            echo "New passwords do not match!";
            exit();
        }
    
        // Fetch current password from database
        $query = "SELECT password FROM user WHERE user_id = ?";
        $stmt = $conn->prepare($query);
        if ($stmt) {
            //$row = $result->fetch_assoc();
            // Store UserID and UserName in session
            $user_id = $_SESSION['user_id'];
            $stmt->bind_param("i", $user_id);
            $stmt->execute();
            //$result = $stmt->get_result();
            $stmt->bind_result($db_password);
           //$stmt->bind_result($current_password);
            $stmt->fetch();
            $stmt->close();
    
            // Verify current password
            if ($current_password !== $db_password) {
                echo "Current password is incorrect!";
                exit();
            }
            
            // Update the password in the database without hashing
            $update_query = "UPDATE user SET password = ? WHERE user_id = ?";
            $update_stmt = $conn->prepare($update_query);
            if ($update_stmt) {
                $update_stmt->bind_param("si", $new_password, $user_id);
                if ($update_stmt->execute()) {
                    echo "Password successfully updated!";
                    header('Location: login1.php');
                } else {
                    echo "Error updating password!";
                }
                $update_stmt->close();
            } else {
                echo "Failed to prepare update statement.";
            }
        } else {
            echo "Failed to prepare select statement.";
        }
    
        $conn->close();
    }
    ?>

