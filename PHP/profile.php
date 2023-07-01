<?php 
//session_start();

  //  include("connection.php");
 //   include("function.php");

   // $user_data = check_login($conn);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    <!-- custom css file link  -->
    <link rel="stylesheet" href="../css/homepageprofile.css">
    <link rel="stylesheet" href="../css/style.css">
    <script src="https://kit.fontawesome.com/ced9af3420.js" crossorigin="anonymous"></script>
    
    <style type="text/css">
        .usern{
  font-size:25px;
  font-family: Arial;
 /* width: 15%;
  height: 15%;*/
  margin-top:20px;
  
  left: 50%;
  padding-left: 65px;

  width: 45%;
}
.wrapper{
  position: absolute;
  top: 50%;
  left: 34%;
  height:60%;
  margin-left:170px ;
  border-radius: 15px;     
  transform: translate(-50%,-50%);
  width: 60%;
  display: flex;
  /*box-shadow: 20px 20px 30px  30px rgba(200, 180, 255, 0.29);*/
  box-shadow: -15px -15px 15px  rgba(255, 255, 255, 0.2),
  15px 15px 15px  rgba(0, 0, 0, 0.1),
  inset -5px -15px 15px  rgba(255, 255, 255, 0.2),
  inset 5px 5px 5px  rgba(0, 0, 0, 0.2);



  
}
.wrapper .left{
  width: 30%;
  background:#2C3333; 
  padding: 30px 25px;
  border-top-left-radius: 5px;
  border-bottom-left-radius: 5px;
  text-align: center;
  color: #f2f2f2;
  border-radius: 15px;     
}

.wrapper .left img{
  border-radius: 5px;
  margin-bottom: 10px;
}
.right{
  width: 80%;
  left: 10%;
  margin-top:150px;
  margin-right:auto;
  margin-left:240px;
  
  
  padding: 0px 200px;
  position: relative;
  font-size: 15px;
}
hr{
  border:1px solid black;
  width: 50%;
  

}
.btn1{
  margin-left: 90px;
  padding: 5px;
  width: 10%;
  background-color:#2C3333;
  border: none;
  border-radius: 7px;
  color: 0E8388;
  

}
/*.but1,:active{
  color: white;
  color:#1b9bff;
  transition: .5s;}*/

  .btn1:hover{
    color: rgb(235, 235, 235);
    background-color: rgb(85, 149, 179);
  }
.btn2{
  margin-left: 90px;
  padding: 5px;
  width: 10%;
  background-color:#2C3333;
  border: none;
  color: 0E8388;
  border-radius: 7px;

}
.btn3{
  margin-left: 10px;
  padding: 5px;
  width: 10%;
  background-color:#6e83b3;
  border: none;
  color: white;
  border-radius: 7px;

}
.btn4{
  background-color:#6e83b3;
  border: none;
  color: white;
  border-radius: 7px;
  height: 10%;
  padding: 5px;


}
.data{
     width: 50%;


}

.bu{
  margin-top: 50px;
  padding: 30px 355px; 
  
}
    </style>

</head>
<body>
<ul class="nav">
        <li class="logo" style="float: left;"><a href="../PHP/index.php"><img src="../img/logo.png" alt="Logo"></a></li>
        
        <li><a href="../PHP/index.php"  >Home</a></li>
        <li><a href="plantrip.php" >Plan & Book</a></li>
        <li><a href="t_info.php">Travel Information</a></li>
        <li><a href="Service.html">Services</a></li>
        <li><a href="Contactus.html">contact</a></li>
        <li style="float: right;"><a href="profile.php">Profile</a></li>
        <a href="profile.php"><i class="fa-regular fa-user" style="color: #898b90;"></a></i>
        
        
    </ul>
    <?php 
session_start();

  include("config.php");
  include("function.php");

   $user_data = check_login($conn);

?>


 


<!----------------------------------------------------------------->

  <div class="usern"><center><b>User Profile</center></b></div>
            <div class="wrapper">
              <div class="left">
                  <img src="../img/pic-3.png"alt="user" width="200">
                 <!-- <button class="btn4">Choise a imge </button>-->
                   <h2><b><?php echo $user_data['firstname'];?>&nbsp;<?php echo $user_data['lastname'];?></b></h2><br>
                   
                   <p>Age:- <?php echo $user_data['age'];?> </p><br>
                   
              </div>
              </div>



<!--information-->
        <div class="right">

                  
           <h3>ACCOUNT INFORMATION</h3><hr/><br/>  
                <p>UserName:- <?php echo $user_data['user_name'];?> </p><br>
                <p>Email:- <?php echo $user_data['email'];?> </p><br>
                <p>First Name:- <?php echo $user_data['firstname'];?> </p><br>
                <p>Last Name:- <?php echo $user_data['lastname'];?> </p><br>
                <p>Phone:-<?php echo $user_data['phone'];?></p><br>
                <p>Id:-<?php echo $user_data['id'];?></p><br>
                <h3>LOGIN & SECURITY</h3><hr/><br>
               <p>



                
                 <br><a href="updateProfile.php?id=<?php echo $user_data['id'];?>">
                <button class="btn3">Update</button></a>
                
                <a href="deleteProfile.php?id=<?php echo $user_data['id'];?>">
                <button class="btn3">Delete</button></a>

                <a href="logout.php">
                <button class="btn3">Logout</button></a>



             </p>
         </div>
 
         <br><br><br><br><br><br><br><br><br><br><br><br>
      <?php

      include 'footer.php';
      ?>