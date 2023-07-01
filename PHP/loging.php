
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <script src="https://kit.fontawesome.com/ced9af3420.js" crossorigin="anonymous"></script>

    <!-- custom css file link  -->
    <link rel="stylesheet" href="../css/loging.css">
    <link rel="stylesheet" href="../css/style.css">


</head>
<body>
<ul class="nav">
        <li class="logo" style="float: left;"><a href="../PHP/index.php"><img src="../img/logo.png" alt="Logo"></a></li>
        
        <li><a href="../PHP/index.php"  >Home</a></li>
        <li><a href="plantrip.php" >Plan & Book</a></li>
        <li><a href="t_info.php">Travel Information</a></li>
        <li><a href="Service.html">Services</a></li>
        <li><a href="Contactus.html">Contact</a></li>
        <li style="float: right;"><a href="loging.php">Login</a></li>
        <a href="loging.php"><i class="fa-regular fa-user" style="color: #898b90;"></a></i>
        
        
    </ul>



             <?php 

session_start();

    require("config.php");
    include("function.php");


    if($_SERVER['REQUEST_METHOD'] == "POST")
    {
        //something was posted
        $user_name = $_POST['user_name'];
        $password = $_POST['password'];

        if(!empty($user_name) && !empty($password) && !is_numeric($user_name))
        {

            //read from database
            $query = "select * from users where user_name = '$user_name' limit 1";
            $result = mysqli_query($conn, $query);

            if($result)
            {
                if($result && mysqli_num_rows($result) > 0)
                {

                    $user_data = mysqli_fetch_assoc($result);
                    
                    if($user_data['password'] === $password)
                    {

                        $_SESSION['user_id'] = $user_data['user_id'];
                        
                        header("Location:Profile.php");
                        die;
                    }
                }
            }
            
            echo "wrong username or password!";
        }else
        {
            echo "wrong username or password!";
        }
    }

?>




<div class="body">
        
            <div class="form-box"> 
            <h1><b><center>Log In to your Account</center></b></h1>


                           <!------------------------------------------Login box------------------------------------------------------>

                <div class="button-box"> 
                    <div id="btn"></div>
                                        
                        <br>
                    </div>
                    <div class="Social-Icons">
                        <img src="../img/fb.png">
                        <img src="../img/gp.png">
                        <img src="../img/tw.png">
                    </div>
                    <br><br><br>

                    <form id="login" class="input-group" method="POST">
                        <input type="text" class="input-field" placeholder="Username"  name="user_name" required>
                        <input type="password" class="input-field" placeholder="Enter Password"  name="password" required>
                        <input type="checkbox" class="check-box"><span>Remember Password</span>
                        <button type="submit" class="submit-btn">Log in</button>
                        <a href="signup.php"><button type="button" class="Signup">Signup</button></a>
                    </form>
                    
                        
                    
               </div>
            </div>      
     </div>
   

    </body>
<br><br><br><br><br><br><br><br><br><br><br><br>





<?php

include 'footer.php';

?>