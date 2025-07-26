<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View Complaints</title>
    <style>
        /* Styling for the table */
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        th, td {
            padding: 10px;
            border: 1px solid #ddd;
            text-align: left;
        }

        th {
            background-color: #f2f2f2;
        }

        .bg-red-500 {
            background-color: #dc3545;
            color: white;
            padding: 5px 10px;
            border-radius: 3px;
            cursor: pointer;
        }
    </style>
</head>
<body>

    <h2>Complaints List</h2>
    <table class="min-w-full bg-white border border-yellow-300">
        <thead>
            <tr>
                <th>ID</th>
                <th>Flat Number</th>
                <th>Resident Name</th>
                <th>Complaint</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $conn = new mysqli("localhost", "ayesha", "ayesha@123", "society");

            if ($conn->connect_error) {
                die("Connection failed: " . $conn->connect_error);
            }

            $sql = "SELECT * FROM complaints";
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                    echo "<tr>";
                    echo "<td>" . $row['Complaint_ID'] . "</td>";
                    echo "<td>" . $row['flat'] . "</td>";
                    echo "<td>" . $row['name'] . "</td>";
                    echo "<td>" . $row['complaints'] . "</td>";
                
                    echo "<td>
                            <form action='deletecomplaints.php' method='POST' style='display:inline;'>
                                <input type='hidden' name='id' value='" . $row['id'] . "'>
                                <button type='submit' class='bg-red-500'>Delete</button>
                            </form>
                          </td>";
                    echo "</tr>";
                }
            } else {
                echo "<tr><td colspan='6'>No complaints found</td></tr>";
            }

            $conn->close();
            ?>
        </tbody>
    </table>

</body>
</html>
