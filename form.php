<?php


if($_SERVER["REQUEST_METHOD"]== "POST"){
    $FirstName = $_POST["FirstName"];
    $LastName = $_POST["LastName"];
    $JobPosition = $_POST["JobPosition"];
    $BasicPay = $_POST["BasicPay"];
    $DaysWorked = $_POST["DaysWorked"];
    $Salary = $BasicPay* $DaysWorked;    



    try{
        require_once("db-connect.php"); 
            $query = "INSERT INTO tblemployee (FirstName, LastName, JobPosition, BasicPay, DaysWorked,  Salary ) 
            VALUES
 (:FirstName,:LastName,:JobPosition, :BasicPay,:DaysWorked,  :Salary );";
        
     
        $stmt = $pdo->prepare($query);

    
            $stmt->bindParam(":FirstName", $FirstName);
            $stmt->bindParam(":LastName", $LastName);
            $stmt->bindParam(":JobPosition", $JobPosition);
            $stmt->bindParam(":BasicPay", $BasicPay);
            $stmt->bindParam(":DaysWorked", $DaysWorked);
            $stmt->bindParam(":Salary", $Salary);

            $stmt->execute();


        $pdo = null;
        $stmt = null;
        echo "ADD successfully";
    
        die();


    }catch(Exception $e){
        die("Query failed: ". $e->getMessage());

    }
    
    

}else{
    header("Location: ../index.php");
}