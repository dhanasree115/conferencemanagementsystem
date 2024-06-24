<?php
session_start();
include("connect.php");

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Homepage</title>   
    <link rel="stylesheet" href="style.css">
    <style>body{
    background-color: #c9d6ff;
    background:linear-gradient(to right,#e2e2e2,#c9d6ff);
}
.container{
    background:#fff;
    width:100%;
    padding:1.5rem;
    margin:50px auto;
    border-radius:10px;
    box-shadow:0 20px 35px rgba(0,0,1,0.9);
}</style>
</head>
<body>
    <div style="text-align:center; padding:15%;">
      <p  style="font: size 35px; font-weight:bold;">Welcome back to the conference management system! Your gateway to seamless event organization and attendee engagement.</p>
 

       <?php 
       if(isset($_SESSION['email'])){
        $email=$_SESSION['email'];
        $query=mysqli_query($conn, "SELECT users.* FROM `users` WHERE users.email='$email'");
        while($row=mysqli_fetch_array($query)){
            echo $row['firstName'].' '.$row['lastName'];
        }
       }
       ?>
       :)
      </br>
      </br>
       <a href="./opdash.php" >Login</a>
      </br>
      </br>
      
      <a href="logout.php">Logout</a>
    </div>
</body>
</html>