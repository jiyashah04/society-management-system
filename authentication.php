<?php


session_start();  // Start the session

// Database connection
$host = 'localhost';
$db = 'society';
$user = 'ayesha';
$pass = 'ayesha@123';

$conn = new mysqli($host, $user, $pass, $db);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Determine if it's user or admin login
if (isset($_POST['userForm'])) {
    // User login logic
    $wing = $_POST['wing'];
    $flat = $_POST['flat'];
    $password = $_POST['password'];

    // SQL query to check user credentials
    $sql = "SELECT * FROM user WHERE wing=? AND flat=? AND password=?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("sss", $wing, $flat, $password);
    $stmt->execute();
    $result = $stmt->get_result();

    // Check if user exists
    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        // Store UserID and UserName in session
        $_SESSION['user_id'] = $row['user_id'];
        $_SESSION['name'] = $row['name'];  // Assuming 'name' is the user's name column
        
        // Redirect to user dashboard
        header('Location: user.php');
        exit();
    } else {
        // Redirect to login page with an error message
        header('Location: login1.php');
        echo "Invalid Wing, Flat Number, or Password! Please login again";
        exit();
    }

    $stmt->close();

} elseif (isset($_POST['adminForm'])) {
    // Admin login logic
    $admin_id = $_POST['admin_id'];
    $password = $_POST['password'];

    // SQL query to check admin credentials
    $sql = "SELECT * FROM admin WHERE admin_id=? AND password=?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ss", $admin_id, $password);
    $stmt->execute();
    $result = $stmt->get_result();

    // Check if admin exists
    if ($result->num_rows > 0) {
        // Redirect to admin dashboard
        echo "success";
        header('Location: admin1.php');
        exit();
    } else {
        // Redirect to login page with an error message
        echo "wrong else";
        //header('Location: login1.php');
        echo "Invalid Admin ID or Password! Please login again";
        exit();
    }

    $stmt->close();
}

$conn->close();
?>

