<?php
    require 'config.php';



    if($_SERVER['REQUEST_METHOD']=== 'POST'){
        $userid = $_POST['user_id'];
        $name = $_POST['username'];
        $fname = $_POST['fname'];
        $lname = $_POST['lname'];
        $mnumber = $_POST['mnumber'];
        $email = $_POST['email'];
        $password = $_POST['pwd'];
        $age =$_POST['age'];

        
        $sql = "INSERT INTO users (user_id,user_name,firstname,lastname,phone,email,password,age)
                VALUES($userid,'$name','$fname','$lname',$mnumber,'$email','$password',$age)";
        

        
        if($conn->query($sql)){
            echo "Successfull Registration";

            echo "<script> 
			window.location.replace(\"loging.php\");
		</script>";
            exit;
        }

    }else{
        echo "Error";
    }
    $conn->close();
    
?>