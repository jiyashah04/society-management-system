<?php
try {
    $conn = new PDO("mysql:host=localhost;dbname=society", 'ayesha', 'ayesha@123');

    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);


if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $month_year =htmlspecialchars($_POST['month_year']); // e.g., '2024-11-01'
        $service_charges = htmlspecialchars($_POST['service_charges']);
        $property_tax = htmlspecialchars($_POST['property_tax']);
        $water_charges = htmlspecialchars($_POST['water_charges']);
        $repair_maintenance_charges = htmlspecialchars($_POST['repair_maintenance_charges']);
        $lift_repair_charges = htmlspecialchars($_POST['lift_repair_charges']);
        $miscellaneous_charges = htmlspecialchars($_POST['miscellaneous_charges']);
        //echo "title". $NoticeTitle;
        
        // Prepare SQL query to insert form data into the `user` table
        $sql = "INSERT INTO monthly_charges (month_year, service_charges, property_tax,water_charges,repair_maintenance_charges,lift_repair_charges,miscellaneous_charges) 
                VALUES (:month_year, :service_charges, :property_tax,:water_charges,:repair_maintenance_charges,:lift_repair_charges,:miscellaneous_charges)";
        $stmt = $conn->prepare($sql);

        // Bind form values to SQL query parameters
        $stmt->bindParam(':month_year', $month_year);
        $stmt->bindParam(':service_charges', $service_charges);
        $stmt->bindParam(':property_tax', $property_tax);
        $stmt->bindParam(':water_charges', $water_charges);
        $stmt->bindParam(':repair_maintenance_charges', $repair_maintenance_charges);
        $stmt->bindParam(':lift_repair_charges', $lift_repair_charges);
        $stmt->bindParam(':miscellaneous_charges', $miscellaneous_charges);
    

        // Execute query and check if the data was inserted successfully
        if ($stmt->execute()) {
            echo "Charges Sent Successfully";
           //header('Location: view_noticesADMIN.php');
           $month_year = $_POST['month_year'];
           //echo "month year =" . $month_year;
    //Fetch monthly charges for the specified month
   // $charges_sql = "SELECT * FROM monthly_charges WHERE month_year = ?";
    //$stmt = $conn->prepare($charges_sql);
    //$stmt->bindparam("s", $month_year);
    //$stmt->execute();
    //$charges_result = $stmt->get_result();
    //$charges = $charges_result->fetch_assoc();
    //echo "charges result" . $charges;
    //$stmt->close();

    //if ($charges){
        // Calculate total amount for each bill
        $totalAmount = $service_charges+ $property_tax +
                       $water_charges + $repair_maintenance_charges+
                       $lift_repair_charges + $miscellaneous_charges;
                       //echo "total amount" . $totalAmount;

         $DueDate = date('Y-m-d', strtotime($month_year . ' + 30 days'));

        // Fetch all residents
        $users_sql = "SELECT user_id FROM user";
        $users_result = $conn->query($users_sql);

        while ($user = $users_result->fetch(PDO::FETCH_ASSOC)) {
            $userId = $user['user_id'];
            // Insert bill for this user
            //echo "User id is :" . $userId;
            $bill_sql = "INSERT INTO maintenance_bills (UserID, total_amount, month_year, DueDate) VALUES (:UserID,:total_amount,:month_year, :DueDate)";
            $stmt = $conn->prepare($bill_sql);
            //$stmt->bindParam("ids", $userId, $totalAmount, $month_year);
            $stmt->bindParam(':UserID', $userId);
            $stmt->bindParam(':total_amount', $totalAmount);
            $stmt->bindParam(':month_year', $month_year);
            $stmt->bindParam(':DueDate', $DueDate);
            $stmt->execute();
            //$user++;
        }
        

    
        echo "<script>alert('Maintenance bills generated successfully');</script>";
        //header("Location: bills(admin).php");
        $stmt->close();
    //} else {
      //  echo "<script>alert('No charges found for the selected month');</script>";
    //}

        } else {
            echo "Error";
        
        }
} }  catch (PDOException $e) {
    echo "Database connection failed: " . $e->getMessage();
}
//$conn->close();
 
?>
