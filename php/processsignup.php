<?php
	session_start(); 
	require "connection.php";

	
	if(!empty($_POST['name']) && !empty($_POST['firstname']) && !empty($_POST['lastname']) && !empty($_POST['email']) && !empty($_POST['password']))
	{
			$name = $_POST['name'];
			$firstname = $_POST['firstname'];	
			$lastname = $_POST['lastname'];
			$email = $_POST['email'];
			$password = $_POST['password'];	
			
			
			
			
			$query_email = "SELECT `email` FROM `accounts` WHERE `email`='$email'";
			$query_run_email = mysqli_query($conn,$query_email);

			if(!filter_var($email, FILTER_VALIDATE_EMAIL) === FALSE)
			{
				if (mysqli_num_rows($query_run_email))
				{
					header( "refresh:0; url= testvalidation.php" );
					echo '<script language="javascript">';
					echo 'alert("Try again,email already exists!")';
					echo '</script>';
				}
				else
				{
					$sql = "INSERT INTO accounts(`username`, `first_name`,`last_name`,`email`,`password`)VALUES ('$name', '$firstname','$lastname', '$email', '$password')";		
					mysqli_query($conn, $sql);
					
					header( "refresh:0; url= homepage.php" );
					//echo '<script language="javascript">';
					//echo 'alert("Account created successfully.")';
					//echo '</script>';
				}
			}else
			{			
				header( "refresh:0; url= testvalidation.php" );
				echo '<script language="javascript">';
				echo 'alert("Wrong email format,example : me@example.com")';
				echo '</script>';
			}
			
			
	}else
	{
				header( "refresh:0; url= testvalidation.php" );
				echo '<script language="javascript">';
				echo 'alert("Failed creating account,please fill in the required information")';
				echo '</script>';
	}		
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
		
		
?>