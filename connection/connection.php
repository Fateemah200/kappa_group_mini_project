<?php
$dsn ='mysql:host=localhost;dbname=crms';
$username ='root';
$password ='';

try{
$db =new PDO($dsn, $username, $password);
}
catch(PDOException $e){
    $error_message = $e->getMessage();
}

?>
