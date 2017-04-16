<?php
session_start();
$user1 = $_SESSION['user'];
$mail = $_SESSION['mail'];
$phone = $_SESSION['phone'];
?>
<!doctype html>
<head>
<title>Alumni | Gwyer Hall</title>

<link href="css/bootstrap.min.css" rel="stylesheet">
<!--<link href="css/main_typed.css" rel="stylesheet">-->
<link href="css/font-awesome.min.css" rel="stylesheet">
<link href="css/responsive.css" rel="stylesheet">
<link href="css/slider.css" rel="stylesheet">
<link href="css/form.css" rel="stylesheet">
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
        <li class="active"><a href="#">Logout</a></li>
        
      </ul>
    </div>
  </div>
</div>
<br>
<br>


<div class="container_form_alumni"> 
      <div class="row">
        <div class="container">
            <div class="login-register-form-section">
            <br>
            <br>
            <br>
                <ul class="nav nav-tabs" role="tablist">
                	<li class="active"><a href="#instructions" data-toggle="tab">Instructions</a></li>
                    <li><a href="#register" data-toggle="tab">Form</a></li>

                </ul>
                <div class="tab-content">
                	<div role="tabpanel" class="tab-pane fade in active" id="instructions">
                	1. You can fill the form in various attempts, provided you 'SAVE' it every time before you logout.<br>
                	2. You CANNOT edit form once you SUBMIT it !
                	<br>
                    </div>
                  
                    <div role="tabpanel" class="tab-pane fade" id="register">
                        <form class="form-horizontal" method="post" action="">
                            <div class="form-group ">
                                <div class="input-group">
                                    <div class="input-group-addon"><i class="fa fa-user"></i></div>
                                    <input type="text" name="name" class="form-control" placeholder="Name of Candidate" required="required" value="">
                                </div>
                            </div>
                            <div class="form-group ">
                                <div class="input-group">
                                    <div class="input-group-addon"><i class="fa fa-male"></i></div>
                                    <input type="dropdown" name="fathername" class="form-control" placeholder="Father's name" required="required" value="">
                                </div>
                            </div>
                            <div class="form-group ">
                                <div class="input-group">
                                    <div class="input-group-addon"><i class="fa fa-female"></i></div>
                                    <input type="dropdown" name="fathername" class="form-control" placeholder="Mother's name" required="required" value="">
                                </div>
                            </div>
                            <div class="form-group ">
                                <div class="input-group">
                                    <div class="input-group-addon"><i class="fa fa-envelope"></i></div>
                                    <input type="email" name="register_email" class="form-control" placeholder="Email" required="required" value="<?php echo $mail?>">
                                </div>
                            </div>
                            <div class="form-group ">
                                <div class="input-group">
                                    <div class="input-group-addon"><i class="fa fa-phone"></i></div>
                                    <input type="mobile" name="mobile" class="form-control" placeholder="Contact No. (Mobile)" required="required" value="<?php echo $phone?>">
                                </div>
                            </div>
                            <div class="form-group ">
                                <div class="input-group">
                                    <div class="input-group-addon"><i class="fa fa-phone"></i></div>
                                    <input type="phone" name="phone" class="form-control" placeholder="Additional Phone no.">
                                </div>
                            </div>
                            <div class="form-group ">
                                <div class="input-group">
                                     <select>
                                    	<option class="form-control" value="" selected disabled> Select level of Academia</option>
                                    	<option>Undergraduation</option>
                                    	<option>Postgraduation</option>
                                    	<option>Doctorate (PhD)</option>
                                    	<option>Post Doctorate</option>
                                    	<option>Teacher</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group ">
                                <div class="input-group">
                                     <select>
                                    	<option class="form-control" value="" selected disabled> Select Department</option>
                                    	<option>Cluster Innovation Centre (CIC)</option>
                                    	<option>Campus Law Centre (CLC)</option>
                                    	<option>Department of English</option>
                                    	<option>Department of Hindi</option>
                                    	<option>Department of Mathematics</option>
                                    	<option>Department of Computer Science (DUCS)</option>
                                    	<option>Department of Sanskrit</option>
                                    	<option>Department of Geography</option>
                                    	<option>Department of History</option>
                                    	<option>Department of Political Science</option>
                                    	<option>Department of Physics</option>
                                    	<option>Department of Chemistry</option>
                                    	<option>Department of Zoology</option>
                                    </select>
                                </div>
                            </div>
