<?php session_start();?>
<!DOCTYPE html>
<html lang="en">

<head>
	<title>The Lighters - Order History</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/bootstrap-theme.min.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="font-awesome/css/font-awesome.min.css" />
	<link rel="stylesheet" type="text/css" href="../css/home.css">
	<!--
	<link rel="stylesheet" type="text/css" href="footer.css">
	-->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        
	<script src="https://cdnjs.cloudflare.com/ajax/libs/1000hz-bootstrap-validator/0.11.5/validator.min.js">
    </script>
	
</head>

<body>
	
	
	<div id="container">
	<?php 
	include('connection.php');
	include('navigation.php');
	
	$user_id = $_SESSION['user_id'];

	$sql = "SELECT order_id, item_id ,item_quantity FROM customer_order where user_id= '$user_id' ";
	$result = $conn->query($sql);
	?>
		
	<div class="container">
		<table class="table table-hover" style="background-color:white;">
		
		<thead>
		<tr>
			<th style="padding-right:-50px;">Order ID</th>
			<th>Item ID</th>
			<th>Item Name</th>
			<th>Quantity</th>
			<th>Total</th>

		</tr>
		</thead>
  
  	<?php while ($row = mysqli_fetch_array($result,MYSQLI_ASSOC))
	{
			$temp_id = $row['item_id'];
			$temp_quantity = $row['item_quantity'];
			$sql2 = "SELECT product_name,product_price FROM products where product_id = '$temp_id' ";
			$result2 = $conn->query($sql2);	
	?>

	
		  	<?php while ($row2 = mysqli_fetch_array($result2,MYSQLI_ASSOC)){
				$item_name = $row2['product_name'];
				$item_price = $row2['product_price'] * $temp_quantity;
				
			?>
			<?php }?>	
		
		<tbody>
		<tr>
			<th width="10%" scope="row" style="padding-left:30px"><?php echo $row['order_id'];?></th>
			<td><?php echo $temp_id;?></td>
			<td><?php echo $item_name;?></td>
			<td><?php echo $temp_quantity;?></td>
			<td><?php echo "RM ",$item_price?></td>
			<td><form action="delete.php" method="get">
			<input type="hidden" id="od_id" name="od_id" value="<?php echo $row['order_id'] ?>">
			<button type="submit"
			class="btn btn-danger">Delete</button></form></td>
		</tr>
		</tbody>
		

		
	<?php }?>	
		
		</table>
		 
	</div> 
		 

	</div>
	
	<?php include 'footer.php';
	?>
	
</body>
</html>











