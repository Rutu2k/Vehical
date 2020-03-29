<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title>Insurance Company</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<link rel="stylesheet" href="css/rto_home_style.css" type="text/css">
	<meta charset="UTF-8">
	<style>
		.container{
			position:relative;
		}
		.bottomright{
			font-family:Montserrat, sans-serif;
			font-weight: 700;
			letter-spacing: 1.3px;
			line-height: 1;
			position:absolute;
			bottom: 30px;
			right:600px;
			font-size:50px;
			color: #7f8c8d;
			opacity: 10;
		}
		img{
			opacity: 10;
			width:1500px;
			height: 500px;
			padding:0;
			margin-top:-5%;
			margin-left:-2%;
			margin-right:-5%;
		}
		.contentrto{
			padding-top:0%;
			padding-left:0%;
		}
		.logout{
			position: absolute;
			top: 20px;
			right:-5%;
			transform: translate(-50%, -50%);
			-ms-transform: translate(-50%, -50%);
			background-color: #130f40;
			color: white;
			font-size: 16px;
			padding: 12px 24px;
			border: none;
			cursor: pointer;
			border-radius: 5px;
			text-align: center;
		}
	</style>
</head>
<body>
	<div class="container">
	<form action="" method="POST">
		<img src="imgs/uni.jpg" alt="RTO" width="1000" height="300">
		<input type="submit" class="logout" name="logout" value="Log out">
		<div class="bottomright"><center></center></div>
	</div>
	<?php
	if(isset($_POST['logout']))
	{
		session_destroy();
		header('location: index2.php');
		
	}
	?>
	<div class="contentrto">
		 <?php require('united_homepage.php'); ?>
		 
	</div>
	
</body>
</html>
