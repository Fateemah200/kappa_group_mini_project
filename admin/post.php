<?php
include "connection/connection.php";

if(isset($_GET['update'])){
$title = $_GET['title'];
$news = $_GET['news'];



$sql = "INSERT INTO news_update (title, news) VALUES (:title, :news)";
if($stmt = $pdo->prepare($sql)){
            
            $stmt->bindParam(":title", $title);
            $stmt->bindParam(":news", $news);
           
    if($stmt->execute()){
                
                header("location:home.php");
                exit();
            } else{
                echo "news not posted.";
            }
}
}



?>