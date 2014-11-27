<?php

	 $connection = mysql_connect("localhost", "root", "akirachix");


	 $db = mysql_select_db("ModernMum", $connection);

	 
	$name=$_POST['name1'];
	$email=$_POST['email1'];
	$password= sha1($_POST['password1']); 


	$email = filter_var($email, FILTER_SANITIZE_EMAIL); 

	if (!filter_var($email, FILTER_VALIDATE_EMAIL))
	 {
	    echo "Invalid emailaddress";
	 }
	else
 {
	$result = mysql_query("SELECT * FROM users WHERE email='$email'");
        $data = mysql_num_rows($result);
	        
	if(($data)==0)
      {
		//Inserting data into the database
	   $query = mysql_query("insert into users(name, email, password) values 
	   	('$name', '$email', '$password')");
		if($query)
		   {
			  echo "You have Successfully Registered!";
		   }
		else
		   {
			  echo "Error";   
		   }
		} 
			else{
	
		echo "This email is already registered, Please try another email";
	}  
 }
 

	mysql_close ($connection);
	header("Location:index.html");

?>