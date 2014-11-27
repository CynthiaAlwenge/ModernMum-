<?php

	 $connection = mysql_connect("localhost", "root", "akirachix");

	// Selecting Database to connect to
	 $db = mysql_select_db("ModernMum", $connection);

	 
	$email=$_POST['email1'];
	$password= sha1($_POST['password1']);  

	
	$email = filter_var($email, FILTER_SANITIZE_EMAIL); 

	if (!filter_var($email, FILTER_VALIDATE_EMAIL))
	 {
	    echo "Invalid Email.......";
	 }
	else
	 {
		$result = mysql_query("SELECT * FROM users WHERE email='$email' AND password='
			$password'");
	    $data = mysql_num_rows($result);
		       
		if($data==1)
	      {
			 echo "You have succesfully loged in";    
		  } 
		else
		{
			echo "Invalid email or password";
		}  
	 }
 
//connection closed
mysql_close ($connection);
header("Location:index.html");
?>