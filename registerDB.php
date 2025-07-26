<?php

// Connect to the database
try {
    $conn = new PDO("mysql:host=localhost;dbname=society", 'ayesha', 'ayesha@123');

    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        // Retrieve and sanitize form data
        $name = htmlspecialchars($_POST['name']);
        $phone = htmlspecialchars($_POST['phone']);
        $wing = htmlspecialchars($_POST['wing']);
        $flat = htmlspecialchars($_POST['flat-no']);
        $email = htmlspecialchars($_POST['email']);
        $password = htmlspecialchars($_POST['password']);  // Hash the password
        


        // Prepare SQL query to insert form data into the `user` table
        $sql = "INSERT INTO user (name, phone, wing, flat, email, password) 
                VALUES (:name, :phone, :wing, :flat, :email, :password)";
        $stmt = $conn->prepare($sql);

        // Bind form values to SQL query parameters
        $stmt->bindParam(':name', $name);
        $stmt->bindParam(':phone', $phone);
        $stmt->bindParam(':wing', $wing);
        $stmt->bindParam(':flat', $flat);
        $stmt->bindParam(':email', $email);
        $stmt->bindParam(':password', $password);

        // Execute query and check if the data was inserted successfully
        if ($stmt->execute()) {
            echo "Registration successful!";
        } else {
            echo "Error: Unable to register user.";
        }
    }
} catch (PDOException $e) {
    echo "Database connection failed: " . $e->getMessage();
}
?>
