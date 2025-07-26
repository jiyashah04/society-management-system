<?php
// Connect to the database
try {
    $conn = new PDO("mysql:host=localhost;dbname=society", 'ayesha', 'ayesha@123');

    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        // Retrieve and sanitize form data
        $NoticeTitle = htmlspecialchars($_POST['NoticeTitle']);
        $NoticeContent = htmlspecialchars($_POST['NoticeContent']);
        $DateOfNotice = htmlspecialchars($_POST['DateOfNotice']);
        echo "title". $NoticeTitle;
        
        // Prepare SQL query to insert form data into the `user` table
        $sql = "INSERT INTO notices (NoticeTitle, NoticeContent, DateOfNotice) 
                VALUES (:NoticeTitle, :NoticeContent, :DateOfNotice)";
        $stmt = $conn->prepare($sql);

        // Bind form values to SQL query parameters
        $stmt->bindParam('NoticeTitle', $NoticeTitle);
        $stmt->bindParam('NoticeContent', $NoticeContent);
        $stmt->bindParam('DateOfNotice', $DateOfNotice);
    

        // Execute query and check if the data was inserted successfully
        if ($stmt->execute()) {
            echo "Notice Sent Successfully";
            header('Location: view_noticesADMIN.php');
        } else {
            echo "Error";
        }
    }
} catch (PDOException $e) {
    echo "Database connection failed: " . $e->getMessage();
}
?>

