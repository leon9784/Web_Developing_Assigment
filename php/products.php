<?php session_start();?>

<html>


<?php 
		require "connection.php";	
		$sql = "SELECT * FROM `products` WHERE product_category = 'tshirt'";
		$result = mysqli_query($conn,$sql);
		

?>

<head>

<title>The Lighters - Clothing - T-Shirt</title>
		<link rel="stylesheet" type="text/css" href="../css/home.css">

	<link rel="shortcut icon" href="../img/favicon.ico"/>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="../css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
	<script src="../js/bootstrap.min.js"></script>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<style>
.products {
  display: flex;
  flex-wrap: wrap;
  padding-left:80px;
}

.product-card {
  flex: 1 16%%;
}

img
{
	width:200px;
	height:200px;
}

#fb,#insta{
	width:27px;
	height:27px;
}

.product-name {
	font-size: 14px;
	font-weight: bold;
}


	</style>
</head>

<body>
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
-->
<?php 
	include 'navigation.php';
?>


	<div class="container" style="margin-bottom:20px"><h2><strong>T-Shirt</strong></h2></div>

<div class="container products" style="margin-bottom:20px">


<?php while ($row = mysqli_fetch_array($result,MYSQLI_ASSOC)){   ?>

  <div class="product-card">
    <div class="product-image">
	
	<?php 
	$id = (isset($_GET['row'])?$_GET['row']:'');
	//$row['id'];
	?>
	
      <a href="product_detail.php?id=<?php echo $id?>"><img onerror="this.src = 'src/image/No_available_image.jpg'" src="../tshirt/<?php echo $row['product_img']; ?>"></a>
    </div>
    <div class="product-info" style="width: 200px;">
      <h5><?php echo $row['product_name'];?></h5>
      <h6><?php echo $row['product_price'];?></h6>
     
    </div>
  </div>

<?php }?>
    





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

</body>
</html>