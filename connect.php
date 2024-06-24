<?php

$host="localhost";
$user="root";
$pass="";
$db="dbcrud";
$conn=new mysqli($host,$user,$pass,$db);
if($conn->connect_error){
    echo "Failed to connect DB".$conn->connect_error;
}
?>
    <!--<style>
      
      html, body {
          height: 100%;
          margin: 0;
          padding: 0;
          background-image: url('bg1.jpg');
          background-size: cover;
          background-position: center;
      }

    </style>-->