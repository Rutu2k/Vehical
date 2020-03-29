<html>
	<body>
<?php

	if(isset($_POST['vehiclereg2']))
	{
	$servername="localhost";
	$username="root";
	$password="";
	$dbname="commoninsurance";
	
	$conn = mysqli_connect($servername,$username,$password,$dbname);
	if(!$conn)
	{
		die("Could not connect: ".mysqli_connect_error());
	}
		$vehicle_no=$_POST['vehicleregnoname'];
	$sql="SELECT vehicleno,policyno,insurancecompanyname FROM insuranceinfo where vehicleno='$vehicle_no'";
	$result=mysqli_query($conn,$sql);
	if(mysqli_num_rows($result)>0)
	{ 
		while($row=mysqli_fetch_assoc($result))
		{
			$vehicle_reg_no=$row['vehicleno'];
			$policy_no=$row['policyno'];
			$insurancecompanyname=$row['insurancecompanyname'];
		}
	}
	else
	{
		echo "unregistered";
	}
	}
	?>
	<form>
	<table  style="color:purple;border-style:groove; height:150px;width:350px" >
        <tr>
            <td style="font-family:Copperplate Gothic Bold">&nbsp;</td>
	<h3>Vehicle Information</h3>
        </tr>
        <tr>
            <td style="color:white; background-color:#95a5a6;" class="auto-style3">Name :</td>
            <td class="auto-style4">
                <input id="Text1" type="text" value='<?php echo  $vehicle_reg_no; ?>'/></td>
        </tr>
        <tr>
            <td style="color:white; background-color:#95a5a6;" class="auto-style3">Vehicle registration no: </td>
            <td class="auto-style4">
                <input id="Text2" type="text" value='<?php echo  $policy_no; ?>'/></td>
        </tr>
        <tr>
             <td style="color:white; background-color:#95a5a6;" class="auto-style3">Policy no: </td>
            <td class="auto-style4">
                <input id="Text3" type="text" value='<?php echo  $insurancecompanyname; ?>' /></td>
        </tr>
		</table>
		</form>
	</body>
	</html>