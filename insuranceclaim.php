<?php
session_start();
#session username
$username1=$_SESSION['usernamew'];
#session date
$dates=$_SESSION['dates'];
#session time
$times=$_SESSION['times'];
#session area of accident
$areas=$_SESSION['areas'];
#session vrno
$vrno=$_SESSION['vrno'];
#session company name
#$insurancecompanyname=$_SESSION['insurancenames'];
#session policy no
$policynos=$_SESSION['policynos'];
$con = mysqli_connect("localhost","root","") or die("Unable to connect");
     mysqli_select_db($con,'policeregpg');
	 $query="select firstname,middlename,lastname from tbpolicereg1 WHERE username='$username1'";
			
			$query_run=mysqli_query($con,$query);
			if(mysqli_num_rows($query_run)>0)
			{
				while($row=mysqli_fetch_assoc($query_run))
				{
					$fname= $row['firstname'];
					$mname=$row['middlename'];
					$lname=$row['lastname'];
				}
			}
?>
<html>
<head>
<title>Insurance claim Page</title>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<link rel="stylesheet" href="css/style.css"	>
<style>
		input[type=date],input[type=text],input[type=password],input[type=email],input[type=text],select,textarea,input[type=number],input[type=time] {
				margin-top: 10px;
			border: none;
			font-size: 12px;
			height: 40px;
			margin: 0;
			outline: 0;
			padding: 5px;
			width: 550px;
			background-color: #CFD8DC;
			color: #212121;
			box-shadow: 0 1px 0 rgba(0,0,0,0.03) inset;
			margin-bottom: 10px;
			border-radius: 5px;
			display:inline-block;
		}
		label {
			display: inline-block;
			margin-bottom: 1em;
			width:60%;
		}
			form{
				text-align: left;
				display:block;
				margin-left:15%;
				margin-right:15%;
				font-size:15px;	
			}
			h2 {
				color: #1A237E;
			}
			#main-insurance-wrapper{
				width:800px;
				background:white;
				margin-left: auto;
				margin-right:auto;
				padding:5px;
				border-radius:10px;
			}
			.btn{
				padding: 10px;
			}
			body{
				background-color: #010218;
			}
		</style>
