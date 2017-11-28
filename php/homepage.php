<?php session_start();?>
<html>
<head>
<link rel="stylesheet" type="text/css" href="../css/home.css">
	<link rel="shortcut icon" href="../img/favicon.ico"/>
	<title>The Lighters - Home</title>
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
-->
<?php
	include 'navigation.php';
?>

<div class="container" style="margin-top:10px">
  <div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner" style="max-height:500px">
      <div class="item active">
        <img src="../img/carol1.jpg" alt="Men's fashion1" style="width:100%;">
      </div>

      <div class="item">
        <img src="../img/carol2.png" alt="Men's fashion2" style="width:100%;">
      </div>
    
      <div class="item">
	  <img src="../img/carol3.png" alt="Men's fashion3" style="width:100%;">
	  </div>
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
</div>
<!--padding top 70px bottom 70px -->

<div class="container" style="margin-top:20px">
		<h2 class="intro-text text-center">WHAT'S NEW</h2>
<div class="row">
	<div class="col-xs-4">
		<div class="thumbnail">
			<img src="../img/belt1-NEW.png" alt="New Belt" style="width:100%">
		</div>
	</div>
	
<div class="col-xs-4">
		<div class="thumbnail">
			<img src="../img/polot-rust-NEW.png" alt="New Polo-T Rust" style="width:100%">
		</div>
	</div>
	
<div class="col-xs-4">
		<div class="thumbnail">
			<img src="../img/wallet-NEW.png" alt="New Wallet" style="width:100%">
		</div>
	</div>
	
</div>
</div>

<div class="container" style="margin-top:1px">
		<h2 class="intro-text text-center">SALES</h2>
<div class="row">
	<div class="col-xs-4">
		<div class="thumbnail">
			<img src="../img/shorts-black-SALES.png" alt="Shorts Black SALES" style="width:100%">
		</div>
	</div>
	
<div class="col-xs-4">
		<div class="thumbnail">
			<img src="../img/shirt-blue-SALES.png" alt="Blue Shirt SALES" style="width:100%">
		</div>
	</div>
	
<div class="col-xs-4">
		<div class="thumbnail">
			<img src="../img/pants-grey-SALES.png" alt="Grey Pants SALES" style="width:100%">
		</div>
	</div>
	
</div>
</div>

<div class="container" style="margin-top:1px">
		<h2 class="intro-text text-center">WHY SHOP WITH US</h2>
<div class="row">
	<div class="col-xs-4">
		<div class="thumbnail">
			<img src="../img/free-shipping.png" alt="Free Shipping" style="width:100%">
			<center>
			<span>Free Shipping</span>
			</center>
		</div>
	</div>
	
<div class="col-xs-4">
		<div class="thumbnail">
			<img src="../img/store-collection.png" alt="Store Collection" style="width:100%">
			<center>
			<span>Free Store Collection</span>
			</center>
		</div>
	</div>
	
<div class="col-xs-4">
		<div class="thumbnail">
			<img src="../img/return-exchange.png" alt="Return Exchange" style="width:100%">
			<center>
			<span>Return & Exchange</span>
			</center>
		</div>
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
<br/>
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