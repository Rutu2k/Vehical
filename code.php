<?php
	$con = mysqli_connect("localhost",'root',"","dbrto");
	if(isset($_POST['vehicle_reg']))
	{
		$victimname=$_POST['victimname'];
		$vehicleregno=$_POST['vehicleregnoname'];
		$licenseno=$_POST['licensenoname'];
		$adate=$_POST['adatename'];
		$atime=$_POST['atimename'];
		$area=$_POST['areaname'];
		$query= "INSERT INTO sendrto (victimname,vrno,licenseno,date,atime,area) values ('$victimname','$vehicleregno','$licenseno','$adate','$atime','$area')";
		$query_run=mysqli_query($con,$query);
        if(mysqli_affected_rows($con) > 0)
		{	
		echo "<p>Row Added</p>";
		
		}
		else
		{
		echo "<p>Row not Added</p>";
		}
		
	}
	
?>