<?php
	session_start();
	include 'dbconfig/sendrtoinfo.php';
?>
<html>
	<body>
	<head>
	<link rel="stylesheet" href="css/style.css"	>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<?php
	#session username
	$username1=$_SESSION['usernamew'];
	$_SESSION['usernamew']=$username1;
	
	echo "$username1";
	$con = mysqli_connect("localhost",'root',"","dbrto");
	#SEND RTO ACIDNT INF
		
		$victimname=$_POST['victimname'];
		
		$vehicleregno=$_POST['vehicleregnoname'];
		$licenseno=$_POST['licensenoname'];
		$adate=$_POST['adatename'];
		$atime=$_POST['atimename'];
		$area=$_POST['areaname'];
		$query= "INSERT INTO sendrto (victimname,vrno,licenseno,date,atime,area) values ('$victimname','$vehicleregno','$licenseno','$adate','$atime','$area')";
		
		$query_run = mysqli_query($con,$query);
		#session date
	$dates=$_POST['adatename'];
	$_SESSION['dates']=$dates;
		#session time
		$times=$_POST['atimename'];
		$_SESSION['times']=$times;
		#session area
		$areas=$_POST['areaname'];
		$_SESSION['areas']=$areas;
        /*if(mysqli_affected_rows($con) > 0)
		{	
		echo "<p>Row Added</p>";
		
		} else {
		echo "<p>Row not Added</p>";
		}*/
	
	#Retrieve from RTO veh inf
	require 'dbconfig/retrieveconfig.php';

	if(isset($_POST['vehiclereg']))
	{
		
	if(!$connect)
	{
		die("Could not connect: ".mysqli_connect_error());
	}
	$vehicle_no=$_POST['vehicleregnoname'];
	
	$sql="SELECT name,vehicle_reg_no,policy_no,policyvalidation,area FROM vehicledb where vehicle_reg_no='$vehicle_no'";
	$result=mysqli_query($connect,$sql);
	if(mysqli_num_rows($result)>0)
	{ 
		while($row=mysqli_fetch_assoc($result))
		{
			$name= $row['name'];
			$vehicle_reg_no=$row['vehicle_reg_no'];
			$policy_no=$row['policy_no'];
			$policyvalidation=$row['policyvalidation'];
			$area=$row['area'];
		}
	}
	}
	?>
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
			table{
				height:200px;
				width:500px;
			}
		</style>
	</head>
	<div id="vehicledummy" align="center" id="main-wrapper">
	<form action="last.php" method="post">
	<table>
       <!-- <tr>
           <!-- <td style="font-family:Copperplate Gothic Bold">&nbsp;</td>-->
	<h3 style="font-size:28px">Vehicle Information</h3><br>
       <!-- </tr>-->
        <tr>
            <td>Name :</td>
            <td class="auto-style4">
                <input id="Text1" type="text" value='<?php echo  $name; ?>'/></td>
        </tr>
        <tr>
            <td class="auto-style3">Vehicle registration no: </td>
            <td class="auto-style4">
                <input id="Text1" name="vgno" type="text" value='<?php echo  $vehicle_reg_no; ?>'/></td>
        </tr>
        <tr>
             <td class="auto-style3">Policy no: </td>
            <td class="auto-style4">
                <input id="Text1" type="text" value='<?php echo  $policy_no; ?>' /></td>
        </tr>
        <tr>
             <td class="auto-style3">Area:</td>
            <td class="auto-style4">
                <input id="Text1" type="text" value='<?php echo  $area; ?>' /></td>
        </tr>
		</table>
		<br>
		<a href="policyretrieve.php"><input name="vehiclereg2" type="submit"  id="vehiclereg_btn"  value="Submit"/></a><br>
		</form>
		</div>
		<?php
		$date1=date_create($policyvalidation);
		$date3=date("Y-m-d");
		$date4=date_create($date3);
		$diff=date_diff($date4,$date1);
		if($diff->format("%R%a days")>0)
		{
			//echo "not expired";
			
		}
		else
		{
			echo "<script type='text/javascript'>alert('policy expired!')</script>";
			echo "<script type='text/javascript'>document.getElementById('vehiclereg_btn').disabled=true;</script>";
			return false;
		}
		?>
	</body>
	</html>