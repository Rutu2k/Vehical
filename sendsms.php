<?php
session_start();
$vrno=$_GET['id'];
$con = mysqli_connect("localhost",'root',"","commoninsurance");
$sql="SELECT * FROM insuranceinfo where vehicleno='$vrno'";
$result=mysqli_query($con,$sql);
if(mysqli_num_rows($result)>0)
	{ 
		while($row=mysqli_fetch_assoc($result))
		{
			$phoneno= $row['phoneno'];
			$firstname= $row['firstname'];
			$middlename= $row['middlename'];
			$lastname= $row['lastname'];
			$vrno= $row['vehicleno'];
			$policyno= $row['policyno'];
			
			
		}
	}
	
	// Authorisation details.
	$username = "aishkendle6999@gmail.com";
	$hash = "fdf51966df5b53c78027413e8b49224731d6923e784f5b7d92e01495f2288992";

	// Config variables. Consult http://api.textlocal.in/docs for more info.
	$test = "0";

	// Data for text message. This is the text message data.
	$sender = "TXTLCL";// This is who the message appears to be from.
	$numbers = "91".$phoneno; // A single number or a comma-seperated list of numbers
	$message = "Your insurance claim request for ".$firstname." ".$middlename." ".$lastname." has been proceeded. Details: Policy Number:".$policyno." Vehicle Number:".$vrno;
	// 612 chars or less
	// A single number or a comma-seperated list of numbers
	$message = urlencode($message);
	$data = "username=".$username."&hash=".$hash."&message=".$message."&sender=".$sender."&numbers=".$numbers."&test=".$test;
	$ch = curl_init('http://api.textlocal.in/send/?');
	curl_setopt($ch, CURLOPT_POST, true);
	curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
	$result = curl_exec($ch); // This is the result from the API
	echo $result;
	curl_close($ch);
?>