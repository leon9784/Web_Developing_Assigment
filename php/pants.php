<?php session_start();?>

<html>


<?php 
		require "connection.php";	
		$sql = "SELECT * FROM `products` WHERE product_category = 'pants'";
		$result = mysqli_query($conn,$sql);
		

?>

<head>

<title>The Lighters - Clothing - Pants</title>
		<link rel="stylesheet" type="text/css" href="../css/home.css">
		<link rel="stylesheet" type="text/css" href="../css/products.css">

	<link rel="shortcut icon" href="../img/favicon.ico"/>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="../css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
	<script src="../js/bootstrap.min.js"></script>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	
	<script type="text/javascript">
	$(document).on("click", ".identifyingClass", function () {

     var id = $(this).data('id');
     var name = $(this).data('name');
     var price = $(this).data('price');
     var quantity = $(this).data('quantity');
     var image = $(this).data('image');
	 
	 sessionStorage.setItem('name', name);
	 sessionStorage.setItem('price', price);
	 sessionStorage.setItem('quantity', quantity);
	 sessionStorage.setItem('id', id);
	 
	 //alert("id="+id+"name="+name+"price="+price+"quantity="+quantity+"image="+image);

	 document.getElementById("item_name").innerHTML = name;
	 document.getElementById("item_price").innerHTML = "RM "+price;
	 document.getElementById("item_image").src = "../pants/" + image;

	 
});

	
	
</script>
	
</head>

<body>

<?php 
	include 'navigation.php';
?>


	<div class="container" style="margin-bottom:20px"><h2><strong>Pants</strong></h2></div>

<div class="container products" style="margin-bottom:20px">


<?php while ($row = mysqli_fetch_array($result,MYSQLI_ASSOC)){   ?>

  <div class="product-card">
    <div class="product-image">
	
	<?php 
	$id = (isset($_GET['row'])?$_GET['row']:'');
	//$row['id'];
	?>
	
	<a><img id="product-image" class="identifyingClass" src="../pants/<?php echo $row['product_img']; ?>"
	  data-id="<?php echo $row['product_id'];?>" 
		data-name="<?php echo $row['product_name'];?>"
		data-price="<?php echo $row['product_price'];?>"
		data-quantity="<?php echo $row['product_quantity'];?>"
		data-image="<?php echo $row['product_img'];?>"
		data-toggle="modal" data-target="#product_view">
		</a>
      
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

<?php 
	include 'product_modal2.php';
?>
</body>
</html>