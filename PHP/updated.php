<?php

require 'config.php';

session_start();
$val4=$_SESSION['val1'];


echo $sql;
if($_SERVER['REQUEST_METHOD']==='POST'){

    $name = $_POST['name'];
    $tel = $_POST['tel'];
    $address = $_POST['address'];
    $email = $_POST['email'];
    $nic = $_POST['nic'];
    $passengers = $_POST['passengers'];

    $sql ="UPDATE customer 
            SET Customer_name='$name',Telephone_number= $tel,Customer_address='address',
                Email ='$email',NIC='$nic',Passengers= $passengers
                WHERE Customer_id =$val4 ";

    if($conn->query($sql)){
        echo "Updated Succesfully!!";
        echo "<script> 
        window.location.replace(\"manage.php\");
        </script>";
        exit;
        
    }
    else{
        echo'Not Connected';
    }
}
else{
    echo "please <a href='Contactus.html'>Contact</a>.";
}

$conn->close();





?>