</head>
<body>
	<div id="main-insurance-wrapper">
	<center>
	<h2>Insurance Claim Form</h2><br><br>
	<!--<img src="imgs/avatar.png" class="avatar"/>-->
	</center>
	<form class="insuranceclaimform" action="insuranceclaim.php" method="post">
		<label><b>Driver's name: </b></label>
		<input name="drivername" type="text" class="inputvalues" /><br>
		<label><b>Vehicle registration number: </b></label>
		<input name="vrno" type="text" class="inputvalues" value='<?php echo $vrno; ?>'/><br>
		<label><b>License number: </b></label>
		<input name="licenseno1" type="text" class="inputvalues" /><br>
		<label><b>Select Insurance Company:</b></label>
        <select name="category" class="a_inputvalues" id="category" required>
                <option value="">Select Insurance Company</option>
                <option value="Kotak">Kotak Mahindra</option>	
                <option value="Icici">ICICI Lombard</option>
                <option value="United">United India Insurance Company Limited</option>
                <option value="Bharati">Bharati AXA General Insurance</option>
				<option value="Hdfc">HDFC General Insurance</option>
        </select><br><br>
		<label><b>Policy no: </b></label><br>
		<input name="policyno" type="text" class="inputvalues" value='<?php echo $policynos; ?>'/><br>
		<label><b>Date: </b></label><br>
		<input name="dateofaccident" type="date" class="inputvalues" value='<?php echo $dates; ?>'/><br>
		<label><b>Time: </b></label><br>
		<input name="timeofaccident" type="time" class="inputvalues" value='<?php echo $times; ?>'/><br>
		<label><b>Location: </b></label><br>
		<input name="location" type="text" class="inputvalues" value='<?php echo $areas; ?>'  /><br>
		<label><b>No of passengers: </b></label>
		<input name="passengers" type="number" class="inputvalues" /><br>
		<label><b>Damage to vehicle: </b></label>
		<input name="vehicledamage" type="text" class="inputvalues" /><br>
		<label><b>Other driver's name: </b></label>
		<input name="otherdrivername" type="text" class="inputvalues" /><br>
		<label><b>License number: </b></label>
		<input name="licenseno2" type="text" class="inputvalues" /><br>
		<label><b>Name of their insurance company: </b></label>
		<!--<input name="otherinsurancecompany" type="text" class="inputvalues" /><br>-->
		<select name="otherinsurancecompany" class="a_inputvalues" id="category" required>
                <option value="">Select Insurance Company</option>
                <option value="Kotak">Kotak Mahindra</option>	
                <option value="Icici">ICICI Lombard</option>
                <option value="United">United India Insurance Company Limited</option>
                <option value="Bharati">Bharati AXA General Insurance</option>
				<option value="Hdfc">HDFC General Insurance</option>
        </select><br><br>
		<label><b>Other's vehicle registration number: </b></label>
		<input name="othervrno" type="text" class="inputvalues" /><br>
		<label><b>Name of investigating police officer: </b></label>
		<input name="policename" type="text" class="inputvalues" value='<?php echo  $fname." ".$mname." ".$lname; ?>'/><br>
		<input name="insurance_btn" type="submit" id="claim_insurance_btn" class="btn btn-primary btn-lg btn-block" value="Submit"/><br>
		<a href="index.php"><input type="button" id="back_btn" class="btn btn-primary btn-lg btn-block" value="<< Back"/></a>
	</form>
	<?php
	
	//echo "$username1";
	if(isset($_POST['insurance_btn']))
		{
			$drivername=$_POST['drivername'];
			$vrno=$_POST['vrno'];
			$licenseno1=$_POST['licenseno1'];
			$category=$_POST['category'];
			$policyno=$_POST['policyno'];
			$dateofaccident=$_POST['dateofaccident'];
			$timeofaccident=$_POST['timeofaccident'];
			$location=$_POST['location'];
			$passengers=$_POST['passengers'];
			$vehicledamage=$_POST['vehicledamage'];
			$otherdrivername=$_POST['otherdrivername'];
			$licenseno2=$_POST['licenseno2'];
			$otherinsurancecompany=$_POST['otherinsurancecompany'];
			$othervrno=$_POST['othervrno'];
			$policename=$_POST['policename'];
			
			switch($category)
			{
				case "Kotak":
								$con=mysqli_connect("localhost",'root',"","kotak_mahindra_db");
								$query= "INSERT INTO claimtb (driver_name,vrno,license_no,policyno,adate,atime,location,no_passenger,damage,other_driver_name,other_vehicle_no,other_insurance_company,other_license_no,name_investigating_officer) values('$drivername','$vrno','$licenseno1','$policyno','$dateofaccident','$timeofaccident','$location','$passengers','$vehicledamage','$otherdrivername','$licenseno2','$otherinsurancecompany','$othervrno','$policename')";
								$query_run=mysqli_query($con,$query);
								echo '<script type="text/javascript">alert(" Victim claim form is submitted successfully.")</script>';
								break;
				case "Icici":
								$con=mysqli_connect("localhost",'root',"","icici_lombard_db");
								$query= "INSERT INTO claimtb (driver_name,license_no,policyno,adate,atime,location,no_passenger,damage,other_driver_name,other_vehicle_no,other_insurance_company,other_license_no,name_investigating_officer) values('$drivername','$licenseno1','$policyno','$dateofaccident','$timeofaccident','$location','$passengers','$vehicledamage','$otherdrivername','$licenseno2','$otherinsurancecompany','$othervrno','$policename')";
								$query_run=mysqli_query($con,$query);
								echo '<script type="text/javascript">alert(" Victim claim form is submitted successfully.")</script>';
								break;
				case "United":
								$con=mysqli_connect("localhost",'root',"","uiicl_db");
								$query= "INSERT INTO claimtb (driver_name,license_no,policyno,adate,atime,location,no_passenger,damage,other_driver_name,other_vehicle_no,other_insurance_company,other_license_no,name_investigating_officer) values('$drivername','$licenseno1','$policyno','$dateofaccident','$timeofaccident','$location','$passengers','$vehicledamage','$otherdrivername','$licenseno2','$otherinsurancecompany','$othervrno','$policename')";
								$query_run=mysqli_query($con,$query);
								echo '<script type="text/javascript">alert(" Victim claim form is submitted successfully.")</script>';
								break;
				case "Bharati":
								$con=mysqli_connect("localhost",'root',"","bharati_axa_general_db");
								$query= "INSERT INTO claimtb (driver_name,license_no,policyno,adate,atime,location,no_passenger,damage,other_driver_name,other_vehicle_no,other_insurance_company,other_license_no,name_investigating_officer) values('$drivername','$licenseno1','$policyno','$dateofaccident','$timeofaccident','$location','$passengers','$vehicledamage','$otherdrivername','$licenseno2','$otherinsurancecompany','$othervrno','$policename')";
								$query_run=mysqli_query($con,$query);
								echo '<script type="text/javascript">alert(" Victim claim form is submitted successfully.")</script>';
								break;
				case "Hdfc":
								$con=mysqli_connect("localhost",'root',"","hdfc_general_db");
								$query= "INSERT INTO claimtb (driver_name,license_no,policyno,adate,atime,location,no_passenger,damage,other_driver_name,other_vehicle_no,other_insurance_company,other_license_no,name_investigating_officer) values('$drivername','$licenseno1','$policyno','$dateofaccident','$timeofaccident','$location','$passengers','$vehicledamage','$otherdrivername','$licenseno2','$otherinsurancecompany','$othervrno','$policename')";
								$query_run=mysqli_query($con,$query);
								echo '<script type="text/javascript">alert(" Victim claim form is submitted successfully.")</script>';
								break;
			}
			
		}
	?>
	</div>
</body>
</html>