<?php

session_start();
include "connection/connection.php";

if(isset($_GET['send'])){
$fullname = $_GET['fullname'];
$email = $_GET['email'];
$phone = $_GET['phone'];
$address = $_GET['address'];
$state = $_GET['state'];
$gender = $_GET['gender'];
$work = $_GET['work'];
$pack = $_GET['pack'];
$zip = $_GET['zip'];

    "INSERT INTO register (fullname, email, phone, state, address, work, gender, pack, zip) VALUES (:fullname, :email, :phone, :state, :address, :gender, :work, :pack, :zip)"; 

    if($stmt = $pdo->prepare($sql)){
            
            $stmt->bindParam(":fullname", $fullname);
            $stmt->bindParam(":email", $email);
            $stmt->bindParam(":phone", $phone);
            $stmt->bindParam(":state", $state);
            $stmt->bindParam(":address", $address);
            $stmt->bindParam(":gender", $gender);
            $stmt->bindParam(":work", $work);
            $stmt->bindParam(":pack", $pack);
            $stmt->bindParam(":zip", $zip);
            

    if($stmt->execute()){
                
                header("location:home.php");
                exit();
            } else{
                echo "information  not save.";
            }
}
   
   

    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CMS--register a user</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="bootstrap/bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="bootstrap/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="bootstrap/fontawesome/css/all.min.css">
    <script src="bootstrap/fontawesome/js/fontawesome.min.js"></script>
    
    
</head>
<body>
<div class="wrapper">
       <div class="sidebar">
           <h2>Admin</h2>
           <p>Sweet Coffee</p>
           <ul>
           <li><a href="#"><i class="fas fa-home"></i> dashboard</a></li>
           <li><a href="register.php"><i class="fas fa-user"></i> register a users</a></li>
           <li><a href="#"><i class="fas fa-address-card"></i> payments details</a></li>
           <li><a href="#"><i class="fas fa-blog"></i> blog comments</a></li>
           <li><a href="#"><i class="fas fa-inbox"></i>contact message</a></li>

           </ul>
        </div>

   <div class="main_content">
       <div class="header">
           <h3>Welcome </h3>
           <p>mubarak bala  id no:b23c4</p>
           <a href="#"><i class="fas fa-sign-out-alt"></i> Logout</a>    
       </div>
       <div class="info">
               <div>
                   <h2>Sweet Coffee</h2>
                   <p>A cup of coffee with us will make your day.</p>
               </div>
               
             <div class="card">
                 <div class="card-header">
                     <h3>Register</h3>
                 </div>
                 <div class="card-body">
                     <form action="register.php" method="get">
                         <div class="container">
                     <div class="row">
               <div class="col-lg-6">
                <div class="form-group">
                    <label for="">Fullname:</label>
                 <input type="text" name="fullname" placeholder="your Fullname" required="">
               </div>
               </div>

               <div class="col-lg-6">
                <div class="form-group">
                <label for="">Email:</label>
                 <input type="email" name="email" placeholder="your Email Address" required="">
               </div>
               </div>

               </div>
               <div class="row">
               <div class="col-md-4">
                <div class="form-group">
                <label for="">Phone No:</label>
                 <input type="text" name="phone" placeholder="your Phone  No" required="">
               </div>
               </div>

               <div class="col-md-4">
                <div class="form-group">
                <label for="">Occupation:</label>
                 <input type="text" name="work" placeholder="your Occupation" required="">
               </div>
               </div>

               <div class="col-md-4">
                <div class="form-group">
                <label for="">No of Coffee Pack:</label>
                 <input type="text" name="pack" placeholder="No of Coffe Pack" required="">
               </div>
               </div>

               </div>

               <div class="row">
               <div class="col-lg-6">
                <div class="form-group">
                <label for="">Zipcode:</label>
                 <input type="text" name="zip" placeholder="Location Zipcode" required="">
               </div>
               </div>

               <div class="col-lg-6">
                <div class="form-group">
                <label for="">Address:</label>
                 <input type="text" name="address" placeholder="your Address" required="">
               </div>
               </div>

               <div class="col-md-4">
                <div class="form-group">
                <label for="">State:</label>
                 <input type="text" name="state" placeholder="your State" required="">
               </div>
               </div>

               <div class="col-md-4">
                <div class="form-group">
                <label for="">Gender:</label>
                 <input type="radio" name="gender" value="male" checked> male 
                 <input type="radio" name="gender" value="female"> female<br> 
               </div>
               </div>
               
               <div class="col-md-4">
                 <div class="form-group">
                 <input type="submit" name="send" class="btn btn-success" value="submit">
               </div>
               </div>

             </div>
             
                     </form>

                 </div>
             </div>
        </div>     
   </div> 

<script src="bootstrap/bootstrap/js/bootstrap.min.js"></script>
</body>
</html>