<?php

require 'config.php';



if($_SERVER['REQUEST_METHOD']==='POST'){

    $fName=$_POST['name'];
    $email =$_POST['email'];
    $inquiry=$_POST['inquiry'];
    $details =$_POST['details'];

    $sql ="INSERT INTO customersupport
            (Customer_name,Email,Inquiry,Detail)VALUES
            ('$fName','$email','$inquiry','$details')";

    if($conn->query($sql)){
        echo "showAlert() ;";
        echo "Succesful Inquery. We will Contact You soon..";
        echo "";
        echo "<script> 
            window.alert('Succesful Inquery');
			window.location.replace(\"customersupport.php\");
		</script>";
        exit;
    }
    else{
        echo "Error";
    }
}




$conn->close();







?>
