<?php
 include 'connect.php';
 
   $name = $_POST['name'];
   $email = $_POST['email'];
   $address = $_POST['address'];
   $mobile = $_POST['number'];   

   

    $sql="insert into info (name,email,mobile,address)
    Values('$name','$email','$address','$mobile')";   
    

   $result=mysqli_query($conn,$sql);
   mysqli_close($conn);
 
   header("Location: index.php");
?>