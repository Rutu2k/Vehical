<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
		<title>Police Registration page</title>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
		<link rel="stylesheet" href="css/police_reg_style.css">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <script language="javascript" type="text/javascript">
            function dynamicdropdown(listindex)
            {
                document.getElementById("subcategory").length = 0;
                switch (listindex)
                {
                    case "City" :
                        document.getElementById("subcategory").options[0]=new Option("Select Police Station","");
                        document.getElementById("subcategory").options[1]=new Option("Faraskhana","Faraskhana");
						document.getElementById("subcategory").options[2]=new Option("Khadak","Khadak");
                        break;
                    
                    case "Vishrambaug" :
                        document.getElementById("subcategory").options[0]=new Option("Select Police Station","");
                        document.getElementById("subcategory").options[1]=new Option("Shivaji Nagar","Shivaji Nagar");
                        document.getElementById("subcategory").options[2]=new Option("Vishrambaug","Vishrambaug");
                        break;
                    case "Deccan" :
                        document.getElementById("subcategory").options[0]=new Option("Select Police Station","");
                        document.getElementById("subcategory").options[1]=new Option("Kothrud","Kothrud");
                        document.getElementById("subcategory").options[2]=new Option("Varje Malwadi","Varje Malwadi");
						 document.getElementById("subcategory").options[3]=new Option("Deccan","Deccan");
                        break;
                    case "Swargate" :
                        document.getElementById("subcategory").options[0]=new Option("Select Police Station","");
                        document.getElementById("subcategory").options[1]=new Option("Bharti Vidyapeeth","Bharti Vidyapeeth");
						document.getElementById("subcategory").options[2]=new Option("Bundgarden","Bundgarden");
                        document.getElementById("subcategory").options[3]=new Option("Dattawadi","Dattawadi");
                        document.getElementById("subcategory").options[4]=new Option("Market Yard","Market Yard");
						document.getElementById("subcategory").options[5]=new Option("Sahakar Nagar","Sahakar Nagar");
                        document.getElementById("subcategory").options[6]=new Option("Bibwewadi","Bibwewadi");
                        document.getElementById("subcategory").options[7]=new Option("Swargate","Swargate");
						document.getElementById("subcategory").options[8]=new Option("Sinhagad","Sinhagad");
                        break;
					 case "Lashkar" :
                        document.getElementById("subcategory").options[0]=new Option("Select Police Station","");
                        document.getElementById("subcategory").options[1]=new Option("Koregoanpark","Koregoanpark");
                        document.getElementById("subcategory").options[2]=new Option("Samarth","Samarth");
						document.getElementById("subcategory").options[3]=new Option("Lashkar","Lashkar");
                        break;
				     case "Chaturshrungi" :
                        document.getElementById("subcategory").options[0]=new Option("Select Police Station","");
                        document.getElementById("subcategory").options[1]=new Option("Chaturshrungi","Chaturshrungi");
                        document.getElementById("subcategory").options[2]=new Option("Hinjewadi","Hinjewadi");
						document.getElementById("subcategory").options[3]=new Option("Wakad","Wakad");
						document.getElementById("subcategory").options[4]=new Option("Sangavi","Sangavi");
						break;
						 case "Pimpri" :
                        document.getElementById("subcategory").options[0]=new Option("Select Police Station","");
                        document.getElementById("subcategory").options[1]=new Option("MIDC Bhosari","MIDC Bhosari");
                        document.getElementById("subcategory").options[2]=new Option("Pimpri","Pimpri");
						document.getElementById("subcategory").options[3]=new Option("Chinchwad","Chinchwad");
						document.getElementById("subcategory").options[4]=new Option("Nigdi","Nigdi");
						document.getElementById("subcategory").options[5]=new Option("Bhosari","Bhosari");
						break;
						 case "Khadaki" :
                        document.getElementById("subcategory").options[0]=new Option("Select Police Station","");
                        document.getElementById("subcategory").options[1]=new Option("Khadaki","Khadaki");
                        document.getElementById("subcategory").options[2]=new Option("Vimantal","Vimantal");
						document.getElementById("subcategory").options[3]=new Option("Vishrantwadi","Vishrantwadi");
						document.getElementById("subcategory").options[4]=new Option("Chandan Nagar","Chandan Nagar");
						document.getElementById("subcategory").options[5]=new Option("Dighi","Dighi");
						document.getElementById("subcategory").options[6]=new Option("Yerawada","Yerawada");
                        break;
						 case "Wanavadi" :
                        document.getElementById("subcategory").options[0]=new Option("Select Police Station","");
                        document.getElementById("subcategory").options[1]=new Option("Mundhwa","Mundhwa");
                        document.getElementById("subcategory").options[2]=new Option("Wanavadi","Wanavadi");
						document.getElementById("subcategory").options[3]=new Option("Kondhawa","Kondhawa");
						document.getElementById("subcategory").options[4]=new Option("Hadapsar","Hadapsar");
						break;
                }
                return true;
            }
       </script>
		<style>
		input[type=date],input[type=text],input[type=password],input[type=email],input[type=text],select,textarea,input[type=number] {
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
			width:40%;
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
			#main-wrapper2{
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
		<div id="main-wrapper2" align="center">
			
			<center>
				<h2>Registration Form</h2>
				<img src="imgs/2_log.jpg" class="p_avatar"/>
			</center>
		
		
			<form class="form-group" action="" method="post">
					<center><h3>Police Officer Information</h3><br></center>
					<label><b>First Name</b>
					<input name="pf_name" type="text" class="form-control" placeholder="Type your first name" required/>
					</label><br>
					<label><b>Middle Name<b>
					<input name="pm_name" type="text" class="form-control" placeholder="Type your middle name" required/>
					</label><br>
					<label><b>Last Name<b>
					<input name="pl_name" type="text" class="form-control" placeholder="Type your last name" required/>
					</label><br>
					<label><b>Designation<b>
					<input name="p_degsn" type="text" class="form-control" required/>
					</label><br>
					<label><b>Date Of Birth<b>
					<input name="p_dob" type="date" class="form-control" required/>
					</label><br>
					<center><h3>Police Station Information</h3><br></center>
						<div class="category_div form-group" id="category_div" for="category">Select Division:
								<select name="category" class="required-entry" id="category" onchange="javascript: dynamicdropdown(this.options[this.selectedIndex].value);">
									<option value="">Select Division</option>
									<option value="City">City</option>	
									<option value="Vishrambaug">Vishrambaug</option>
									<option value="Deccan">Deccan</option>
									<option value="Swargate">Swargate</option>
									<option value="Lashkar">Lashkar</option>
									<option value="Chaturshrungi">Chaturshrungi</option>	
									<option value="Pimpri">Pimpri</option>
									<option value="Khadaki">Khadaki</option>
									<option value="Wanavadi">Wanavadi</option>
								</select>
							</div>
							<div class="sub_category_div form-group" id="sub_category_div">Select Police Station:
									<script type="text/javascript" language="JavaScript">
										document.write('<select name="subcategory" class="required-entry" id="subcategory"><option value="">Select Police Station</option></select>')//this is to display when we havents selected any sub menu
									</script>
										<noscript>
										<select class="form-control" name="subcategory" id="subcategory">
											<option value="">Select Police Station</option>
										</select>
										</noscript>
						</div>
						<br>
						
					<!--<input name="p_region" type="text" class="p1_inputvalues" required/><br>-->
					<label><b>Division ACP name<b>
					<input name="p_ACPnm" type="text" class="form-control" required/>
					</label><br>
					<label><b>Division ACP mobile number<b>
					<input name="p_ACPno" type="number" class="form-control" required/></label><br>
					<label><b>Police station contact number<b>
					<input name="p_station_no" type="number" class="form-control" required/></label><br>
					<label><b>Total number of beat marshalls<b>
					<input name="p_beatmarshal_no" type="number" class="form-control" required/></label><br>
					<label><b>Email ID<b>
					<input name="pemail_name" type="email" class="form-control" required/></label><br>
					
					<a href="index1.php"><input name="police_reg_btn" type="submit" id="p_regi_btn" value="Submit" class="btn btn-primary btn-lg btn-block" /></br>
					<a href="register.php"><input type="button" id="p_back_btn" value="<< Back" class="btn btn-primary btn-lg btn-block"/></a>
				</form>
<?php
            $username=$_SESSION['username'];

		$connect=mysqli_connect("localhost",'root',"","policeregpg");
		
		//$id=mysqli_query($connect,"select id from user where username='$username'");
		//$query_run=mysqli_fetch_array($id);
		//echo $query_run['$id'];
		
		if(isset($_POST['police_reg_btn']))
		{
			$firstname=$_POST['pf_name'];
			$middlename=$_POST['pm_name'];
			$lastname=$_POST['pl_name'];
			$designation=$_POST['p_degsn'];
			$dob=$_POST['p_dob'];
			$division=$_POST['category'];
			$policestation=$_POST['subcategory'];
			$acpname=$_POST['p_ACPnm'];
			$acpmobno=$_POST['p_ACPno'];
			$pcontactno=$_POST['p_station_no'];
			$beatno=$_POST['p_beatmarshal_no'];
			$emailid=$_POST['pemail_name'];
			$query= "INSERT INTO tbpolicereg1(username,firstname,middlename,lastname,designation,dob,division,policestation,acpname,acpmobno,pcontactno,beatno,email)values('$username','$firstname','$middlename','$lastname','$designation','$dob','$division','$policestation','$acpname','$acpmobno','$pcontactno','$beatno','$emailid')";
				$query_run=mysqli_query($connect,$query);
				if(mysqli_affected_rows($connect) > 0)
				{
					echo '<script type="text/javascript"> alert("Registration is successfully completed.")</script>';
					header('location: index1.php');
				}
				else
				{
				echo '<script type="text/javascript"> alert("Registration is not completed...")</script>';
					//echo "<p>Row not Added</p>";
				}
		}
?>
		</div>
	</body>
</html>