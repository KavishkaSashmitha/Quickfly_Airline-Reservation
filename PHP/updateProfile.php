

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
    <link rel="stylesheet" href="../css/sellerregi.css">
    <link rel="stylesheet" href="../css/style.css">
    <script src="https://kit.fontawesome.com/ced9af3420.js" crossorigin="anonymous"></script>


</head>
<body>
<ul class="nav">
        <li class="logo" style="float: left;"><a href="../PHP/index.php"><img src="../img/logo.png" alt="Logo"></a></li>
        
        <li><a href="../PHP/index.php"  >Home</a></li>
        <li><a href="plantrip.php" >Plan & Book</a></li>
        <li><a href="t_info.php">Travel Information</a></li>
        <li><a href="Service.html">Services</a></li>
        <li><a href="Contactus.html">contact</a></li>
        <li style="float: right;"><a href="loging.php">Login</a></li>
        <a href="loging.php"><i class="fa-regular fa-user" style="color: #898b90;"></a></i>
        
        
    </ul>




  <?php require("config.php");?>


 <?php 


      

       if(isset($_POST['updateProfile'])){

       $id=$_POST['id'];
     $user_name = $_POST['user_name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $password = $_POST['password'];
    $firstname=$_POST['firstname'];
    $lastname=$_POST['lastname'];
    $age=$_POST['age'];
    
      
       

       $query="UPDATE `users` SET user_name='$user_name',email='$email',phone='$phone',password='$password',firstname='$firstname',lastname='$lastname',age='$age'where id=$id";


       $query_run=mysqli_query($conn,$query);

      
  

         if($query_run){

            echo ("<script LANGUAGE='JavaScript'>
                      window.alert('Succesfully profile updated!!!');
                      window.location.href='profile.php';
                      </script>");
               


          }

          else{

               echo '<script type="text/javascript">alert("Not Updated!!!")</script>';
           }

           

     }

?>

   
<!-- Body of Form starts -->
<div class="container">
		<div class="regbox" >
		<label class="reg"><center> User Details Update!</center></label>
	  </div>
      <form id="Register"  method="POST">
        <!---id.------>
    		<div class="box">
          <label for="id" class="fl fontLabel"> ID: </label>
    			<div class="fl iconBox"><i class="fa fa-user" aria-hidden="true"></i></div>
    			<div class="fr">
                <input type="number" name="id"class="textBox"  value="<?php echo $_GET['id'];?>" readonly>
    					
    			</div>
    			<div class="clr"></div>
    		</div>
    		<!---id.---->
            <!--user name-->
    		<div class="box">
          <label for="userName" class="fl fontLabel"> User Name: </label>
    			<div class="new iconBox">
            <i class="fa fa-user" aria-hidden="true"></i>
          </div>
    			<div class="fr">
                
    			<input type="text" name="user_name" class="textBox" placeholder="Enter a user name" required>
    			</div>
    			<div class="clr"></div>
    		</div>
    		<!--user name-->


        <!--First name-->
    		<div class="box">
          <label for="firstName" class="fl fontLabel"> First Name: </label>
    			<div class="new iconBox">
            <i class="fa fa-user" aria-hidden="true"></i>
          </div>
    			<div class="fr">
                <input type="text" name="firstname" class="textBox" placeholder="Enter a first name" required>
    			
    			</div>
    			<div class="clr"></div>
    		</div>
    		<!--First name-->


        <!--last name-->
    		<div class="box">
          <label for="lastName" class="fl fontLabel"> Last Name: </label>
    			<div class="fl iconBox"><i class="fa fa-user" aria-hidden="true"></i></div>
    			<div class="fr">
                <input type="text" name="lastname" class="textBox" placeholder="Enter a last name" required>
    			</div>
    			<div class="clr"></div>
    		</div>
    		<!--last name-->
            <!---Age.------>
    		<div class="box">
          <label for="age" class="fl fontLabel"> Age.: </label>
    			<div class="fl iconBox"><i class="fa fa-user" aria-hidden="true"></i></div>
    			<div class="fr">
                <
    			<input type="number" name="age" class="textBox" placeholder="Enter a age" required>		
    			</div>
    			<div class="clr"></div>
    		</div>
    		<!---Age.---->

    		<!---Phone No.------>
    		<div class="box">
          <label for="phone" class="fl fontLabel"> Phone No.: </label>
    			<div class="fl iconBox"><i class="fa fa-phone-square" aria-hidden="true"></i></div>
    			<div class="fr">
                <input type="number" name="phone" class="textBox" maxlength="10" placeholder="Enter your phone number" required>
    					
    			</div>
    			<div class="clr"></div>
    		</div>
    		<!---Phone No.---->

    		<!---Email ID---->
    		<div class="box">
          <label for="email" class="fl fontLabel"> Email ID: </label>
    			<div class="fl iconBox"><i class="fa fa-envelope" aria-hidden="true"></i></div>
    			<div class="fr">
                <input type="email" name="email" class="textBox" placeholder="Enter Your Email" required>
    			</div>
    			<div class="clr"></div>
    		</div>
    		<!--Email ID----->

            <!---Password---->
    		<div class="box">
          <label for="password" class="fl fontLabel"> Password: </label>
    			<div class="fl iconBox"><i class="fa fa-envelope" aria-hidden="true"></i></div>
    			<div class="fr">
                <input type="password" name="password" class="textBox" placeholder="Enter a Password" required>
    			</div>
    			<div class="clr"></div>
    		</div>
    		<!--Password----->
            
                        

    		

    		<!---Submit Button------>
    		<div class="box" >
            <button type="submit" name="updateProfile" class="submit-btn">Update</button>
    		</div>
    		<!---Submit Button----->
			
      </form>
  </div>
  <!--Body of Form ends--->
    </body>

<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>


<!----------------Footer starts------------------------------------------------------------------------------->

<footer>
    <div class="footer-container">
      <div class="footer-section">
        <h3>Explore</h3>
        <ul>
          <li><a href="destination.php">Destinations</a></li>
          <li><a href="flights.php">Flight Deals</a></li>
          <li><a href="t_info.php">Travel Guides</a></li>
          <li><a href="airline.php">Airlines</a></li>
        </ul>
      </div>
      <div class="footer-section">
        <h3>Information</h3>
        <ul>
          <li><a href="about.php">About Us</a></li>
          <li><a href="Contactus.html">Contact Us</a></li>
          <li><a href="Policy.php">Privacy Policy</a></li>
          <li><a href="term.php">Terms of Service</a></li>
        </ul>
      </div>
      <div class="footer-section">
        <h3>Help & Support</h3>
        <ul>
          <li><a href="#">FAQs</a></li>
          <li><a href="#">Customer Support</a></li>
          <li><a href="#">Refund Policy</a></li>
          <li><a href="t_info.php">Baggage Information</a></li>
        </ul>
      </div>
      <div class="footer-section">
        <h3>Connect With Us</h3>
        <ul class="social-media">
          <li><a href="#"><i class="fab fa-facebook"></i></a></li>
          <li><a href="#"><i class="fab fa-twitter"></i></a></li>
          <li><a href="#"><i class="fab fa-instagram"></i></a></li>
          <li><a href="#"><i class="fab fa-youtube"></i></a></li>
        </ul>
      </div>
    </div>
  </footer>






</body>
</html>