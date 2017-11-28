<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
	<link rel="stylesheet" type="text/css" href="../css/home.css">

	<link rel="shortcut icon" href="../img/favicon.ico"/>
	<title>The Lighters - Clothing - Crew Neck T-Shirt</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="../css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
	<script src="../js/bootstrap.min.js"></script>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

</head>

<body>

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
      <li class=""><a href="aboutUs.php">About Us</a></li>
      </li>
	  
	  <li class="dropdown active">
        <a class="dropdown-toggle" data-toggle="dropdown" href="#">Clothing 
        <span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a href="tshirt.php">T-Shirt</a></li>
          <li><a href="polot.php">Polo-T</a></li>
		  <li><a href="pants.php">Pants</a></li>
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

<div class="container" style="margin-top:20px">

<div class="row" style="padding-left:20px">
	<div class="table-responsive">
		<table class="table borderless">
			<tr>
		<td valign="top" style="width: 100px">
			<ul style="list-style-type:none;">
				<li><a href="bcrewneck.php" target="boxes"><img src="../tshirt/brownt.jpg" width="50px" height="50px"/></a></li>
				<li><a href="gcrewneck.php" target="boxes"><img src="../tshirt/greyt.jpg" width="50px" height="50px"/></a></li>
				<li><a href="rcrewneck.php" target="boxes"><img src="../tshirt/redt.jpg" width="50px" height="50px"/></a></li>
			</ul>
		</td>
	
	
		<td valign="top" style="width: 350px"><iframe name="boxes" width="330px" height="375px" src="bcrewneck.php" 
			scrolling="no" align="left" marginheight="0" marginwidth="0" frameborder="0" border="0">			
			</iframe>
		</td>


		<td valign="top">
			<article>
				<h1><span style="color: red"></span>Crew Neck T-Shirt</h1>
				<p>RM59.00</p>
				<p>Colour: <br/><a href="bcrewneck.php" target="boxes">
				<img src="../tshirt/brownt.jpg" alt="Brown" title="Brown" width="40" height="40"/></a>
				<a href="gcrewneck.php" target="boxes">
				<img src="../tshirt/greyt.jpg" alt="Grey" title="Grey" width="40" height="40"/></a>
				<a href="rcrewneck.php" target="boxes">
				<img src="../tshirt/redt.jpg" alt="Red" title="Red" width="40" height="40"/></a>
				
				</p>
				
				<p>Size available: <br/>S M L XL</p>
				<p>Description: <br/>This shirt will let you be casual styled.</p>
			</article>

		</td>
	</tr>
		</table>
	</div>
</div>
<!-----Insert the coding here-------->
<!--
<table border="0" width="1000" height="600">
	<tr>
		<td valign="top" style="width: 100px">
			<ul style="list-style-type:none;">
				<li><a href="boxers-bluemix.html" target="boxes"><img src="boxers.png" width="50px" height="50px"/></a></li>
			</ul>
		</td>
	
	
		<td valign="top" style="width: 350px"><iframe name="boxes" width="330px" height="375px" src="boxers-bluemix.html" 
			scrolling="no" align="left" marginheight="0" marginwidth="0" frameborder="0" border="0">			
			</iframe>
		</td>


		<td valign="top">
			<article>
				<h1><span style="color: red"></span>3 Pack Pure Cotton Striped Boxers</h1>
				<p>RM39.00</p>
				<p>Colour: <br/><a href="boxers-bluemix.html" target="boxes"><img src="blue-mix-stripes-colour.png" alt="Blue Mix" title="Blue Mix" width="40" height="40"/></a></p>
				<p>Size available: <br/>S M L XL</p>
				<p>Description: <br/>An excellent choice for everyday wear, these boxers are comfortable and classic. Pure cotton.</p>
			</article>

		</td>
	</tr>
</table>
-->

</div>

<?php
	include 'footer.php';
?>


<!----------------------------------->

</body>

</html>
