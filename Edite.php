<?php
include'connect.php';

$id = $_GET['id'];

$query = " EDITE FROM info WHERE id = $id";
  $query_run = mysqli_query($conn, $query);

  if ($query_run) {
    echo '<script>alert("Data Edited");</script>';
    header("location:index.php");
  }
  else {
    
    echo '<script>alert("Data not Edited")</script>';
  }
  ?>













