
<?php
	include 'contact.html';
?>
<!--doctype html-->
<html>
    <head>
        <title></title>
        <link rel="stylesheet" href="css/styles.css" />
        <link rel="stylesheet" href="css/nomalize.css"/>
    </head>
    <body>
		<div class="maindiva">
		
			<div class="form_div">
				<div class="title"><h2></h2></div>
   
				<form action="comment.php" method="post">    
					<h2>Post a comment</h2>
					<label>UserName:</label>
					<br />
					<input class="input" type="text" name="name" value="" />
					<br />
					<label>Email:</label><br />        
					<input class="input" type="text" name="email" value="" />
					<br />
					
					<label>Comment:</label><br />
					<textarea rows="5" cols="25" name="address"></textarea>
					<br />
					<input class="submit" type="submit" name="submit" value="Submit comment" />	

<?php
	
	$connection = mysql_connect("localhost", "root", "akirachix");

	
	$db = mysql_select_db("ModernMum", $connection);
	if(isset($_POST['submit'])){
   
	
    
    $name = $_POST['name'];
    $email = $_POST['email'];
    
    $address = $_POST['comment'];
    if($name !=''||$email !=''){
	
    $query = mysql_query("insert into feedback(name, email,  comment) values
     ('$name', '$email',  '$comment')");
	echo "<br/><br/>
		<span>Comment posted successfully</span>";
		
    }
    else{
    echo "<p>Insertion Failed <br/> Some fields are blank</p>";   
    }
 
	}
	//Closing Connection with the database
	mysql_close($connection);
?>					
				</form>
			</div>
			
		</div>
    </body>
</html>