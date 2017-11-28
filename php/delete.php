<?php 

 include('connection.php'); 
	$id = $_GET['od_id'];

	$del="DELETE FROM customer_order WHERE order_id=$id";
	
	
	
	
		if(mysqli_query($conn,$del)){
		header( "refresh:0; url= order_history.php" );	
				echo '<script language="javascript">';
				echo 'alert("Order Deleted Successfully.")';
				echo '</script>';
		}else{
			header( "refresh:0; url= order_history.php" );	
				echo '<script language="javascript">';
				echo 'alert("Failed Deleting Order.")';
				echo '</script>';
			
		}

?>