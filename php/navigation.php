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
      <li><a href="homepage.php">Home</a></li>
      <li><a href="aboutUs.php">About Us</a></li>
      </li>
	  
	  <li class="dropdown">
        <a class="dropdown-toggle" data-toggle="dropdown" href="#">Clothing 
        <span class="caret"></span></a>
        <ul class="dropdown-menu">
		<!-- tshirt.php-->
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
	<?php if(isset($_SESSION['user_id'])): 	?>

		   
		   <li class="dropdown">
			<a class="dropdown-toggle" data-toggle="dropdown" href="#" id="user_account"><?php echo $_SESSION['last_name'] ?> 
			<span class="caret"></span></a>
			<ul class="dropdown-menu">
			<li><a href="order_history.php">My Order</a></li>
			<li><a href="logout.php">Logout</a></li>
			</ul>
		</li>
		   
		   
		   
	<?php else: ?>
      <li><a href="testvalidation.php" target="_top"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
      <li><a href="login.php"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
	  <?php endif ?>
    </ul>
  </div>
  </div>
</nav>
<br/>