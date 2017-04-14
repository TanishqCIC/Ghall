<!doctype html>
<head>
<title>Admissions | Gwyer Hall</title>

<link href="css/bootstrap.min.css" rel="stylesheet">
<!--<link href="css/main_typed.css" rel="stylesheet">-->
<link href="css/font-awesome.min.css" rel="stylesheet">
<link href="css/responsive.css" rel="stylesheet">
<link href="css/slider.css" rel="stylesheet">
<link href="css/admission.css" rel="stylesheet">
<script type="text/javascript" src="js/bootstrap.min.js"></script>
<script type="text/javascript" src="js/main.js"></script>
<script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript" src="js/jquery.nav.js"></script>
</head>

<body>

<div class="navbar navbar-fixed-top opaque-navbar">
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navMain">
  <span class="glyphicon glyphicon-chevron-right" style="color:white;"></span>
    
  </button>
      
    </div>
    <div class="collapse navbar-collapse" id="navMain">
      <ul class="nav navbar-nav pull-right">
        <li><a href="index.php">Home</a></li>
        <li><a href="admin.php">Administration</a></li>
        <li class="active"><a href="#">Admission</a></li>
        <li><a href="facilities.php">Facilities</a></li>
        <li><a href="alumni.php">Alumni</a></li>
        <li><a href="#">Residency</a></li> 
        <li><a href="#">Contact Us</a></li> 
      </ul>
    </div>
  </div>
</div>
<br>


<div class="container_form"> 
		<img class="img-responsive" src="images/icon_admission.png" alt="" style="width: 20%">	
					<?php
							
							if (isset ($_POST['username']) && !empty($_POST['email']) && !empty($_POST['mobile']) && !empty($_POST['password']) ) {
								if (isset ($_POST['email']) && !empty($_POST['username']) && !empty($_POST['mobile']) && !empty($_POST['password']) ) {
								$a=$_POST['username'];
								$b=$_POST['email'];
								$c=$_POST['mobile'];
								$d=$_POST['password'];
								$e=$_POST['cpassword'];
								if($d!=$e){
								echo 'Password and Confirm Password Mismatch!';
							}
							else{
											$host = '127.0.0.1';
											$user = 'root';
											$pss = '';
											$err = 'Cannot connect';
											$err1 = 'Cannot connect to database';
											$db = 'ghall';
											$query = "SELECT * FROM users";
											$con = @mysqli_connect($host, $user, $pss, $db) or die($err); 
											
											$z=0;
											if($query_run = mysqli_query($con, $query)){
												while ($que_row = mysqli_fetch_assoc($query_run)) {
													$f=$que_row['no'];
													$g=$que_row['email'];
													$f = $f+1;
													if($b==$g) {
														$z = 1;
														
													}
													
												}
												?>
												
												
												
												<?php
												if ($z==1) {
													echo  'USER ALREADY EXISTS!'; 
												
												?>
												<br>
												
												<?php
											}
												else{
													$query_1 = "INSERT INTO users VALUES ('".$f."','".$a."', '".$b."', '".$c."', '".$d."')";

													mysqli_query($con, $query_1);
													?>
