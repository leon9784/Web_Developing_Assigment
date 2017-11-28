<?php session_start();?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>The Lighters - Order</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/bootstrap-theme.min.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<!--
	<link rel="stylesheet" type="text/css" href="css1.css">	
	<link rel="stylesheet" type="text/css" href="footer.css">
	-->
	<link rel="stylesheet" type="text/css" href="../css/home.css">
	<link rel="stylesheet" type="text/css" href="../css/login_form.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	
	

	
	
</head>

<body>
	


	
	<div id="container">
	<?php include('connection.php');?>
	<?php include('navigation.php');?>
		

	
	
		<?php if (isset($_SESSION['user_id'])):?>

		
	<div class = "login">
		<div class = "login_container">
			<div class = "login_panel panel panel-default">
				<div class="panel-body">
					<h1 id="textHead" class = "text-center">Shipping Address</h1>
					
					<hr>
					<form name="order_form" id="textContent" class = "form-horizontal"  method = "post" action="processorder.php">
					
							<div class = "form-group">
								<label class = "control-label col-sm-3"></label>
								<div class = "col-sm-12">
									<h4>Name :</h4>
									<input type = "text" class = "form-control" name = "user_name" placeholder = "Enter name" id="user_name" required="required">
								</div>
								<span class="help-block" id="error"></span>
							</div>
							
							
							<div class = "form-group" style="margin-top:-15px;margin-bottom:-15px">
								<label class = "control-label col-sm-3"></label>
								<div class = "col-sm-12">
									<h4>Address : </h4>
									
									<textarea cols="40" rows="3" class ="form-control" name="user_address" placeholder = "Enter shipping address" id="user_address" style="resize:none;" required="required"></textarea>
					
								</div>
								<span class="help-block" id="error"></span>
							</div>
							
							<div class = "form-group">
								<label class = "control-label col-sm-3"></label>
								<div class = "col-sm-12">
									<h4>Contact : </h4>
									<input type = "text" class ="form-control" name = "user_contact" placeholder = "Enter contact number" id="user_contact" required="required">
								</div>
								<span class="help-block" id="error"></span>
							</div>

							
							<input type="hidden" id="pro_id" name="product_id" value="">
							<input type="hidden" id="pro_qty" name="product_qty" value="<?php echo $_POST['select']; ?>" >
						
							
							<div class = "form-group">
								<div class="col-sm-12">
									<input type = "Submit" class = "btn btn-block btn-default btn-info" value="Confirm Order">
								</div>
							</div>
					</form>
				</div>
			</div>
			
		</div>
	</div>
	
	
	
	<?php else:?>
	<?php
		$_SESSION['check_login'] = 1;
		header( "refresh:0; url= login.php" );

	?>
	<?php endif; ?>

		
	</div>


	
	
<script type="text/javascript">


		var temp_id = sessionStorage.getItem('id'); 
		var temp_qty = sessionStorage.getItem('quantity'); 
		document.getElementById('pro_id').value = temp_id;
		//document.getElementById('pro_qty').value = temp_qty;
	
	
</script>

<script>
</script>

<!--
    <script src="../js/bootstrap.min.js"></script>
    <script src="../assets/jquery-1.11.2.min.js"></script>
    <script src="../assets/jquery.validate.min.js"></script>
	<script src="../assets/register1.js"></script>
-->
<?php 
	include 'footer.php';
?>
	
</body>
</html>