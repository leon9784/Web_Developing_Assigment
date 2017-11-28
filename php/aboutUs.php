<?php session_start();?>
<html>
<head>

<link rel="stylesheet" type="text/css" href="../css/about.css">
	
	<link rel="shortcut icon" href="../img/favicon.ico"/>
	<title>The Lighters - About Us</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="../css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
	<script src="../js/bootstrap.min.js"></script>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>
<!-- 
static-top no need padding for body 

<!--
<nav class="navbar navbar-inverse navbar-static-top" id="navbar">
  <div class="container-fluid">
    <div class="navbar-header">
	<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbarCollapse">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="homepage.php">Lighters</a>
    </div>
	<div id="navbarCollapse" class="collapse navbar-collapse">
    <ul class="nav navbar-nav">
      <li class=""><a href="homepage.php">Home</a></li>
      <li class="active"><a href="aboutUs.php">About Us</a></li>
      </li>
	  
	  <li class="dropdown">
        <a class="dropdown-toggle" data-toggle="dropdown" href="#">Clothing 
        <span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a href="tshirt.php">T-Shirt</a></li>
          <li><a href="#">Polo-T</a></li>
		  <li><a href="#">Pants</a></li>
        </ul>
      </li>
	  
	  <li class="dropdown">
        <a class="dropdown-toggle" data-toggle="dropdown" href="#">Accessories 
        <span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a href="belts.php">Belts</a></li>
          <li><a href="wallet.php">Wallet</a></li>
        </ul>
      </li>
	  
	  <li class="dropdown">
        <a class="dropdown-toggle" data-toggle="dropdown" href="#">Undergarment 
        <span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a href="underwear.php">Underwear</a></li>
          <li><a href="socks.php">Socks</a></li>
        </ul>
      </li>
    </ul>

	<ul class="nav navbar-nav navbar-right">
      <li><a href="#"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
      <li><a href="#"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
    </ul>
  </div>
  </div>
</nav>


<!--padding top 70px bottom 70px -->
<?php
	include 'navigation.php';
?>

<div class="container">

        <div class="row">
            <div class="box">
                <div class="col-lg-12">
                    <hr>
                    <h2 class="intro-text text-center">About
                        <strong>The Lighters</strong>
                    </h2>
                    <hr>
                </div>
                <div class="col-md-6">
                    <img class="img-responsive img-border-left" src="../img/about.jpg" alt="The Lighters Store" style="padding-left:2px;">
                </div>
                <div class="col-md-6">
                    <blockquote><p>Founded in 2016, headquatered in Tanjung Bungah of Penang.
					   The Lighters always try the best to revelutionise the global online men's garment 
					   industry with all the well-designed fashion items and accessories.</p></blockquote>
                </div>
                <div class="clearfix"></div>
            </div>
        </div>
		
		<div class="row" style="padding-bottom:8px;">
            <div class="box">
                <div class="col-lg-12">
                    <hr>
                    <h2 class="intro-text text-center">Our
                        <strong>Team</strong>
                    </h2>
                    <hr>
                </div>
                <div class="col-md-6">
                    <img class="img-responsive img-border-left" src="../img/team.png" alt="The Lighters Team">
                </div>
                <div class="col-md-6">
                    <blockquote><p>
					Founder & CEO:&nbsp;
					Ooi Zhong Quan
					</p></blockquote>
                </div>
                <div class="clearfix"></div>
            </div>
        </div>
		
		<div class="row" style="padding-bottom:40px;">
            <div class="box">
                <div class="col-lg-12">
                    <hr>
                    <h2 class="intro-text text-center" id="contactus">Contact
                        <strong>Us</strong>
                    </h2>
                    <hr>
                </div>
                <div class="col-md-6">
                    <img class="img-responsive img-border-left"  src="../img/contact_us.jpg" alt="The Lighters Team" style="padding-left:5px">
                </div>
                <div class="col-md-6">
                    <blockquote><p>
					Email: thelighters@gmail.com <br/>
					Phone: 04-5678901
					<!--
					Founder & CEO:&nbsp;
					Ooi Zhong Quan
					-->
					</p></blockquote>
                </div>
                <div class="clearfix"></div>
            </div>
        </div>

    </div>

<div class="container">
	<div class="row">
		<a id="back-to-top" href="#" class="btn btn-primary btn-lg back-to-top" role="button" title="Click to return on the top page" data-toggle="tooltip" data-placement="left"><span class="glyphicon glyphicon-chevron-up"></span></a>
	</div>
</div>

<script type="text/javascript">
$(document).ready(function(){
     $(window).scroll(function () {
            if ($(this).scrollTop() > 50) {
                $('#back-to-top').fadeIn();
            } else {
                $('#back-to-top').fadeOut();
            }
        });
        // scroll body to 0px on click
        $('#back-to-top').click(function () {
            $('#back-to-top').tooltip('hide');
            $('body,html').animate({
                scrollTop: 0
            }, 800);
            return false;
        });
        
        $('#back-to-top').tooltip('show');

});
</script>

<?php
	include 'footer.php';
?>

<!--
<div class="footer">
<div id="follow-us-copyright" name="follow-us-copyright">
<span style="vertical-align:center;"><b>Keep Up With Us On</b></span>
<span style="vertical-align:center;">&#9679;</span>
<a href="http://www.facebook.com" target="new"><img src="facebook-logo.png" alt="Facebook logo" title="Facebook Fanpage" width="27" height="27"/></a>
<span style="vertical-align:center;">&#9679;</span>
<a href="https://www.instagram.com/" target="new"><img src="instagram-logo.png" alt="Instagram logo" title="Instagram Fanpage"width="27" height="27"/></a>
<span style="vertical-align:center;">&#9679;</span>
<a href="https://twitter.com/?lang=en" target="new"><img src="twitter-logo.png" alt="Twitter logo" width="27" title="Twitter Fanpage"height="27"/></a>
<span style="vertical-align:center;">&#9679;</span>

 word-spacing:normal; font-size:16px; margin:0 100"

<span style="vertical-align:center;">&copy; 2016 LIGHTERS</span>
</div>

</div>
-->
  </body>

</html>