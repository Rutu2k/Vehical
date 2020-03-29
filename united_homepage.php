
<?php
/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
$link = mysqli_connect("localhost", "root", "", "uiicl_db");
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
 
// Attempt select query execution
$sql = "SELECT * FROM claimtb ORDER BY adate,atime DESC ";
?>
<html>
<head>
<title>Insurance'sHomepage</title>
	<style type="text/css">
		body {
			font-size: 15px;
			color: #343d44;
			font-family: "segoe-ui", "open-sans", tahoma, arial;
			padding: 0;
			margin: 0;
		}
		table {
			margin: auto;
			font-family: "Lucida Sans Unicode", "Lucida Grande", "Segoe Ui";
			font-size: 12px;
		}

		h1 {
			margin: 25px auto 0;
			text-align: center;
			text-transform: uppercase;
			font-size: 30pxpx;
		}

		table td {
			transition: all .5s;
		}
		
		/* Table */
		.data-table {
			border-collapse: collapse;
			font-size: 14px;
			min-width: 537px;
		}

		.data-table th, 
		.data-table td {
			
			padding: 7px 17px;
		}
		.data-table caption {
			margin: 7px;
		}

		/* Table Header */
		.data-table thead th {
			background-color: #130f40;
			color: #FFFFFF;
			border-color: #130f40 !important;
			text-transform: uppercase;
			padding:20px;
		}

		/* Table Body */
		.data-table tbody td {
			color: #353535;
		}
		.data-table tbody td:first-child,
		.data-table tbody td:nth-child(4),
		.data-table tbody td:last-child {
			text-align: left;
		}

		.data-table tbody tr:nth-child(odd) td {
			background-color: #d1d8e0;
		}
		.data-table tbody tr:hover td {
			background-color: #34495e;
			color:white;
		}

		/* Table Footer */
		.data-table tfoot th {
			background-color: #e5f5ff;
			text-align: right;
		}
		.data-table tfoot th:first-child {
			text-align: left;
		}
		.data-table tbody td:empty
		{
			background-color: #ffcccc;
		}
	</style>
</head>
<body>
	<h1>UNITED INDIA INSURANCE COMPANY LIMITED</h1>
	<table class="data-table">
		<caption class="title">Request for Claims</caption>
		<thead>
			<tr>
				<th>Driver name</th>
				<th>License No.</th>
				<th>Date</th>
				<th>Time</th>
				<th>ALocation</th>
				<th>No.of passengers</th>
				<th>Damage</th>
				<th>Other Driver</th>
				<th>Other Vehicle No.</th>
				<th>Other Insurance Comapany</th>
				<th>Other License No.</th>
				<th>Invastigating Officer</th>
			</tr>
		</thead>
		<tbody>
<?php
if($result = mysqli_query($link, $sql)){
    if(mysqli_num_rows($result) > 0){
        while($row = mysqli_fetch_array($result)){
            echo "<tr>";
                echo "<td>" . $row['driver_name'] . "</td>";
                echo "<td>" . $row['license_no'] . "</td>";
                echo "<td>" . $row['adate'] . "</td>";
                echo "<td>" . $row['atime'] . "</td>";
				echo "<td>" . $row['location'] . "</td>";
				echo "<td>" . $row['no_passenger'] . "</td>";
				echo "<td>" . $row['damage'] . "</td>";
                echo "<td>" . $row['other_driver_name'] . "</td>";
                echo "<td>" . $row['other_vehicle_no'] . "</td>";
                echo "<td>" . $row['other_insurance_company'] . "</td>";
				echo "<td>" . $row['other_license_no'] . "</td>";
				echo "<td>" . $row['name_investigating_officer'] . "</td>";
            echo "</tr>";
        }
        echo "</table>";
        // Free result set
        mysqli_free_result($result);
    } else{
        //echo "No records matching your query were found.";
    }
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
 
// Close connection
mysqli_close($link);
?>
</tbody>
	</table>
</body>
</html>