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
												
													<?php
													echo "Proceed using Login button !";
													?>
												
													<?php
													
													}
													

												
												
											}
											else{
												echo "Connection fail";
											}


							}
							}
							
							}
								?>

								<?php
									if (isset ($_POST['lemail']) && !empty($_POST['lpassword'])) {
										if(isset ($_POST['lpassword']) && !empty($_POST['lemail'])) {
											$b=$_POST['lemail'];
											$c=$_POST['lpassword'];

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
																$f=$que_row['uname'];
																$g=$que_row['pass'];
																$h=$que_row['email'];
																$i=$que_row['mobile'];
																if ($b==$h && $c==$g) {
																	$z = 1;
																	$hi = $f;
																}
																
															}
															if ($z==1) {
																?>
																<br>
																<br>
																<?php 
																session_start();
																$_SESSION['user']=$hi;
																$_SESSION['mail']=$h;
																$_SESSION['phone']=$i;
																header("Location: http://localhost/gwyer/form.php");
																exit;
															}
															else {
																?>
																<h2>
																<?php
																echo 'Invalid access!';
																}
																?>
</h2>
										<?php					
															
														}
														else{
															echo "Connection fail";
														}
													}
										}

										?>
      <div class="row">
        <div class="container">
            <div class="login-register-form-section">
                <ul class="nav nav-tabs" role="tablist">
                	<li class="active"><a href="#instructions" data-toggle="tab">Instructions</a></li><br>
                    <li><a href="#login" data-toggle="tab">Login</a></li>
                    <li><a href="#register" data-toggle="tab">Register</a></li>

                </ul>
                <div class="tab-content">
                	<div role="tabpanel" class="tab-pane fade in active" id="instructions">
                	If you are a new applicant, please register by clicking on the "Register" button above.<br>
                	Else, simply login using "Login" button.
                	</div>
                    <div role="tabpanel" class="tab-pane fade" id="login">
                        <form class="form-horizontal" method="post" action="">
                            <div class="form-group " >
                                <div class="input-group">
                                    <div class="input-group-addon"><i class="fa fa-user"></i></div>
                                    <input type="text" name="lemail" class="form-control" placeholder="Username or email" required="required" value="">
                                </div>
                            </div>
                            <div class="form-group ">
                                <div class="input-group">
                                    <div class="input-group-addon"><i class="fa fa-key"></i></div>
                                    <input type="password" name="lpassword" class="form-control" placeholder="Password" required="required">
                                </div>
                            </div>
                            <div class="form-group">
                                
                                
                                <a href="#" class="pull-right">Forgot password?</a>
                            </div>  
                            <input type="submit" value="Login" class="btn btn-success btn-custom">

                        </form>
                    </div>
                    <div role="tabpanel" class="tab-pane fade" id="register">
                        <form class="form-horizontal" method="post" action="">
                            <div class="form-group ">
                                <div class="input-group">
                                    <div class="input-group-addon"><i class="fa fa-user"></i></div>
                                    <input type="text" name="username" class="form-control" placeholder="Username" required="required" value="">
                                </div>
                            </div>
                            <div class="form-group ">
                                <div class="input-group">
                                    <div class="input-group-addon"><i class="fa fa-phone"></i></div>
                                    <input type="text" name="mobile" class="form-control" placeholder="Mobile No." required="required" value="">
                                </div>
                            </div>
                            <div class="form-group ">
                                <div class="input-group">
                                    <div class="input-group-addon"><i class="fa fa-envelope"></i></div>
                                    <input type="email" name="email" class="form-control" placeholder="Email" required="required" value="">
                                </div>
                            </div>
                            <div class="form-group ">
                                <div class="input-group">
                                    <div class="input-group-addon"><i class="fa fa-lock"></i></div>
                                    <input type="password" name="password" class="form-control" placeholder="Password" required="required">
                                </div>
                            </div>
                            <div class="form-group ">
                                <div class="input-group">
                                    <div class="input-group-addon"><i class="fa fa-lock"></i></div>
                                    <input type="password" name="cpassword" class="form-control" placeholder="Confirm Password" required="required">
                                </div>
                            </div>
                            <input type="submit" value="Register" class="btn btn-success btn-custom">
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
</div>
	<br>
	<br>
	<br>
	<br>
	<div class="navbar navbar-fixed-bottom opaque-navbar">
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navMain">
  <span class="glyphicon glyphicon-chevron-right" style="color:white;"></span>
    
  </button>
      
    </div>
    <div class="collapse navbar-collapse" id="navMain" style="text-align: center">
    
      Designed and developed by <span style="color:yellow">Tanishq Kumar Dhangar</span>
   <p>Copyright 2017</p>
    </div>
  </div>
</div>
<script>
   /*
  **********************************************************
  * OPAQUE NAVBAR SCRIPT
  **********************************************************
  */

  // Toggle tranparent navbar when the user scrolls the page

  $(window).scroll(function() {
    if($(this).scrollTop() > 50)  /*height in pixels when the navbar becomes non opaque*/ 
    {
        $('.opaque-navbar').addClass('opaque');
    } else {
        $('.opaque-navbar').removeClass('opaque');
    }
});
</script>

</body>

</html>
