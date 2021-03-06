<?php

	session_start();

	if(isset($_SESSION['screen_width']) AND isset($_SESSION['screen_height'])){
    //	echo 'User resolution: ' . $_SESSION['screen_width'] . 'x' . $_SESSION['screen_height'];
	} else if(isset($_REQUEST['width']) AND isset($_REQUEST['height'])) {
    	$_SESSION['screen_width'] = $_REQUEST['width'];
    	$_SESSION['screen_height'] = $_REQUEST['height'];
    	header('Location: ' . $_SERVER['PHP_SELF']);
	} else {
	    echo '<script type="text/javascript">window.location = "' . $_SERVER['PHP_SELF'] . '?width="+screen.width+"&height="+screen.height;</script>';
	}

?>

<!-- set height ratio flag -->

<?php

	$width=$_SESSION['screen_width'];
	$height=$_SESSION['screen_height'];
	$ratio=($width/$height);

		if($ratio>1.6){
			$height_flag = 1;
			$src_1 = "images/slider/rsz_himg1.png";
			$src_2 = "images/slider/img2.jpg";
			$src_3 = "images/slider/rsz_uhimg2.jpg";
			$src_4 = 'images/slider/img3.jpg';
			

		}
		else{
			$height_flag = 0;		
			$src_1 = 'images/slider_comp/img1.jpg';
			$src_2 = 'images/slider_comp/img2.jpg';
			$src_3 = 'images/slider_comp/img3.jpg';
			$src_4 = 'images/slider_comp/img4.jpg';
		}
?>

<!DOCTYPE html>
<head>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="viewport" content="height=device-height, initial-scale=1.0">
    <title>Gwyer Hall | University of Delhi</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
	<link href="css/font-awesome.min.css" rel="stylesheet">
	<link href="css/responsive.css" rel="stylesheet">
	<link href="css/slider.css" rel="stylesheet">
	<link rel='stylesheet' href='css/typewriter.css'>
	<script src="js/typed.js" type="text/javascript"></script>
	<script type="text/javascript" src="js/bootstrap.min.js"></script>
	<script type="text/javascript" src="js/main.js"></script>
	<script type="text/javascript" src="js/jquery.js"></script>
	<script type="text/javascript" src="js/jquery.nav.js"></script>
    <script src="js/typed.js"></script>
	<script>
	    $(function(){

	        $("#typed").typed({
	            // strings: ["Typed.js is a <strong>jQuery</strong> plugin.", "It <em>types</em> out sentences.", "And then deletes them.", "Try it out!"],
	            stringsElement: $('#typed-strings'),
	            typeSpeed: 80,
	            backDelay: 500,
	            loop: false,
	            contentType: 'html', // or text
	            // defaults to false for infinite loop
	            loopCount: false,
	            callback: function(){ foo(); },
	            resetCallback: function() { newTyped(); }
	        });

	        $(".reset").click(function(){
	            $("#typed").typed('reset');
	        });

	    });

	    function newTyped(){ /* A new typed object */ }

	    function foo(){ console.log("Callback"); }

    </script>

    <style>
	.sliders {display:none;}
	</style>

	<style>
		.typed-cursor{
		    opacity: 1;
		    -webkit-animation: blink 0.7s infinite;
		    -moz-animation: blink 0.7s infinite;
		    animation: blink 0.7s infinite;
		}
		@keyframes blink{
		    0% { opacity:1; }
		    50% { opacity:0; }
		    100% { opacity:1; }
		}
		@-webkit-keyframes blink{
		    0% { opacity:1; }
		    50% { opacity:0; }
		    100% { opacity:1; }
		}
		@-moz-keyframes blink{
		    0% { opacity:1; }
		    50% { opacity:0; }
		    100% { opacity:1; }
		}
  </style>

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
        <li class="active"><a href="#">Home</a></li>
        <li><a href="admin.php">Administration</a></li>
        <li><a href="admission.php">Admission</a></li>
        <li><a href="facilities.php">Facilities</a></li>
        <li><a href="alumni.php">Alumni</a></li>
        <li><a href="#">Residency</a></li> 
        <li><a href="#">Contact Us</a></li> 
      </ul>
    </div>
  </div>
</div>


  <div class="slider">
    <img class="sliders" src= "<?php echo $src_1 ?>">
    <img class="sliders" src= "<?php echo $src_2 ?>">
    <img class="sliders" src= "<?php echo $src_3 ?>">
    <img class="sliders" src= "<?php echo $src_4 ?>">
  </div>

  <div class="carousel-caption">    
    <h2><span class='typewriter one'><div class="wrap">
        <div class="type-wrap">
           <div id="typed-strings">
              <span>Gwyer Hall  </span>
            </div>
          <span id="typed" style="white-space:pre;"></span>
        </div>
      </div>
     
          
       <div class="byline"><h4>University of Delhi</h4></div>
            
  </div>
<script>
var myIndex = 0;
carousel();

function carousel() {
    var i;
    var x = document.getElementsByClassName("sliders");
    for (i = 0; i < x.length; i++) {
       x[i].style.display = "none";  
    }
    myIndex++;
    if (myIndex > x.length) {myIndex = 1}    
    x[myIndex-1].style.display = "block";  
    setTimeout(carousel, 2000); // Change image every 2 seconds
}
</script>
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
