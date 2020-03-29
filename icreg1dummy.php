<!DOCTYPE html>
<html>
<head>
<title>Registration Page</title>
<link rel="stylesheet" href="css/style.css"	>
<script language="Javascript" type="text/javascript">
function register_reg_exp()
{
	var inputuser=document.getElementById("userid").value;
	var inputpwd=document.getElementById("userpwd").value;
	var user_re=/^[a-zA-Z0-9$\._]{3,20}$/;
	var pwd_re=/^(?=.*?[A-Z])(?=(.*[a-z]){1,})(?=(.*[\d]){1,})(?=(.*[\W]){1,})(?!.*\s).{8}$/;
	alert(inputpwd);
	if(inputuser.match(user_re) )
	{
	alert("successful");
	}
	else
	{
		alert("error");
	}
	if(inputpwd.match(pwd_re))
	{
		alert("suu pwd");
	}
	else
	{
		alert("error");
	}
}
function myFunction()
{
	var x=document.getElementById("userpwd");
	if(x.type==="password")
	{
		x.type="text";
	}
	else
	{
		x.type="password";
	}
}
</script>
</head>
<body style="background-color:#95a5a6">

	<div id="main-wrapper">
	<center>
	<h2>Registration Form</h2>
	<img src="imgs/avatar.png" class="avatar"/>
	</center>
	
	
	<form class="myform" action="ins_reg.php" method="post">
		<label><b>Username</b></label><br>
		<input name="username" id="userid" type="text" class="inputvalues" placeholder="Type your username" required/><br>
		<label><b>Password</b></label><br>
		<input name="password" id="userpwd" type="password" class="inputvalues" placeholder="Your password" required/><br>
		<input type="checkbox" id="checkboxpwd" onclick="myFunction()">Show Password<br>
		<label><b>Confirm Password</b></label><br>
		<input name="cpassword" type="password" class="inputvalues" placeholder="Confirm password" required/><br>
		
		<input name="submit_btn" type="submit" id="signup_btn" onclick="register_reg_exp()" value="Sign Up"/><br>
		<a href="index.php"><input type="button" id="back_btn"  value="<< Back"/></a>
		
	</form>
	<?php
	$connect=mysqli_connect("localhost",'root',"","login_ic_db");
	if(isset($_POST['signup_btn']))
	{
	$username=$_POST['username'];
			$password=$_POST['password'];
			$cpassword=$_POST['cpassword'];
			
			if($password==$cpassword)
			{
				$query= "select * from insurance_main WHERE username='$username' ";
				$query_run= mysqli_query($connect,$query);
				
				if(mysqli_num_rows($query_run)>0)
				{
					//there is already a user with the same username
					echo '<script type="text/javascript"> alert("User already exists..try another username")</script>';
				}
				else
				{
					//header('location:ins_reg.php');
				}
			}
			else
			{
				echo '<script type="text/javascript"> alert("Password and confirm password does not match")</script>';
			}
	}
	mysqli_close($connect);
	?>
	</div>
</body>
</html>