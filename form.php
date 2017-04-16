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


