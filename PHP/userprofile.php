<?php
    require 'config.php';



    if($_SERVER['REQUEST_METHOD']==='POST'){
        $email = $_POST['email'];
        $password = $_POST['pswd'];

        $sql = "SELECT * FROM resgistration WHERE Email ='$email' AND Customer_password = '$password'";

        $result = $conn->query($sql);
        if($result->num_rows>0){
            while($row=$result->fetch_assoc())
            {
                echo "Login Succesful";
            }
        }
        else{
            echo "Check credentials";
        }
    }
    else{
        echo "Error";
    }


?>
