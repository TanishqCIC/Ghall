<!doctype html>
<head>
<title>Alumni | Gwyer Hall</title>

<link href="css/bootstrap.min.css" rel="stylesheet">
<!--<link href="css/main_typed.css" rel="stylesheet">-->
<link href="css/font-awesome.min.css" rel="stylesheet">
<link href="css/responsive.css" rel="stylesheet">
<link href="css/slider.css" rel="stylesheet">
<link href="css/alumni.css" rel="stylesheet">
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
        <li><a href="admission.php">Admission</a></li>
        <li><a href="facilities.php">Facilities</a></li>
        <li class="active"><a href="#">Alumni</a></li>
        <li><a href="#">Residency</a></li> 
        <li><a href="#">Contact Us</a></li> 
      </ul>
    </div>
  </div>
</div>
<br>
<br>

<div class="alumni">
                    <img class="img-responsive" src="images/icon_alumni.png" alt="">
                </div>              
<div class="container_form_alumni"> 
      <div class="row">
        <div class="container">
            <div class="login-register-form-section">
                <ul class="nav nav-tabs" role="tablist">
                	<li class="active"><a href="#instructions" data-toggle="tab">Search your Name</a></li>
                    <li><a href="#register" data-toggle="tab">Register</a></li>

                </ul>
                <div class="tab-content">
                	<div role="tabpanel" class="tab-pane fade in active" id="instructions">
                	If you are not listed in our database, please register yourself by clicking on the "Register" button above.<br>
                	<br>
                    <form class="form-horizontal" method="post" action="">
                            <div class="form-group " >
                                <div class="input-group">
                                    <div class="input-group-addon"><i class="fa fa-user"></i></div>
                                    <input type="text" name="login_email" class="form-control" placeholder="Username or email" required="required" value="">
                                </div>
                            </div>
                            <input type="submit" value="Search" class="btn btn-success btn-custom">
                	</div>
                    
                    <div role="tabpanel" class="tab-pane fade" id="register">
                        <form class="form-horizontal" method="post" action="">
                            <div class="form-group ">
                                <div class="input-group">
                                    <div class="input-group-addon"><i class="fa fa-user"></i></div>
                                    <input type="text" name="register_username" class="form-control" placeholder="Username" required="required" value="">
                                </div>
                            </div>
                            <div class="form-group ">
                                <div class="input-group">
                                    <div class="input-group-addon"><i class="fa fa-male"></i></div>
                                    <input type="text" name="register_fullname" class="form-control" placeholder="Full name" required="required" value="">
                                </div>
                            </div>
                            <div class="form-group ">
                                <div class="input-group">
                                    <div class="input-group-addon"><i class="fa fa-envelope"></i></div>
                                    <input type="email" name="register_email" class="form-control" placeholder="Email" required="required" value="">
                                </div>
                            </div>
                            <div class="form-group ">
                                <div class="input-group">
                                    <div class="input-group-addon"><i class="fa fa-lock"></i></div>
                                    <input type="password" name="register_password" class="form-control" placeholder="Password" required="required">
                                </div>
                            </div>
                            <div class="form-group ">
                                <div class="input-group">
                                    <div class="input-group-addon"><i class="fa fa-lock"></i></div>
                                    <input type="password" name="register_cpassword" class="form-control" placeholder="Confirm Password" required="required">
                                </div>
                            </div>
                            <input type="submit" value="Register" class="btn btn-success btn-custom">
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
