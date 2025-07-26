

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Send Notice</title>
    <style>
        /* Styling for the form */
        form {
            max-width: 500px;
            margin: auto;
            padding: 20px;
            border: 1px solid #ddd;
            border-radius: 5px;
            background-color: #f9f9f9;
        }
        
        label, input, textarea {
            display: block;
            width: 100%;
            margin-bottom: 10px;
        }
        
        button {
            padding: 10px 20px;
            background-color: #28a745;
            color: white;
            border: none;
            border-radius: 5px;
        }
    </style>
</head>
<body>


    <h2>Send Notices</h2>
    <form action="sendnoticeDB.php" method="POST">
        <label for="NoticeTitle">Notice Title:</label>
        <input type="text" id="NoticeTitle" name="NoticeTitle" required><br><br>
        
       
       
        
        <label for="NoticeContent">Notice Content:</label>
        <textarea id="NoticeContent" name="NoticeContent" rows="5" required></textarea><br><br>

        <label for="DateOfNotice">Date:</label>
        <input type="Date" id="DateOfNotice" name="DateOfNotice" required><br><br>
        
        <button type="submit">Submit Complaint</button>
    </form>

</body>
</html>
