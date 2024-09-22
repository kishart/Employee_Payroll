<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $FirstName = $_POST["FirstName"];
    $LastName = $_POST["LastName"];
    $JobPosition = $_POST["JobPosition"];

    try {
        require_once("db-connect.php"); 
       
            $query = "UPDATE tblemployee 
            SET JobPosition = :JobPosition 
            WHERE FirstName = :FirstName AND LastName = :LastName";
            
            $stmt = $pdo->prepare(query: $query);
            $stmt->bindParam(":JobPosition", $JobPosition);
            $stmt->bindParam(":FirstName", $FirstName);
            $stmt->bindParam(":LastName", $LastName);
            $stmt->execute();

          
            $pdo = null;
            $stmt = null;
            echo "Update successfully";
            //header("Location: /index.php"); 
            die();
        

    } catch (Exception $e) {
        die("Query failed: " . $e->getMessage());
    }

} else {
    header("Location: ../index.php");
}
