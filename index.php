<?php
  $server = "localhost";
  $username = "root";
  $password = "";

  $con = mysqli_connect($server,$username,$password);
 
  if (!$con){
    die("connection to this database failed due to" .
     mysqli_connect_error());
    }
   
    echo "success connecting to the db";
    
  

  $name = $_POST['name'];
  $gender = $_POST['gender'];
  $age = $_POST['age'];
  $email = $_POST['email'];
  $phone = $_POST['phone'];
  $desc = $_POST['desc'];
  $sql = "INSERT INTO `trip`.`trip` (`name`, `age`, `gender`, `email`, `phone`, `other`, `dt`) VALUES ('$name', '$age', '$gender', '$email', '$phone', '$desc', current_timestamp());";
  if($con->query($sql) == true){ 
    echo "Successfully inserted";}
    $con->close(); 

    
 
?> 
 
