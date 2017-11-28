<?php
	session_start(); 
	require "connection.php";	
	
	

	if(!empty($_POST['name']) && !empty($_POST['password']) )
	{

		$name = $_POST['name'];
		$password = $_POST['password'];
		$sql = "SELECT `user_id`,`username`,`first_name`,`last_name`,`email`,`password` FROM `accounts` WHERE `username`='$name' && `password`='$password' ";
		$result = mysqli_query($conn,$sql);
		$row = mysqli_fetch_array($result,MYSQLI_ASSOC);
		
		
		$id = $row['user_id'];
		$last_name = $row['last_name'];
		
		
		if($row['username'] == $name && $row['password'] == $password)
		{		
			
			$_SESSION['user_id'] = $id;
			$_SESSION['last_name'] = $last_name;
			
			
				header( "refresh:0; url= homepage.php" );	
				echo '<script language="javascript">';
				echo 'alert("Login Successful")';
				echo '</script>';
		
				
			
			
			
			
			
		}
		else
		{
			header( "refresh:0; url= login.php" );
			echo '<script language="javascript">';
			echo 'alert("Login Failed")';
			echo '</script>';
		}
	}
	else
	{
			header( "refresh:0; url= login.php" );
			echo '<script language="javascript">';
			echo 'alert("No login data... ")';
			echo '</script>';
	}	
?>