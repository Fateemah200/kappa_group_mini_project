<?php
session_start();

require_once "connection/connection.php";
 

$username = $password = "";
$username_err = $password_err = $login_err = "";
 

if($_SERVER["REQUEST_METHOD"] == "POST"){
 

    if(empty(trim($_POST["username"]))){
        $username_err = "Please enter username.";
    } else{
        $username = trim($_POST["username"]);
    }
    

    if(empty(trim($_POST["password"]))){
        $password_err = "Please enter your password.";
    } else{
        $password = trim($_POST["password"]);
    }
    

    if(empty($username_err) && empty($password_err)){

        $sql = "SELECT id, username, password FROM admin WHERE username = :username";
        
        if($stmt = $pdo->prepare($sql)){

            $stmt->bindParam(":username", $param_username, PDO::PARAM_STR);
            
       
            $param_username = trim($_POST["username"]);
            
         
            if($stmt->execute()){

                if($stmt->rowCount() == 1){
                    if($row = $stmt->fetch()){
                        $id = $row["id"];
                        $username = $row["username"];
                        $hashed_password = $row["password"];
                        if(password_verify($password, $hashed_password)){
                         
                            session_start();
                            

                            $_SESSION["loggedin"] = true;
                            $_SESSION["id"] = $id;
                            $_SESSION["username"] = $username;                            
                            
                     
                            header("location:home.php");
                        } else{
                   
                            $login_err = "Invalid username or password.";
                        }
                    }
                } else{
                   
                    $login_err = "Invalid username or password.";
                }
            } else{
                echo "Oops! Something went wrong. Please try again later.";
            }

       
            unset($stmt);
        }
    }
    
 
    unset($pdo);
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="bootstrap/fontawesome/css/all.min.css">
    <link rel="stylesheet" type="text/css" href="bootstrap/fontawesome/css/font-awesome.css">
     <link rel="stylesheet" type="text/css" href="bootstrap/fontawesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/login.css">
    <link rel="stylesheet" href="bootstrap/botstrap/css/bootstrap.css">
    <link rel="stylesheet" href="bootstrap/botstrap/css/bootstrap.min.css">
    <script src="bootstrap/wow/wow.js"></script>
    <script src="bootstrap/fontawesome/js/all.min.js"></script>
     <script src="bootstrap/fontawesome/js/fontawesome.min.js"></script>
    <title>login-- CRMS</title>
</head>
<body>
  <div class="container" id="main">
<div class="sign-in">

    <form action="" method="post">
      <h1>Sign in</h1>
      <input type="text" name="username" placeholder="your username" required>

      <input type="password" name="password" placeholder="your password" required> 
      <a href="#">forget password</a>
      <button>sign in</button> 
    </form>
</div>
<div class="overlay-container">
    <div class="overlay">
         <div class="overlay-right">
            <h1>Welcome....</h1>
            <p>Don't have account with us</p>
            <button id="signUp">sign up</button>
        </div>
        
    </div>
</div>
  </div> 
 
</body>
</html>