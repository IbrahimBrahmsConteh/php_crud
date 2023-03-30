<?php
include 'connect.php';

// $servername = "localhost";
// $username = "root";
// $password = "";
// $dbname = "brahms";

// // Create connection
// $conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
  $id = $_GET['id'];

  $query = "DELETE FROM info WHERE id = $id";
  $query_run = mysqli_query($conn, $query);

  if ($query_run) {
    echo '<script>alert("Data Deleted");</script>';
    header("location:index.php");
  }
  else {
    # code...
    echo '<script>alert("Data not Deleted")</script>';
  }
  ?>
