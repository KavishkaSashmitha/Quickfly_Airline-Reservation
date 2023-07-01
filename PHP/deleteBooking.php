<?php

require 'config.php';
session_start();
$customerid = $_SESSION['var1'];

echo $customerid;

    
  $sql="DELETE  FROM customer WHERE Customer_id = '$customerid'";

  if($conn->query($sql)){
    echo ("<script LANGUAGE='JavaScript'>
    window.alert('Succesfully your profile Deleted');
    window.location.href='index.php';
    </script>");

  }




  
$conn->close();



?>