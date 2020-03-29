<?php
	session_start();
	
	include 'dbconfig/sendrtoinfo.php';
	
?>
<!DOCTYPE html>
<html>
<head>
<title>VEHICLE INFORMATION</title>
<link rel="stylesheet" href="css/style.css"	>
<link rel="stylesheet" href="css/police_home_style.css" type="text/css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script language="Javascript" type="text/javascript">
	function vehicle_reg_exp()
	{
		var inputString=document.getElementById("vehicleregno").value;
		var re=/^(MH|mh)( |,|\-|\.)?(12|14)( |,|\-|\.)?[A-Za-z]{2}( |,|\-|\.)?[0-9]{1,4}$/;
		if(inputString.match(re))
		{
			var op=inputString.replace(/[ \-,\.]/g,'');
			var vrno=document.getElementById("vehicleregno").value=op;
		}
		else
		{
			//alert("unregistered.");
		}
		
	}

</script>
<style>
	input[type=date],input[type=text],input[type=password],input[type=email],input[type=text],select,textarea,input[type=number],input[type=time] {
				margin-top: 10px;
				border: none;
				font-size: 12px;
				height: 40px;
			  margin: 0;
			  outline: 0;
			  padding: 5px;
			  width: 440px;
			  background-color: #CFD8DC;
			  color: #212121;
			  box-shadow: 0 1px 0 rgba(0,0,0,0.03) inset;
			  margin-bottom: 10px;
			  border-radius: 5px;
			  display:inline-block;
		label {
			display: inline-block;
			margin-bottom: 1em;
			width:40%;
		}
		h2 {
				color: #1A237E;
			}
	
		form{
				margin-top:20px;
				display:block;
				font-size:18px;	
				
			}
		#main-wrapper{
			margin-left:%;
		}
</style>
</head>
<body>

	<div id="main-wrapper">
	<center>
	<h2>VEHICLE INFORMATION</h2>
	</center>	
	<form name="vehiclefrm" class="vehicleform" action="vehicledummy.php" method="post">
		
		<label><b>Name of victim</b></label><br>
		<input id="victim" name="victimname" type="text" class="inputvalues" /><br>

		<label><b>Vehicle Registration Number</b></label><br>
		<input id="vehicleregno" name="vehicleregnoname" type="text" class="inputvalues" required/><br>
		
		<label><b>License no</b></label><br>
		<input id="licenseno" name="licensenoname" type="text" class="inputvalues" /><br>
	
		<label><b>Date</b></label><br>
		<input id="adate" name="adatename" type="date" class="inputvalues" /><br>
		
		<label><b>Time</b></label><br>
		<input id="atime" name="atimename" type="time" class="inputvalues" /><br>
		
		<label><b>Area</b></label><br>
		<input id="area" name="areaname" type="text" class="inputvalues" /><br>
		<input name="vehiclereg" type="submit"  id="vehiclereg_btn" onclick="vehicle_reg_exp()" value="Send to RTO" class="btn btn-primary btn-lg btn-block"/><br>
		

		<!--<input name="sendrto" type="submit" id="sendrto_btn" onclick="send_rto()" value="sendrto"/>-->
		
		</form>

	
<?php
 #username session
$username=$_SESSION['username'];
$_SESSION['usernamew']=$username;
#date session

 if(isset($_POST['logout']))
 {
	 session_destroy();
	 header('location:index.php');
 }
?>
	</div>
</body>
</html>