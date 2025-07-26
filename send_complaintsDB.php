<?php
 session_start();
// Connect to the database
try {
    $conn = new PDO("mysql:host=localhost;dbname=society", 'ayesha', 'ayesha@123');

    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

   
   /* if (!isset($_SESSION['user_id'])) {
        
        exit();
    }*/
    
    $userid = $_SESSION['user_id'];
    
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        // Retrieve and sanitize form data
        $flat = htmlspecialchars($_POST['flat']);
        $name = htmlspecialchars($_POST['name']);
        $email = htmlspecialchars($_POST['email']);
        //$phone = htmlspecialchars($_POST['phone']);
        $complaints = htmlspecialchars($_POST['complaints']);
        $date = htmlspecialchars($_POST['date']);
        
        // Prepare SQL query to insert form data into the `user` table
        $sql = "INSERT INTO complaints (userid,flat, name, email, complaints, date) 
                VALUES (:userid, :flat, :name, :email, :complaints, :date)";
        $stmt = $conn->prepare($sql);

        // Bind form values to SQL query parameters
        $stmt->bindParam('userid', $userid);
        $stmt->bindParam('flat', $flat);
        $stmt->bindParam('name', $name);
        $stmt->bindParam('email', $email);
       // $stmt->bindParam('phone', $phone);
        $stmt->bindParam('complaints', $complaints);
        $stmt->bindParam('date', $date);

        // Execute query and check if the data was inserted successfully
        if ($stmt->execute()) {
            echo "Complaint sent successfully! Please Go To User Dashboard";
            header('Location: viewComplaintsUSER.php');
        } else {
            echo "Error: Unable to send complaint.";
        }
    }
} catch (PDOException $e) {
    echo "Database connection failed: " . $e->getMessage();
}
?>
