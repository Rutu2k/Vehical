<!DOCTYPE html>
<html>
<head>
	<title>RTO's Homepage</title>
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
			bottom: 150px;
			right:280px;
			font-size:50px;
			color: black;
			opacity: 0.6;
		}
		img{
			opacity: 10;
			width:100%;
			height: 300px;
		}
		.contentrto{
			padding-top:0%;
			padding-left:0%;
		}
	</style>
</head>
<body>
	<div class="container">
		<img src="imgs/rto.jpg" alt="RTO" width="1000" height="300">
		<div class="bottomright">INSURANCE COMPANY</div>
	</div>
	<div class="contentrto">
		 <?php require('ic_result.php'); ?>
	</div>
	
</body>
</html>
