<?php
	session_start();
	include 'dbconfig/sendrtoinfo.php';
?>
<html>
	<head>
		<link rel="stylesheet" href="css/style.css"	>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
		<style>
			#text{
				color: #0C1656;
				letter-spacing: 1px;
				line-height: 2.0;
				font-size:40px;
			}
			#Text1{
				width: 300px;
				padding: 0;
				height: 35px;
				position: relative;
				left: 0;
				outline: none;
				border: none;
				border-color: rgba(0,0,0,.15);
				background-color: #E8F1E9;
				font-size: 16px;
			}
			#vehiclereg_btn{
				text-align: center;
				margin-top: 30px;
				height:40px;
				width:200px;
				margin-bottom: 40px;
				background:#0C1656; 
				border:none;
				cursor:pointer;
				border-radius: 5px; 
			}
			
			#vehicledummy{
			width:650px;
			background:white;
			margin-left: auto;
			margin-right:auto;
			padding:5px;
			margin-top:30px;
			border-radius:10px;	
		}
		body{
				background-color: #010218;
			}
		</style>
	</head>
	<body>
<?php
	#session username
	$username1=$_SESSION['usernamew'];
	$_SESSION['usernamew']=$username1;
	#session date
	$dates=$_SESSION['dates'];
	$_SESSION['dates']=$dates;
	#session time
	$times=$_SESSION['times'];
	$_SESSION['times']=$times;
	#session area
	$areas=$_SESSION['areas'];
	$_SESSION['areas']=$areas;
	echo "$username1";
	$con = mysqli_connect("localhost",'root',"","commoninsurance");

	#Retrieve from RTO veh inf
	#$vehicleregno=$_POST['vehicleregnoname'];

	if(isset($_POST['vehiclereg2']))
	{
		
	if(!$con)
	{
		die("Could not connect: ".mysqli_connect_error());
	}
	$vehicle_no=$_POST['vgno'];
	
	$sql="SELECT vehicleno,policyno,insurancecompanyname FROM insuranceinfo where vehicleno='$vehicle_no'";
	$result=mysqli_query($con,$sql);
	if(mysqli_num_rows($result)>0)
	{ 
		while($row=mysqli_fetch_assoc($result))
		{
			$vehicleno= $row['vehicleno'];
			$policy_no=$row['policyno'];
			$companyname=$row['insurancecompanyname'];
		}
	}
	}	
	?>
	<div id="vehicledummy" align="center" id="main-wrapper">
	<form action="insuranceclaim.php" method="post">
	<table  style=" height:150px; width:430px" >
	<h3 id="text">Insurance Information</h3>
        
        <tr>
            <td style=" color:"#050923"; font-size:20px" class="auto-style3">Vehicle no :</td>
            <td class="auto-style4">
                <input id="Text1" type="text" value='<?php echo  $vehicleno; ?>'/></td>
        </tr>
        <tr>
            <td style="color:"#050923"; font-size:20px" class="auto-style3">Policy no: </td>
            <td class="auto-style4">
                <input id="Text1" type="text" value='<?php echo  $policy_no; ?>'/></td>
        </tr>
        <tr>
             <td style="color:"#050923"; font-size:20px" class="auto-style3">Insurance company name: </td>
            <td class="auto-style4">
                <input id="Text1" type="text" value='<?php echo  $companyname; ?>' /></td>
        </tr>
		</table>
		<input name="vehiclereg2" type="submit"  id="vehiclereg_btn"  value="Claim Insurance"></input><br>
		</form>
		</div>
		<?php
	if(isset($_POST['vehiclereg2']))
	{
	/*if(isset($companyname))
	{
		//$insurancecompanyname=$_POST['insurancecompanyname'];
		$_SESSION['insurancenames']=$insurancecompanyname;
	}*/
	
	if(isset($policy_no))
	{
		//$policynos=$_POST['policynos'];
		$_SESSION['policynos']=$policy_no;
	}
	if(isset($vehicleno))
	{
		$_SESSION['vrno']=$vehicleno;
	}
	}
	?>
	</body>
</html>