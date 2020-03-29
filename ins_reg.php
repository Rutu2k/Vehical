<!DOCTYPE html>
<html>
	<head>
		<title>Registration page</title>
		<link rel="stylesheet" href="css/style.css">
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
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
			//alert("successful");
		}
		else
		{
		alert("error");
		}
		if(inputpwd.match(pwd_re))
		{
			//alert("successful pwd");
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
	
	<body>
		<div id="main-wrapper2">
		<center>
		<h2>Registration Form</h2>
		<img src="imgs/police.jpg" class="p_avatar"/>
		</center>
		
		
		<form class="p_myform" action="index2.php" method="post">
			
			<h2>Insurance Company</h2><br>
			<label><b>Username</b></label><br>
			<input name="username" id="userid" type="text" class="inputvalues" placeholder="Type your username" required/><br>
			<label><b>Password</b></label><br>
			<input name="password" id="userpwd" type="password" class="inputvalues" placeholder="Your password" required/><br>
			<input type="checkbox" id="checkboxpwd" onclick="myFunction()">Show Password<br>
			<label><b>Confirm Password</b></label><br>
			<input name="cpassword" type="password" class="inputvalues" placeholder="Confirm password" required/><br>
			<label><b>Email id:<b></label>
			<input name="email_id" type="email" class="p_inputvalues" placeholder="Type company's email address" required/>
			<label><b>Select Insurance Company:</b></label>
            <select name="category" class="p_inputvalues" id="category" required>
                <option value="">Select Insurance Company</option>
                <option value="Kotak">Kotak Mahindra</option>	
                <option value="Icici">ICICI Lombard</option>
                <option value="United">United India Insurance Company Limited</option>
                <option value="Bharati">Bharati AXA General Insurance</option>
				<option value="Hdfc">HDFC General Insurance</option>
            </select><br>
 
			<label><b>Customer care number<b></label>
			<input name="insurance_no" type="number" class="p_inputvalues" pattern="[0-9]{10}" inputmode="numeric"required/>
			
			
			<input name="insurance_reg_btn" type="submit" id="i_regi_btn" value="Submit"/></br>
			<a href="index2.php"><input type="button" id="p_back_btn" value="<< Back"/></a>
		
		</form>
		<?php
		
		
		$connect=mysqli_connect("localhost","root","","login_ic_db");
		$var1=$_POST['username'];
		$var2= $_POST['password'];
		echo $var1;
		if(isset($_POST['insurance_reg_btn']))
		{
		$query= "INSERT INTO insurance_main (username,password) VALUES ($var1,$var2)";
		$query_run=mysqli_query($connect,$query);
				if(mysqli_affected_rows($connect) > 0){
					echo "<p>Row Added</p>";
				}
				else
				{
				//echo '<script type="text/javascript"> alert("Error...")</script>';
				echo "<p>Row not Added</p>";
				}
		}
		
		?>
	
	</div>	
	
	
	</body>
</html>