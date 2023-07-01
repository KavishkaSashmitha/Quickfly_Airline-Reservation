<?php
    include 'header.php';
    require 'config.php';


?>
<link rel="stylesheet" href="../css/signup.css">
<div class="register">
				<form class="form" action="signup.db.php"method="post">
					<h2>Register</h2>
					<input class="input" type="number" name="user_id" placeholder="Prefer id" required=""><br>
					<input class="input" type="text" name="username" placeholder="Username" required=""><br>
					<input class="input" type="text" name="fname" placeholder="First Name" required=""><br>
					<input class="input" type="text" name="lname" placeholder="Last Name" required=""><br>
					<input class="input" type="tel" name="mnumber" placeholder="Mobile Number" required=""><br>
					<input class="input" type="email" name="email" placeholder="Email" required=""><br>
					<input class="input" type="number" name="age" placeholder="Age" required=""><br>
					<input class="input" type="password" name="pwd" placeholder="Password" required=""><br>
					<input class="input" type="password" name="pswd" placeholder="Re-Enter Password" required=""><br>
					<button>Register</button>
                    <p>Already Have an Account?<a href="loging.php">Login</a></p>
				</form>
			</div>
	</div>
</div>
<?php
	include 'footer.php'
?>