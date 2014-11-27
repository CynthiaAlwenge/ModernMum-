<!--doctype html-->

<html>
    <head>
        <title></title>
        <link rel="stylesheet" href="css/insert.css" />
        <link rel="stylesheet" href="css/nomalize.css"/>
         <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js">
        </script>
        <script src="js/script.js"></script>
    </head>
    <body>
    	<nav>
		<ul>
	          <li><a href="index.html">HOME</a></li>
	          <li><a href="about.html">ABOUT</a></li>
	          <li><a href="comment.php">CONTACTS</a></li>
        </ul>
          <div id="log">
		<img src="images/logo.png" height="90px"width="110px"/>
	</div>
		</nav>
		<div class="h">
		<h1>Post a free ad</h1>
	</div>
		
    	
		<div id="maindiv">
		

            <div class="formdiv">
                <div class="title"><h2>Upload a Photo</h2></div>
                <form enctype="multipart/form-data" action="" method="post">
                    
                    <hr/>
                    <div id="filediv"><input name="file[]" type="file" id="file"/>
                    </div><br/>
           
                    <input type="button" id="add_more" class="upload" value=
                    "Add More Files"/>
                    <input type="submit" value="Upload File" name="submit" id="upload" 
                    class="upload"/>
                </form>
                <br/>
                <br/>
				
                <?php
                 	include "upload.php"; 
                 ?>
            </div>
           
			<div class="form_div">
				<div class="title"><h2>Product description</h2></div>
   
				<form action="insert.php" method="post">   
					<label>Describe your product</label><br />
					<textarea rows="5" cols="25" name="address"></textarea>
					<br />
					<label>RealName:</label>
					<br />
					<input class="input" type="text" name="name" value="" />
					<br />
					<label>Email:</label><br />        
					<input class="input" type="text" name="email" value="" />
					<br />
					<label>Contact:</label><br />
					<input class="input" type="text" name="contact" value="" />
					<br />
					
					<input class="submit" type="submit" name="submit" value="Post" />



<?php
	//connecting to the databasever
	$connection = mysql_connect("localhost", "root", "akirachix");

	//database selection
	$db = mysql_select_db("ModernMum", $connection);
	if(isset($_POST['submit'])){
   
	
    
    $name = $_POST['name'];
    $email = $_POST['email'];
    $comment = $_POST['comment'];
    
    if($name !=''||$email !=''){
		
	    $query = mysql_query("insert into feedback(name, email, comment,) values 
	    	('$name', '$email', '$comment')");
		echo "<br/><br/><span>Thank you!</span>";
    }
     else{
    		echo "<p> Failed <br/> Oops! Some fields are balnk!!</p>";   
    	}
 
	}
	
	mysql_close($connection);
?>					
				</form>

			</div>
			
			<div class="advert">
			<h3>Advertise a product</h3>
		
			<div class="imgone">
			<a href="#"><img src="images/images (4).jpg" height="390px"width="260px"/></a>
		</div>
			<div class="img2">
				<a href="#"><img src="images/images (3).jpg" height="390px"width="280px"/></a>
			</div>
				<div class="img3">
				<a href="#"><img src="images/images (2).jpg" height="390px"width="270px"/></a>
			</div>
			</div>
		</div>

    </body>
</html>