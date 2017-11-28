
<html>
<body>

<?php

	session_start(); 
	include('connection.php');
	

	if(!empty($_POST['user_name']) && !empty($_POST['user_address']) && !empty($_POST['user_contact']))
	{
		$res = array();
		$name = $_POST['user_name'];
		$address = $_POST['user_address'];
		$contact = $_POST['user_contact'];
		$product_id =  $_POST['product_id'];
		$product_qty = $_POST['product_qty'];

				
		$sql = "INSERT INTO customer_order(user_id,customer_name,customer_contact,customer_address,item_id,item_quantity)VALUES ('" . $_SESSION['user_id'] . "', '$name', '$contact', '$address', '$product_id', '$product_qty')";		
		
		mysqli_query($conn, $sql);
		
		$sql2 = "SELECT product_quantity FROM products where product_id = $product_id";
		
		$result = mysqli_query($conn, $sql2);
		
		$row = mysqli_fetch_array($result,MYSQLI_ASSOC);
				
		$current_qty = $row['product_quantity'];		
		$current_qty = $current_qty-$product_qty;	
		
		
		
		$sql3 = "UPDATE products SET product_quantity = $current_qty WHERE product_id= $product_id";
					
		mysqli_query($conn, $sql3);
					
		header( "refresh:0; url= homepage.php" );
		echo '<script language="javascript">';
		echo 'alert("Submit successful")';
		echo '</script>';
	}
	
	
	else
	{	
			//header('location:order_confirm.php');
			header( "refresh:0; url= order.php" );
			echo '<script language="javascript">';
			echo 'alert("Please fill in all column ")';
			echo '</script>';
	}	

	//echo json_encode($res);	
	
?>
</body>
</html>