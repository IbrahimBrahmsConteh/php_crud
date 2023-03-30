<?php
$servername ="localhost";
$username = "root";
$password = "";
$dbname = "brahms";

//connect db
$conn = mysqli_connect($servername, $username, $password, $dbname);
  if(!$conn){
  die("connection failed");
  }
?>