<?php
include "connection/connection.php";

if(isset($_GET['submitbtn'])){
$card_name = $_GET['card_name'];
$cardno = $_GET['cardno'];
$cvv = $_GET['cvv'];


$sql = "INSERT INTO payment_details (card_name, cardno, cvv) VALUES (:card_name, :cardno, :cvv)";
if($stmt = $pdo->prepare($sql)){
            
            $stmt->bindParam(":card_name", $card_name);
            $stmt->bindParam(":cardno", $cardno);
            $stmt->bindParam(":cvv", $cvv);
            

    if($stmt->execute()){
                
                header("location:home.php");
                exit();
            } else{
                echo "details not save.";
            }
}
}



?>