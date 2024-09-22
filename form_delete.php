
<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Capture form data
    $EmployeeID = $_POST["EmployeeID"];
    try {
        require_once("db-connect.php"); // Database connection

     
    
            $query = "DELETE FROM tblemployee WHERE EmployeeID = :EmployeeID";
            
            $stmt = $pdo->prepare($query);
            $stmt->bindParam(":EmployeeID", $EmployeeID);
            $stmt->execute();

            // Cleanup
            $pdo = null;
            $stmt = null;
            echo "Delete successfully";
           // header("Location: /index.php"); // Redirect after operation
            die();
        

    } catch (Exception $e) {
        die("Query failed: " . $e->getMessage());
    }

} else {
    header("Location: ../index.php");
}
?>

