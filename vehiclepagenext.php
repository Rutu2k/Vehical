<html>
<body>
<?php
	if(isset($_POST['vehiclereg']))
	{
	$servername="localhost";
	$username="root";
	$password="";
	$dbname="samplelogindb";
	
	$conn = mysqli_connect($servername,$username,$password,$dbname);
	if(!$conn)
	{
		die("Could not connect: ".mysqli_connect_error());
	}
		$vehicle_no=$_POST['vehicleregnoname'];
	$sql="SELECT name,vehicle_reg_no,policy_no,area FROM vehicledb where vehicle_reg_no='$vehicle_no'";
	$result=mysqli_query($conn,$sql);
	if(mysqli_num_rows($result)>0)
	{
		while($row=mysqli_fetch_assoc($result))
		{
			?>
			<table>
			<tr>
			<td><?php echo "name:";?></td>
            <td><?php echo $row['name']; ?></td>
			</tr>
			<br>
			<tr>
			<td><?php echo "Vehicle registration no:";?></td>
			<td><?php echo $row['vehicle_reg_no']; ?></td>
			</tr>
			<br>
			<tr>
			<td><?php echo "Policy no:";?></td>
			<td><?php echo $row['policy_no']; ?></td>
			</tr>
			<br>
			<tr>
			<td><?php echo "Area:";?></td>
			<td><?php echo $row['area']; ?></td>
			</tr>
			</table>
			<?php
			
		}
	}
	else
	{
		echo "unregistered";
	}
	}
	?>
	</body>
	</html>