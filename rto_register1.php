<!DOCTYPE html>
<html>
<head>
<title>Registration Page</title>
<link rel="stylesheet" href="css/style.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script language="Javascript" type="text/javascript">
function register_reg_exp()
{
	var inputuser=document.getElementById("userid").value;
	var inputpwd=document.getElementById("userpwd").value;
	var user_re=/^[a-zA-Z0-9$\._]{3,20}$/;
	var pwd_re=/^(?=.*?[A-Z])(?=(.*[a-z]){1,})(?=(.*[\d]){1,})(?=(.*[\W]){1,})(?!.*\s).{8}$/;
	//alert(inputpwd);
	if(inputuser.match(user_re) )
	{
	//alert("successful");
	}
	else
	{
		alert("error in username");
	}
	if(inputpwd.match(pwd_re))
	{
	//	alert("suu pwd");
	}
	else
	{
		alert("error in password");
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
	<style>
		
		.check1{	
			position: relative;
			padding-left: 0%;
			margin-bottom: 12px;
			cursor: pointer;
			font-size: 15px;
			font-weight: normal;
			font-color: #27ae60;
		}
		input[type=checkbox] {
			zoom: 1.5;
			vertical-align:middle;
		}
		#main-wrapper{
		    width:700px;
			background:white;
			margin-left: auto;
			margin-right:auto;
			padding:5px;
			border-radius:10px;	
			margin-top:50px;
		}
		form{
			text-align: left;
			display:inline-block;
			padding-left:15%;
			padding-right:10%;
			font-size:15px;	
		}
		h2 {
			color: #1A237E;
		}
		input[type=text],input[type=password] {
			margin-top: 10px;
			border: none;
			  font-size: 12px;
			  height: 40px;
			  margin: 0;
			  outline: 0;
			  padding: 5px;
			  width: 500px;
			  background-color: #CFD8DC;
			  color: #212121;
			  box-shadow: 0 1px 0 rgba(0,0,0,0.03) inset;
			  margin-bottom: 10px;
			  border-radius: 5px;
			  display:inline-block;
		}
		input[type=submit],input[type=button]{
			margin-left:30%;
		}
		label {
			display: inline-block;
			margin-bottom: 1em;
			width:50%;
		}
		body{
				background-color: #010218;
			}
	</style>
</head>
<body>

	<div id="main-wrapper">
	<center>
	<h2>RTO Registration Form</h2>
	<img src="imgs/avatar.png" class="avatar"/>
	</center>
	
	
	<form class="myform" action="rto_register1.php" method="post">
		<label><b>Username</b></label><br>
		<input name="username" id="userid" type="text" class="inputvalues" placeholder="Type your username" required/><br>
		<label><b>Password</b></label><br>
		<input name="password" id="userpwd" type="password" class="inputvalues" placeholder="Your password" required/><br>
		
			
		<input type="checkbox" id="checkboxpwd" onclick="myFunction()">
		<label class="check1" for="checkboxpwd" >Show Password</label>
		
		<label><b>Confirm Password</b></label><br>
		<input name="cpassword" type="password" class="inputvalues" placeholder="Confirm password" required/><br>
		<input name="submit_btn" type="submit" id="signup_btn" onclick="register_reg_exp()" value="Sign Up" class="btn btn-primary btn-lg btn-block"/><br>
		<a href="index.php"><input type="button" id="back_btn"  value="<< Back" class="btn btn-primary btn-lg btn-block"/></a>
		
	</form>
		<?php
		$connect=mysqli_connect("localhost",'root',"","login_rto_db");
		if(isset($_POST['submit_btn']))
		{
			//echo '<script type="text/javascript"> alert("Sign up button clicked")</script>';
			$username=$_POST['username'];
			$password=$_POST['password'];
			$cpassword=$_POST['cpassword'];
			
			if($password==$cpassword)
			{
				$query= "select * from user WHERE username='$username' ";
				$query_run= mysqli_query($connect,$query);
				
				if(mysqli_num_rows($query_run)>0)
				{
					//there is already a user with the same username
					echo '<script type="text/javascript"> alert("User already exists..try another username")</script>';
				}
				else
				{
					$query= "insert into user values('$username','$password')";
					$query_run=mysqli_query($connect,$query);
					
					
					if($query_run)
					{
						echo '<script type="text/javascript"> alert("User Registered...Go to login to login")</script>';
						header('location:rto_reg.php');
					}
					else
					{
						echo '<script type="text/javascript"> alert("Error! please again enter the username and password")</script>';
					}
				}
			}
			else
			{
				echo '<script type="text/javascript"> alert("Password and confirm password does not match")</script>';
			}
			
		}
	?>
	</div>
</body>
</html>